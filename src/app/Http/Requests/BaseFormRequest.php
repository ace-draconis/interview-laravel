<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest as LaravelFormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use App\Support\ApiResponse;

class BaseFormRequest extends LaravelFormRequest
{
    public function rules(): array
    {
        return [];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param \Illuminate\Contracts\Validation\Validator $validator
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        $apiResponse = app(ApiResponse::class);
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(
            $apiResponse->inputError($errors)
        );
    }
}
