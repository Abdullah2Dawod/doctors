<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_doctors', function (Blueprint $table) {
            $table->id();
            $table->string('usernamedoctor');
            $table->string('specialty');
            $table->string('graduation');
            $table->string('adressdoctor');
            $table->integer('phonedoctor');
            $table->string('emaildoctor');
            $table->string('work');
            $table->integer('price');
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
        Schema::dropIfExists('contact_doctors');
    }
}
