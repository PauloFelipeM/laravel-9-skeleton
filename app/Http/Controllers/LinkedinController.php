<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class LinkedinController extends Controller
{
    private AuthService $authService;

    public function __construct()
    {
        $this->authService = app(AuthService::class);
    }

    public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function handleLinkedinCallback()
    {
        try {
            $credentials = $this->authService->socialLoginCallback('linkedin');
            return self::responseWithToken($credentials['token'], $credentials['user']);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
