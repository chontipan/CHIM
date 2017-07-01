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

        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname')->nullable();
            $table->string('identity')->nullable();
            $table->string('pic_path')->nullable();
            $table->text('time_at')->nullable();
            $table->integer('user_deleted')->nullable()->unsigned();
            $table->integer('user_created')->nullable()->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_deleted')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('set null');

            $table->foreign('user_created')->references('id')->on('users')
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
        Schema::drop('persons');
    }
}
