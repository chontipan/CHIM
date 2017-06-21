<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsPerson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('persons', function (Blueprint $table) {
            $table->text('type_identity')->nullable();
            $table->text('age')->nullable();
            $table->text('job')->nullable();
            $table->string('workplace1')->nullable();
            $table->text('workplace1_tel')->nullable();
            $table->string('workplace2')->nullable();
            $table->text('workplace2_tel')->nullable();
            $table->string('current_address')->nullable();
            $table->text('current_address_tel')->nullable();
            $table->string('origin_address')->nullable();
            $table->text('origin_address_tel')->nullable();
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
            $table->string('child1_name')->nullable();
            $table->text('child1_age')->nullable();
            $table->string('child1_job')->nullable();
            $table->string('child1_workplace')->nullable();
            $table->text('child1_tel')->nullable();
            $table->string('child2_name')->nullable();
            $table->text('child2_age')->nullable();
            $table->string('child2_job')->nullable();
            $table->string('child2_workplace')->nullable();
            $table->text('child2_tel')->nullable();
            $table->string('child3_name')->nullable();
            $table->text('child3_age')->nullable();
            $table->string('child3_job')->nullable();
            $table->string('child3_workplace')->nullable();
            $table->text('child3_tel')->nullable();
            $table->string('vehicle1')->nullable();
            $table->string('vehicle2')->nullable();
            $table->string('family_member1_name')->nullable();
            $table->text('family_member1_age')->nullable();
            $table->string('family_member1_identity')->nullable();
            $table->string('family_member1_job')->nullable();
            $table->string('family_member1_workplace')->nullable();
            $table->text('family_member1_workplace_tel')->nullable();
            $table->string('family_member1_address')->nullable();
            $table->string('family_member2_name')->nullable();
            $table->text('family_member2_age')->nullable();
            $table->string('family_member2_identity')->nullable();
            $table->string('family_member2_job')->nullable();
            $table->string('family_member2_workplace')->nullable();
            $table->text('family_member2_workplace_tel')->nullable();
            $table->string('family_member2_address')->nullable();
            $table->string('family_member3_name')->nullable();
            $table->text('family_member3_age')->nullable();
            $table->string('family_member3_identity')->nullable();
            $table->string('family_member3_job')->nullable();
            $table->string('family_member3_workplace')->nullable();
            $table->text('family_member3_workplace_tel')->nullable();
            $table->string('family_member3_address')->nullable();
            $table->string('employee1_name')->nullable();
            $table->text('employee1_age')->nullable();
            $table->text('employee1_identity')->nullable();
            $table->string('employee1_address')->nullable();
            $table->string('employee2_name')->nullable();
            $table->text('employee2_age')->nullable();
            $table->text('employee2_identity')->nullable();
            $table->string('employee2_address')->nullable();
            $table->string('others')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
