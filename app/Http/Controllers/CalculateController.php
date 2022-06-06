<?php

namespace App\Http\Controllers;

use App\Models\Calculate;
use Illuminate\Http\Request;

class CalculateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calculators = Calculate::all();
        return view('Calculate.index',compact('calculators'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calculate  $calculate
     * @return \Illuminate\Http\Response
     */
    public function show(Calculate $calculate)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calculate  $calculate
     * @return \Illuminate\Http\Response
     */
    public function edit(Calculate $calculate)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calculate  $calculate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calculate $calculate)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calculate  $calculate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calculate $calculate)
    {

    }
}
