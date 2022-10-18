<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository implements UserRepositoryInterface
{
    public function register(array $data): User
    {
        return DB::transaction(static function () use ($data) {
            $user = new User();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = $data['password'];
            $user->save();

            return $user;
        });
    }

    public function findByColumn(string $column, mixed $value): User|null
    {
        return User::newQuery()->where($column, $value)->first();
    }
}
