<?php

namespace App\Interfaces;

use App\Models\User;

interface UserRepositoryInterface
{
    public function register(array $data): User;
    public function findByColumn(string $column, mixed $value): User|null;
}
