<?php

namespace App\Http\Requests;

use App\Models\Inquiry;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreInquiryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('inquiry_create');
    }

    public function rules()
    {
        return [
            'ip' => [
                'string',
                'nullable',
            ],
            'mobile' => [
                'string',
                'nullable',
            ],
            'email' => [
                'string',
                'nullable',
            ],
            'name' => [
                'string',
                'nullable',
            ],
            'subject' => [
                'string',
                'nullable',
            ],
            'product_interest' => [
                'string',
                'nullable',
            ],
            'qty' => [
                'nullable',
                'integer',
                'min:1'
            ],
            'page_url' => [
                'string',
                'nullable',
            ],
        ];
    }
}
