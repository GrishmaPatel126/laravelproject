<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuarriesValidation;
use App\Models\Quarry;
use Illuminate\Http\Request;

class QuarryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quarries = Quarry::all();
        return view('Quarry.index',compact('quarries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Quarry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuarriesValidation $request)
    {
        $input = $request->validated();
        Quarry::create($input);
        return redirect()->route('quarries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quarry  $quarry
     * @return \Illuminate\Http\Response
     */
    public function show(Quarry $quarry)
    {
        return view('Quarry.show',compact('quarry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quarry  $quarry
     * @return \Illuminate\Http\Response
     */
    public function edit(Quarry $quarry)
    {
        return view('Quarry.edit',compact('quarry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quarry  $quarry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quarry $quarry)
    {
        $input = $request->all();
        $quarry = Quarry::find($quarry->id);
        $quarry->fill($input)->save();
        return redirect()->route('quarries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quarry  $quarry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quarry $quarry)
    {
        $quarry->delete();
        return redirect()->route('quarries.index');
    }
}
