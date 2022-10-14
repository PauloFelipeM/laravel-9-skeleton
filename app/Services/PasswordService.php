<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class PasswordService
{
    public function forgotPassword(array $credentials): string
    {
        $user = Password::getUser($credentials);

        if ($user === null || !$user->getEmailForPasswordReset()) {
            throw new HttpResponseException(
                response()->json(
                    [
                        'status' => ResponseAlias::HTTP_NOT_FOUND,
                        'result' => 'failed',
                        'message' => __('password.no_email'),
                    ],
                    ResponseAlias::HTTP_NOT_FOUND
                )
            );
        }

        return Password::sendResetLink($credentials);
    }

    public function resetPassword(array $credentials): string
    {
        return Password::reset(
            $credentials,
            static function (User $user, $password) {
                $user->forceFill([
                    'password' => $password,
                ])->setRememberToken(Str::random(60));
                $user->save();

                event(new PasswordReset($user));
            }
        );
    }
}
