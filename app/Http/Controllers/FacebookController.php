<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class FacebookController extends Controller
{
    private AuthService $authService;

    public function __construct()
    {
        $this->authService = app(AuthService::class);
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            $credentials = $this->authService->socialLoginCallback('facebook');
            return self::responseWithToken($credentials['token'], $credentials['user']);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
