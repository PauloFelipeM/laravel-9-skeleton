<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class AuthController extends Controller
{
    private AuthService $authService;

    public function __construct()
    {
        $this->authService = app(AuthService::class);
    }

    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = $this->authService->login(
            $request->get('email'),
            $request->get('password'),
        );

        return self::responseWithToken($credentials['token'], $credentials['user']);
    }

    public function register(RegisterRequest $request): JsonResponse
    {
        $credentials = $this->authService->register($request->all());
        return self::responseWithToken($credentials['token'], $credentials['user']);
    }

    public function refreshToken(): JsonResponse
    {
        return self::responseWithToken(Auth::refresh(), Auth::user());
    }

    public function me(): JsonResponse
    {
        return self::responseJson(ResponseAlias::HTTP_OK, 'success', Auth::user());
    }

    public function logout(): JsonResponse
    {
        Auth::logout();
        return self::responseJson(
            ResponseAlias::HTTP_OK,
            'success',
            null,
            __('auth.logout')
        );
    }
}
