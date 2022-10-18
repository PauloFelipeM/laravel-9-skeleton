<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LinkedinController;
use App\Http\Controllers\PasswordController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1'], static function () {
    Route::group(['prefix' => 'auth'], static function () {
        Route::controller(AuthController::class)->group(function () {
            Route::post('login', 'login');
            Route::post('register', 'register');

            Route::middleware('auth:api')->group(function () {
                Route::get('me', 'me');
                Route::get('logout', 'logout');
                Route::get('refresh', 'refreshToken');
            });
        });

        Route::controller(PasswordController::class)->group(function () {
            Route::post('forgot-password', 'forgotPassword');
            Route::post('reset-password', 'resetPassword');
        });

        Route::controller(GoogleController::class)->group(function () {
            Route::get('google', 'redirectToGoogle');
            Route::get('google/callback', 'handleGoogleCallback');
        });

        Route::controller(FacebookController::class)->group(function(){
            Route::get('facebook', 'redirectToFacebook');
            Route::get('facebook/callback', 'handleFacebookCallback');
        });

        Route::controller(LinkedinController::class)->group(function(){
            Route::get('linkedin', 'redirectToLinkedin');
            Route::get('linkedin/callback', 'handleLinkedinCallback');
        });
    });
});
