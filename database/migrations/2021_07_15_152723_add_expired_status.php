<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExpiredStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointments', function(Blueprint $table)
        {
            $table->dropColumn('status');
            $table->dropColumn('reservation_code');

        });
        Schema::table('appointments', function (Blueprint $table) 
        {
            $table->char('reservation_code',6)->unique()->nullable();
            $table->enum('status', [
                'ENTERED', // Usuario crea la reserva
                'REJECTED',  // Admin rechaza reserva
                'AWAITING', // Admin aprueba reserva y queda en espera de uso
                'EXPIRED', // La fecha de reserva venció
                'ABSENTED', // El usuario no asistió
                'COMPLETED', // El usuario sí asistió
                'CANCELED' // Usuario anula la reserva
            ])->default('ENTERED');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
