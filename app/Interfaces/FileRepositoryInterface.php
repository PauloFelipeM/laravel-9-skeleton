<?php

namespace App\Interfaces;

use App\Models\File;

interface FileRepositoryInterface
{
    public function create(array $data): File;
    public function delete(int $id): void;
}
