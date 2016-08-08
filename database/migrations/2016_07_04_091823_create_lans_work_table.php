<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLansWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');

            $table->string("name");
            $table->string("url");
            $table->string("cost");

            $table->boolean("busines");

            $table->integer("lansid");

            $table->integer("views");
            $table->integer("comits");

            $table->dateTime('aded');
            $table->dateTime('update');

            $table->text("description");


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
        Schema::drop('works');
    }
}
