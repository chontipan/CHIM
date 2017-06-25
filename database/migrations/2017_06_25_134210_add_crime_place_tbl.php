<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCrimePlaceTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crime_places', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->string('address')->nullable();
            $table->text('province')->nullable();
            $table->text('district')->nullable();
            $table->text('tel')->nullable();
            $table->text('lat')->nullable();
            $table->text('lng')->nullable();
            $table->text('owner_name')->nullable();
            $table->text('owner_age')->nullable();
            $table->text('owner_identity')->nullable();
            $table->string('owner_address_identity')->nullable();

            $table->text('manager_name')->nullable();
            $table->text('manager_age')->nullable();
            $table->text('manager_identity')->nullable();
            $table->string('manager_address_identity')->nullable();
            $table->text('manager_address_tel')->nullable();
            $table->string('manager_current_address')->nullable();
            $table->text('manager_current_address_tel')->nullable();
            $table->text('place_desc')->nullable();
            $table->text('place_event')->nullable();
            $table->text('place_note')->nullable();
            $table->text('place_crime_desc')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->integer('user_deleted')->nullable()->unsigned();
            $table->integer('user_created')->nullable()->unsigned();

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
        Schema::drop('crime_places');
    }
}
