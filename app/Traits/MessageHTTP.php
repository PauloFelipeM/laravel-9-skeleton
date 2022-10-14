<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

trait MessageHTTP
{
    public static function responseWithToken($token, $user = null): JsonResponse
    {
        return response()->json([
            'token' => $token,
            'user' => $user,
            'expires_in' => Carbon::now()->addMinutes(env('JWT_TTL')),
        ], ResponseAlias::HTTP_OK);
    }

    public static function responseJson($status, $result = 'success', $data = null, $message = null): JsonResponse
    {
        $responseJsonData = [
            'result' => $result,
        ];

        if ($data) {
            $responseJsonData['data'] = $data;
        }
        if ($message) {
            $responseJsonData['message'] = $message;
        }

        return response()->json($responseJsonData, $status);
    }

    public static function responseValidation($errors, $status = ResponseAlias::HTTP_UNPROCESSABLE_ENTITY): JsonResponse
    {
        return response()->json([
            'message' => 'Erro na validação dos dados',
            'errors' => $errors,
        ], $status);
    }
}
