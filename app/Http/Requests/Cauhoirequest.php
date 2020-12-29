<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Cauhoirequest extends FormRequest
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
     * @return array
     */
  
    public function rules()
    {
        return [
            //
            'macauhoi'=>'uniqe:vp_cauhoi,Ma_cauhoi'
        ];
    }

     public function messages()
    {
        return [
            //
            'macauhoi.unique'=>'Mã Câu hỏi đã trùng, vui lòng nhập lại'
        ];
    }

}
