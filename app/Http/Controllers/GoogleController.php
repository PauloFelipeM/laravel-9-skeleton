<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class GoogleController extends Controller
{
    private AuthService $authService;

    public function __construct()
    {
        $this->authService = app(AuthService::class);
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $credentials = $this->authService->socialLoginCallback('google');
            return self::responseWithToken($credentials['token'], $credentials['user']);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
