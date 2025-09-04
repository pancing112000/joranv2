<?php

namespace App\Http\Controllers;

use App\Models\Ranks;
use Illuminate\Http\Request;

class RanksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Ranks::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sequence' => 'required|string',
            'weight' => 'required|numeric',
            'time_caught' => 'required|date'
        ]);

        $rank = Ranks::create($validated);
        return response()->json($rank,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ranks $ranks)
    {
        $rank = Ranks::find($ranks);
        if(!$rank){
            return response()->json(['message'=> 'id not found'],404);
        }
        return response()->json($rank,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ranks $ranks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ranks $ranks)
    {
        $rank = Ranks::find($ranks);
        if(!$rank){
            return response()->json(['message' => 'record not found'],400);
        }
        
        $validated = $request->validate([
            'sequence' => 'required|string',
            'weight' => 'required|numeric',
            'time_caught' => 'required|date'
        ]);
        $rank->update($validated);
        return response()->json($rank,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ranks $ranks)
    {
        $rank = Ranks::find($ranks);
        if(!$rank){
            return response()->json(['message'=>'record not found'],400);
        }
        $rank->delete();
        return response()->json(['message'=>'record deleted'],200);
    }
}
