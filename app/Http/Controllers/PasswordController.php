<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Services\PasswordService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Password;

class PasswordController extends Controller
{
    private PasswordService $passwordService;

    public function __construct()
    {
        $this->passwordService = app(PasswordService::class);
    }

    public function forgotPassword(ForgotPasswordRequest $request): JsonResponse
    {
        $status = $this->passwordService->forgotPassword($request->only(['email']));

        if ($status === Password::RESET_LINK_SENT) {
            return response()->json(['message' => __($status)]);
        }

        return response()->json(['message' => __($status)], 400);
    }

    public function resetPassword(ResetPasswordRequest $request): JsonResponse
    {
        $status = $this->passwordService->resetPassword(
            $request->only(
                'email',
                'password',
                'password_confirmation',
                'token',
            )
        );

        if ($status === Password::PASSWORD_RESET) {
            return response()->json(['message' => __($status)]);
        }

        return response()->json(['message' => __($status)], 400);
    }
}
