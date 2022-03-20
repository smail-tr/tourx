<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->bigIncrements('id');   
           
             $table->BigInteger('category_id')->unsigned();
             $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
           
            $table->BigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade')->onUpdate('cascade');
           
            $table->string('tour_name');
            $table->string('tour_description');
            $table->string('imageName');
            $table->string('start_place');
            $table->string('duration');
            $table->float(' <td>
							{{$row->duration}}
						</td>');


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
        Schema::dropIfExists('tours');
    }
}
