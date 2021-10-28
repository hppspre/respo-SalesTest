<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewSalespeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_salespeople', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('Email_address');
            $table->string('Teliphone');
            $table->date('joind_date');
            $table->string('current_route');
            $table->text('Comments');
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
        Schema::dropIfExists('new_salespeople');
    }
}
