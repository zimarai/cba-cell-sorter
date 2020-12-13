<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');

            /* Attendant data */
            $table->string('attendant_name');
            $table->string('attendant_email');
            $table->string('attendant_phone');
            $table->enum('organization_type',[1,2]);
            $table->string('organization_name')->nullable();
            
            /* Reservation data */
            $table->datetime('scheduled_date');
            $table->enum('slot',['MORNING', 'AFTERNOON']);
            $table->string('specie')->nullable();
            $table->integer('total_antibodies')->nullable();
            $table->string('fluorophores');
            $table->char('reservation_code',6);
            $table->enum('status', ['PENDING', 'CANCELLED', 'DELETED', 'COMPLETED', 'UNUSED'])->default('PENDING');

            $table->foreignId('attendant_user_id')->nullable()->constrained('users')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment');
    }
}
