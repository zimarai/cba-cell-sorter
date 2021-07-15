<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Validator;
use App\User;
use App\Appointment;
use App\Http\Requests\StoreAppointment;
use App\Http\Requests\FindAppointment;
use App\Mail\AppointmentRequested;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function create()
    {        
        return view('appointment.create');
    }

    public function store(StoreAppointment $request)
    {
        $validated = $request->validated();

        $user = User::where('email', $request->input('attendant_email'))->first();
        $reservation_code = strtoupper(Str::random(6));

        $appointment = new Appointment;
        $appointment->attendant_name =      $validated['attendant_name'];
        $appointment->attendant_email =     $validated['attendant_email'];
        $appointment->attendant_phone =     $validated['attendant_phone'];
        $appointment->organization_type =   $validated['organization_type'];
        $appointment->organization_name =   $validated['organization_name'];
        $appointment->scheduled_date =      format_date($validated['scheduled_date'], 'Y-m-d');
        $appointment->slot =                $validated['slot'];
        $appointment->specie =              $validated['specie'];
        $appointment->total_antibodies =    $validated['total_antibodies'];
        $appointment->fluorophores =        $validated['fluorophores'];
        $appointment->reservation_code =    $reservation_code;
        $appointment->attendant_user_id =   $user->id ?? null;
        $appointment->save();

        Mail::to($appointment->attendant_email)
            ->bcc(config('mail.bcc_copy'))
            ->send(new AppointmentRequested($appointment));

        return view('appointment.success', compact('appointment'));
       // }
    }

    public function cancel()
    {
        return view('appointment.cancelForm');
    }

    public function cancelFind(FindAppointment $request)
    {
        $validated = $request->validated();
        $appointment = Appointment::where([
            ['reservation_code', $request->reservation_code],
            ['attendant_email', $request->attendant_email]
        ])->first();
        return view('appointment.cancelConfirmation', compact('appointment'));
    }

    public function cancelConfirmation(FindAppointment $request)
    {   
        $validated = $request->validated();
        $appointment = Appointment::where([
            ['reservation_code', $request->reservation_code],
            ['attendant_email', $request->attendant_email]
        ])->whereIn('status', ['AWAITING','ENTERED'])->first();
        $appointment->status = 'CANCELED';
        $appointment->edited_by = 'USER';
        $appointment->save();
        return view('appointment.cancelSuccess', ['reservation_code' => $request->reservation_code]);
    }
}


