<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Appointment;
use Illuminate\Support\Facades\DB;

class BackendController extends Controller
{
    public function index()
    {        
        $appointments = Appointment::orderByDesc('scheduled_date')->get();
        return view('dashboard', compact('appointments'));
    }

    public function modify(Request $request)
    {
        $appointment = Appointment::where('reservation_code', $request->reservation_code)->first();
        if ($appointment) {
            return view('modify', ['appointment' => $appointment, 'reservation_code' => $request->reservation_code, 'operation' => $request->operation]);
        }
        return abort(404);
    }

    public function modifyConfirmation(Request $request)
    {   
        switch ($request->operation){

            case 'VOID':
                $appointment = Appointment::where('reservation_code', $request->reservation_code)
                ->whereIn('status', ['EXPIRED'])->first();
                $appointment->status = 'ABSENTED';
                $appointment->edited_by = 'ADMINISTRATOR';
                $appointment->save();
                return view('modifySuccess', [
                    'reservation_code' => $request->reservation_code, 
                    'message' => 'Ha configurado exitosamente la reserva como DESIERTA.'
                ]);
                break;
            case 'CANCEL':
                $appointment = Appointment::where('reservation_code', $request->reservation_code)
                ->whereIn('status', ['AWAITING','ENTERED'])->first();
                $appointment->status = 'CANCELED';
                $appointment->edited_by = 'ADMINISTRATOR';
                $appointment->save();
                return view('modifySuccess', [
                    'reservation_code' => $request->reservation_code, 
                    'message' => 'Ha ANULADO exitosamente la reserva.'
                ]);
                break;
            case 'REJECT':
                $appointment = Appointment::where('reservation_code', $request->reservation_code)
                ->whereIn('status', ['ENTERED'])->first();
                $appointment->status = 'REJECTED';
                $appointment->edited_by = 'ADMINISTRATOR';
                $appointment->save();
                return view('modifySuccess', [
                    'reservation_code' => $request->reservation_code, 
                    'message' => 'Ha RECHAZADO exitosamente la reserva.'
                ]);
                break;
            case 'APPROVE':
                $appointment = Appointment::where('reservation_code', $request->reservation_code)
                ->whereIn('status', ['ENTERED'])->first();
                $appointment->status = 'AWAITING';
                $appointment->edited_by = 'ADMINISTRATOR';
                $appointment->save();
                return view('modifySuccess', [
                    'reservation_code' => $request->reservation_code, 
                    'message' => 'Ha APROBADO exitosamente la reserva.'
                ]);
                break;
            case 'COMPLETE':
                $appointment = Appointment::where('reservation_code', $request->reservation_code)
                ->whereIn('status', ['EXPIRED'])->first();
                $appointment->status = 'COMPLETED';
                $appointment->edited_by = 'ADMINISTRATOR';
                $appointment->save();
                return view('modifySuccess', [
                    'reservation_code' => $request->reservation_code, 
                    'message' => 'Ha configurado exitosamente la reserva como COMPLETADA.'
                ]);
                break;
        }
        return abort(404);
    }
}


