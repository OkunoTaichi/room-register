<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * ユーザーがこのリクエストの権限を持っているか判断
     * @return bool
     */
    public function authorize()
    {
        return true;
        // return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'room_id' => 'required | numeric | max:100',
            'title' => 'required | max:100',
            'people' => 'required | numeric | max:100',
            'content' => 'max:100',
        ];
    }
}
