<?php

namespace App\Repositories;

use App\Interfaces\FileRepositoryInterface;
use App\Models\File;

class FileRepository implements FileRepositoryInterface
{
    public function create(array $data): File
    {
        $model = new File();
        $model->fill($data);
        $model->save();

        return $model;
    }

    public function delete(int $id): void
    {
        $file = File::newQuery()->find($id);
        $file->delete();
    }
}
