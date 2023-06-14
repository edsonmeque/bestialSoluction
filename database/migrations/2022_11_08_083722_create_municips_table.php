<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municips', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tags');
            $table->string('email');
            $table->string('phone');
            $table->string('address');


            $table->unsignedInteger('district_id');
            $table->foreign('district_id')->references('id')->on('districts');

            $table->unsignedInteger('user_id')->default(0);
            $table->foreign('user_id')->references('id')->on('users');


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
        Schema::dropIfExists('municips');
    }
};
