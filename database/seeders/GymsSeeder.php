<?php

namespace Database\Seeders;

use App\Models\Gym;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GymsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gyms = [
            ["name" => "vodní gym"],
            ["name" => "ohnivý gym"],
            ["name" => "elektrický gym"],
            ["name" => "travnatý gym"],
        ];

        foreach($gyms as $gym)
        {
            $location = DB::table("locations")->select('id')->inRandomOrder()->first();
            Gym::create([
                "name" => $gym["name"],
                "location_id" => $location->id,
            ]);
        }
    }
}
