<?php

namespace App\Services;

use App\Interfaces\AuthRepositoryInterface;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class AuthService
{
    private AuthRepositoryInterface $authRepository;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository;
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
        $user = $this->authRepository->register($data);
        return $this->login($user['email'], $data['password']);
    }
}
