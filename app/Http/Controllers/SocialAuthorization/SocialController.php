<?php

namespace App\Http\Controllers\SocialAuthorization;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

abstract class SocialController extends Controller
{
    private AuthService $authService;

    public function __construct()
    {
        $this->authService = app(AuthService::class);
    }

    abstract protected function type(): string;

    public function redirectToSocialMedia(): JsonResponse
    {
        return self::responseJson(
            ResponseAlias::HTTP_OK,
            'success',
            Socialite::driver($this->type())->redirect()
        );
    }

    public function handleSocialMediaCallback(): JsonResponse
    {
        $credentials = $this->authService->socialLoginCallback($this->type());
        return self::responseWithToken($credentials['token'], $credentials['user']);
    }
}
