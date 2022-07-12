<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Flight;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Flight::all();

        return response()->json([
            'status' => true,
            'flights' => $flights
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Flight $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        return response()->json([
            'status' => true,
            'flight' => $flight
        ]);
    }
}
