<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlacesController extends Controller
{
    public function index(): string
    {
        $places = Place::query()
            ->select('latitude', 'longitude', 'temperature')
            ->get();

        $randString = Str::random(10);

        return response()->json([
            'places' => $places,
            'session_id' => $randString
        ]);
    }

    public function store(Request $request): void
    {
        $places = $request->input('places');
        $sessionId = $request->input('session_id');

        foreach ($places as $place) {
            Place::query()->create([
                "session_id" => $sessionId,
                "latitude" => $place["latitude"],
                "longitude" => $place["longitude"],
                "temperature" => $place["temperature"]
            ]);
        }
    }
}
