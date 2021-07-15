<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;
use App\Appointment;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class StoreAppointment extends FormRequest
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

    public function withValidator($validator) {
        $validator->after(function ($validator){
            $exist = Appointment::where(
                    'slot', 
                    $this->slot
                )
                ->where(
                    'scheduled_date', 
                    format_date($this->scheduled_date,'Y-m-d')
                )
                ->exists();
            if($exist) {
               $validator->errors() 
                ->add('available_time', 'La jornada seleccionada ya ha sido reservada.');
            }
        });
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'attendant_name'    => 'required|string',
            'attendant_email'   => 'required|email',
            'attendant_phone'   => 'required|string',
            'organization_type' => ['required','numeric', Rule::in(['1', '2'])],
            // TODO: Display input field if other institution is selected
            //'organization_name' => Rule::requiredIf($request->input('organization_type') == '2'),
            'organization_name' => 'string|nullable',
            'scheduled_date'    => 'required|date_format:d-m-Y',
            'slot'              => ['required', Rule::in(['MORNING', 'AFTERNOON'])],
            'specie'            => 'string',
            'total_antibodies'  => 'numeric',
            'fluorophores'      => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'attendant_name'            => 'Ingrese su nombre',
            'attendant_email'           => 'Ingrese su email',
            'attendant_phone'           => 'Ingrese un teléfono',
            'organization_type'         => 'Ingrese el tipo de institución al que pertenece',
            //'organization_name' => 'Ingrese el nombre de su institución',
            'scheduled_date'            => 'Seleccione una fecha para su cita.',
            'slot'                      => 'Seleccione una jornada para su cita.',
            'specie'                    => 'Ingrese una especie a analizar',
            'total_antibodies.required' => 'Ingrese la cantidad de anticuerpos',
            'total_antibodies.numeric'  => 'Anticuerpos debe ser numérico',
            'fluorophores'              => 'Ingrese fluoróforos a utilizar'
        ];
    }

    public function attributes()
    {
        return [
            'attendant_name'    => 'Nombre',
            'attendant_email'   => 'E-mail',
            'attendant_phone'   => 'Teléfono',
            'organization_type' => 'Tipo de Institución',
            //'organization_name' => 'Institución',
            'scheduled_date'    => 'Fecha',
            'slot'              => 'Jornada',
            'specie'            => 'Especie',
            'total_antibodies'  => 'Total de anticuerpos',
            'fluorophores'      => 'Fluoróforos'
        ];
    }
    
    protected function prepareForValidation()
    {
        $this->merge([
            'slot' => strtoupper($this->slot)
        ]);
    }
    
}
