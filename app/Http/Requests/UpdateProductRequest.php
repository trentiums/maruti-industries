<?php

namespace App\Http\Requests;

use App\Models\Product;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProductRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'slug' => [
                'string',
                'required',
                'unique:products,slug,' . request()->route('product')->id,
            ],
            'gallery' => [
                'array',
            ],
            'documents' => [
                'array',
            ],
            'meta_title' => [
                'string',
                'nullable',
            ],
           /*  'category_id' => [
                'required',
                'integer',
            ], */
        ];
    }
}
