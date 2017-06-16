<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prefix')->nullable();
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('identity')->nullable();
            $table->json('details')->nullable();
            $table->string('pic_path')->nullable();
            $table->integer('type_id')->nullable()->unsigned();
            $table->integer('user_id')->nullable()->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('set null');

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
        Schema::drop('person_types');
        Schema::drop('persons');
    }
}
