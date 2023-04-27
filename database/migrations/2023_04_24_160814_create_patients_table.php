<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            $table->string('first_name',255);
            $table->string('last_name',255);
            $table->string('phone',255);
            $table->string('email',255);
            $table->string('street_address',255);
            $table->string('address_line_2',255);
            $table->string('fk_city_id',255);
            $table->string('fk_state_id',255);
            $table->string('fk_country_id',255);
            $table->integer('zip_code');
            $table->string('updated_by',255);

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
        Schema::dropIfExists('patients');
    }
}
