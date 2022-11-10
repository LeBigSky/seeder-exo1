<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personnes')->insert([
            [
                "nom" => "Gary",
                "age" =>  39,
                "email" =>  "Yves@molengeek.com",
                "telephone" => 485353399,
            ],
            [
                "nom" => "Yves",
                "age" =>  25,
                "email" =>  "Yves@molengeek.com",
                "telephone" => 485556633,
            ],
            [
                "nom" => "Cyril",
                "age" =>  36,
                "email" =>  "Yves@molengeek.com",
                "telephone" => 485221155,
            ],
            [
                "nom" => "Julien",
                "age" =>  22,
                "email" =>  "Yves@molengeek.com",
                "telephone" => 485356987,
            ],


        ]);
    }
}
