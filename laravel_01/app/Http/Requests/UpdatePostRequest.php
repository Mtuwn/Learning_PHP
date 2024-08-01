<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=> "required",
            "body" => "required"
        ];
    }

    
    protected function failedValidation(Validator $validator)
    {
        $respone = new Response([
            'status' => Response::HTTP_UNPROCESSABLE_ENTITY,
            'error' => $validator->errors(),
        ], Response::HTTP_UNPROCESSABLE_ENTITY);
        throw (new ValidationException($validator, $respone));
    }

}
