<?php

namespace App\Http\Requests;

use App\Traits\MessageHTTP;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BaseRequest extends FormRequest
{
    use MessageHTTP;

    protected function rules(): array
    {
        return [];
    }

    protected function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(self::responseValidation($validator->errors()));
    }
}
