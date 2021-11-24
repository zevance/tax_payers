<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxpayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxpayers', function (Blueprint $table) {
            $table->id();
            $table->string('tpin');
            $table->string('business_certificate_number');
            $table->string('trading_name');
            $table->integer('mobile_number');
            $table->string('email');
            $table->text('physical_location');
            $table->date('business_registration_date');
            $table->foreignId('user_id')->constrained()->onDelete('no action');
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
        Schema::dropIfExists('taxpayers');
    }
}
