<?php

namespace App\Http\Controllers;

use App\Models\NextGameDraw;
use Illuminate\Http\Request;

class NextGameDrawController extends Controller
{
    function getIncreasedValue(){
        $nextDrawId = NextGameDraw::select('next_draw_id')->first();
        return $nextDrawId;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NextGameDraw  $nextGameDraw
     * @return \Illuminate\Http\Response
     */
    public function show(NextGameDraw $nextGameDraw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NextGameDraw  $nextGameDraw
     * @return \Illuminate\Http\Response
     */
    public function edit(NextGameDraw $nextGameDraw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NextGameDraw  $nextGameDraw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NextGameDraw $nextGameDraw)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NextGameDraw  $nextGameDraw
     * @return \Illuminate\Http\Response
     */
    public function destroy(NextGameDraw $nextGameDraw)
    {
        //
    }
}
