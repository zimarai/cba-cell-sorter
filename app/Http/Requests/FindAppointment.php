<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Appointment;
use Illuminate\Validation\Rule;

class FindAppointment extends FormRequest
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
            'reservation_code' => 'required|min:6|max:6',
            'attendant_email' => 'required|email',
        ];
    }

    public function withValidator($validator) {
        $validator->after(function ($validator){
            $exist = Appointment::where(
                    'reservation_code', 
                    $this->reservation_code
                )
                ->where(
                    'attendant_email', 
                    $this->attendant_email
                )
                ->exists();
            if(!$exist) {
               $validator->errors() 
                ->add('reservation_code', 'La reserva no existe');
            }
        });
    }
}
