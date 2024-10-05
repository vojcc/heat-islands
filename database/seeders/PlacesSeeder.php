<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $path = storage_path('json/data.json');
        $json = file_get_contents($path);

        $data = json_decode($json, true);

        foreach ($data["coordinates"] as $place) {
            Place::query()->create([
                "session_id" => "main",
                "latitude" => $place["latitude"],
                "longitude" => $place["longitude"],
                "temperature" => $place["temperature"],
            ]);
        }
    }
}
