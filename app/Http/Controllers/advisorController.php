<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class advisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('advisor.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lecturers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        lecturer::create($input);
        return redirect('lecturers')->with('flash_message','lecturers added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function show(lecturer $lecturer)
    {
        return view('lecturers.show')->with('lecturers',$lecturer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function edit(lecturer $lecturer)
    {
        return view('lecturers.edit')->with('lecturers',$lecturer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lecturer $lecturer)
    {
        $input = $request->all();
        $lecturer->update($input);
        return redirect('lecturers')->with('flash_message','lecturer Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(lecturer $lecturer)
    {
        $lecturer->delete();
        return redirect('lecturers')->with('flash_message','lecturer deleted');
    }
}
