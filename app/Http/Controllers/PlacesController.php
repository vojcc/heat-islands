<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Inertia\Response;

class PlacesController extends Controller
{
    public function index(): Response
    {
        $places = Place::query()
            ->select('latitude', 'longitude', 'temperature')
            ->where("session_id", "main")
            ->get();

        return inertia("Home", [
            "places" => $places
        ]);
    }

    public function indexBySession(string $sessionId): Response
    {
        $places = Place::query()
            ->where('session_id', $sessionId)
            ->select('latitude', 'longitude', 'temperature')
            ->get();

        return inertia("Home", [
            "places" => $places
        ]);
    }
}
