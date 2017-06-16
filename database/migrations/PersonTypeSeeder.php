<?php

use Illuminate\Database\Seeder;

class PersonTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new \App\PersonType();
        $type->name = "ทั่วไป";
        $type->save();

        $type = new \App\PersonType();
        $type->name = "ที่เกี่ยวข้องกับอาชญากรรม";
        $type->save();
    }
}