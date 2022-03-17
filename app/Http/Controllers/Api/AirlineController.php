<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AirlineRequest;
use App\Models\Airline;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        $airlines = Airline::all();
        return response()->json($airlines, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AirlineRequest $request
     * @return JsonResponse
     */
    public function store(AirlineRequest $request) : JsonResponse
    {
        $airline = new Airline($request->all());
        $airline->save();
        return response()->json($airline, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id) : JsonResponse
    {
        $airline = Airline::with('tickets')->find($id);
        return response()->json($airline, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AirlineRequest $request
     * @param Airline $airline
     * @return JsonResponse
     */
    public function update(AirlineRequest $request, Airline $airline) : JsonResponse
    {
        $airline->fill($request->all());
        if ($airline->isClean()){
            return response()->json('Nothing to updated', 301);
        }

        $airline = Airline::find($airline->id);
        $airline->update($request->all());
        return response()->json($airline, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Airline $airline
     * @return JsonResponse
     */
    public function destroy(Airline $airline) : JsonResponse
    {
        $airline->delete();
        return response()->json('Resource deleted!', 204);
    }
}
