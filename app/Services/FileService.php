<?php

namespace App\Services;

use App\Interfaces\FileRepositoryInterface;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as FileFacade;
use Intervention\Image\Facades\Image;

class FileService
{
    private FileRepositoryInterface $fileRepository;
    private $sizes = [75, 100, 125];

    public function __construct(FileRepositoryInterface $fileRepository)
    {
        $this->fileRepository = $fileRepository;
    }

    /**
     * @param UploadedFile $file
     * @param string $relation
     * @param int $relationId
     */
    public function create(UploadedFile $file, string $relation, int $relationId): void
    {
        DB::transaction(function () use ($file, $relation, $relationId) {
            $fileName = $file->getFilename() . '.' . $file->getClientOriginalExtension();

            $this->fileRepository->create([
                'original_filename' => $file->getClientOriginalName(),
                'storage_filename' => $fileName,
                'mime' => $file->getClientMimeType(),
                'relation' => $relation,
                'relation_id' => $relationId,
            ]);

            $this->createImages(
                $file,
                $relation,
                $relationId,
                $fileName
            );
        });
    }

    public function delete($fileId, $file, $relation, $relationId): void
    {
        Storage::delete("{$relation}/{$relationId}/{$file}");
        foreach ($this->sizes as $size) {
            $path = "{$relation}/{$relationId}/thumbnail_{$size}x{$size}_{$file}";
            if (Storage::exists($path)) {
                Storage::delete($path);
            }
        }
        $this->fileRepository->delete($fileId);
    }

    /**
     * Geração de imagens com tamanho original, 75x75, 100x100 e 125x125
     *
     * @param UploadedFile $file
     * @param $relation
     * @param $relationId
     * @param $fileName
     */
    private function createImages(UploadedFile $file, $relation, $relationId, $fileName): void
    {
        $path = "{$relation}/{$relationId}";

        Storage::put("{$path}/{$fileName}", FileFacade::get($file));

        foreach ($this->sizes as $size) {
            $path = "{$path}/thumbnail_{$size}x{$size}_{$fileName}";
            $img = Image::make($file->getRealPath());
            $img->resize($size, $size, function ($constraint) {
                $constraint->aspectRatio();
            })->encode(null, 1);

            Storage::put(
                $path, $img->stream()
            );
        }
    }
}
