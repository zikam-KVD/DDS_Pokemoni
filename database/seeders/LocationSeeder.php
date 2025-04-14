<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            "Kanto",
            "Johto",
            "Hoenn",
            "Sinnoh",
            "Unova",
            "Kalos",
            "Alola",
            "Galar",
            "Hisui",
            "Paldea",
        ];

        foreach($locations as $location) {
            DB::table("locations")->insert(["name"=>$location]);
        }
    }
}
