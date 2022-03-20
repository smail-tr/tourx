<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialmediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socialmedia', function (Blueprint $table) {
            $table->id();
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('whatsapp');
            $table->string('snapchat');
            $table->string('pinterest');

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
        Schema::dropIfExists('socialmedia');
    }
}
