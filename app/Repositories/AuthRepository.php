<?php

namespace App\Repositories;

use App\Interfaces\AuthRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AuthRepository implements AuthRepositoryInterface
{
    public function register(array $data)
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
}
