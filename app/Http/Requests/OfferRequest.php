<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'name_ar' => 'required|max:100|unique:offers,name_ar',
                'name_en' => 'required|max:100|unique:offers,name_en',
                // 'photo' => 'required',
                'price' => 'required|numeric',
                'details_ar' => 'required',
                'details_en' => 'required',
        ];
    }
    public function messages(){
        return $message = [
            'name_ar.required' => __('messages.offer name require'),
            'name_en.required' => __('messages.offer name require'),
            'name_ar.unique' => __('messages.offer name must be unique'),
            'name_en.unique' => __('messages.offer name must be unique'),
            'name_ar.max' => __('messages.offer name must be less than 100 letter'),
            'name_en.max' => __('messages.offer name must be less than 100 letter'),
            'price.required' => __('messages.offer price require'),
            'price.numeric' => __('messages.offer price should be number'),
            'details_ar.required' => __('messages.offer details require'),
            'details_en.required' => __('messages.offer details require'),
        ];
    }
}
