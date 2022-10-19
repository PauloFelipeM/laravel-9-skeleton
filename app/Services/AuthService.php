<?php

namespace App\Services;

use App\Interfaces\UserRepositoryInterface;
use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class AuthService
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(string $email, string $password): array
    {
        $credentials = ['email' => $email, 'password' => $password];
        $token = Auth::attempt($credentials);
        if (!$credentials || !$token) {
            throw new HttpResponseException(
                response()->json(
                    [
                        'status' => ResponseAlias::HTTP_UNAUTHORIZED,
                        'result' => 'unauthorized',
                        'message' => __('auth.failed'),
                    ],
                    ResponseAlias::HTTP_UNAUTHORIZED
                )
            );
        }
        return ['token' => $token, 'user' => Auth::user()];
    }

    public function register(array $data): array
    {
        $user = $this->userRepository->create($data);
        return $this->login($user['email'], $data['password']);
    }

    public function socialLoginCallback(string $type): array
    {
        try {
            $user = Socialite::driver($type)->user();
            $finduser = $this->userRepository->findByColumn("{$type}_id", $user->id);

            if (!$finduser) {
                return $this->userRepository->create([
                    'email' => $user->email,
                    'name' => $user->name,
                    "{$type}_id" => $user->id,
                    'password' => Str::random(10),
                ]);
            }

            Auth::login($finduser);
            return ['token' => Auth::refresh(), 'user' => Auth::user()];
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
