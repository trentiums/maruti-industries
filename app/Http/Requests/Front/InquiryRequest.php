<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;
use Closure;

class InquiryRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:191|email:rfc,dns',
            'mobile' => 'required|digits:10',
            'subject' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'product_interest' => 'nullable|string',
            'qty'=>'nullable|integer',
            'page_url' => 'required|string|max:255|url',
            'g-recaptcha-response' => [
                'required',
                function (string $attribute, mixed $value, Closure $fail) {
                    $response = Http::withOptions([
                        'verify' => false // Disable SSL certificate verification
                    ])->post('https://www.google.com/recaptcha/api/siteverify', [
                        'secret' => config('settings.captcha_secret_key'),
                        'response' => $value,
                    ]);
                }
            ],
        ];
    }
}
