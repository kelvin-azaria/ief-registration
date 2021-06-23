<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContestantRequest extends FormRequest
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
            'name'               => 'required|max:50',
            'campus_name'        => 'required|max:50',
            'campus_province'    => 'required|max:25',
            'campus_city'        => 'required|max:25',
            'id_card_address'    => 'required|max:25',
            'residence_address'  => 'required|max:25',
            'phone'              => 'required|unique:contestants|max:13',
            'birth_date'         => 'required',
            'instagram_video_url'=> 'required',
            'description'        => 'required',
        ];
    }
}
