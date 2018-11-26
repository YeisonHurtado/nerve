<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Rol extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker::create();

        DB::table('rol')->insert([
            'ROLE_NAME'=>"player"
        ]);
    }
}
