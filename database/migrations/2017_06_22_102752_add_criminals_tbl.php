<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCriminalsTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criminals', function (Blueprint $table) {
            $table->increments('id');
            $table->text('type_person')->nullable();
            $table->string('fullname');
            $table->string('pic_path')->nullable();
            $table->text('age')->nullable();
            $table->text('nickname1')->nullable();
            $table->text('nickname2')->nullable();
            $table->text('type_identity')->nullable();
            $table->string('identity')->nullable();
            $table->string('current_address')->nullable();
            $table->text('current_address_tel')->nullable();
            $table->string('origin_address')->nullable();
            $table->text('origin_address_tel')->nullable();


            $table->text('job')->nullable();
            $table->text('workplace_name')->nullable();
            $table->string('workplace_address')->nullable();
            $table->text('workplace_tel')->nullable();
            $table->text('education')->nullable();


            $table->string('father_name')->nullable();
            $table->text('father_age')->nullable();
            $table->text('father_status')->nullable();
            $table->string('father_address')->nullable();
            $table->text('father_address_tel')->nullable();
            $table->text('father_job')->nullable();
            $table->string('father_workplace')->nullable();
            $table->text('father_workplace_tel')->nullable();
            $table->string('mother_name')->nullable();
            $table->text('mother_age')->nullable();
            $table->text('mother_status')->nullable();
            $table->string('mother_address')->nullable();
            $table->text('mother_address_tel')->nullable();
            $table->string('mother_job')->nullable();
            $table->string('mother_workplace')->nullable();
            $table->text('mother_workplace_tel')->nullable();
            $table->string('spouse_name')->nullable();
            $table->text('spouse_age')->nullable();
            $table->string('spouse_status')->nullable();
            $table->string('spouse_address')->nullable();
            $table->text('spouse_address_tel')->nullable();
            $table->string('spouse_job')->nullable();
            $table->string('spouse_workplace')->nullable();
            $table->text('spouse_workplace_tel')->nullable();
            $table->string('child_name')->nullable();
            $table->text('child_age')->nullable();
            $table->string('child_job')->nullable();
            $table->string('child_address')->nullable();
            $table->text('child_address_tel')->nullable();
            $table->string('child_workplace')->nullable();
            $table->string('child_workplace_tel')->nullable();

            $table->text('child_tel')->nullable();
            $table->text('child_status')->nullable();


            $table->text('height')->nullable();
            $table->text('shape')->nullable();
            $table->text('teeth')->nullable();
            $table->text('skin')->nullable();
            $table->text('hair')->nullable();
            $table->text('head')->nullable();
            $table->text('face')->nullable();
            $table->text('eyebrow')->nullable();
            $table->text('eye')->nullable();
            $table->text('ear')->nullable();
            $table->text('nose')->nullable();
            $table->text('mouse')->nullable();
            $table->text('chin')->nullable();
            $table->text('beard')->nullable();
            $table->text('scar')->nullable();
            $table->text('pronunciation')->nullable();
            $table->text('noteable')->nullable();
            $table->text('behavior')->nullable();
            $table->text('favor_place')->nullable();
            $table->string('previous_crime')->nullable();
            $table->text('weapon')->nullable();
            $table->text('vehicle')->nullable();
            $table->text('crime_related')->nullable();
            $table->string('crime_desc')->nullable();
            $table->string('others')->nullable();


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
        Schema::drop('criminals');
    }
}
