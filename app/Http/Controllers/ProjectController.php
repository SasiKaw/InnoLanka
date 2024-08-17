<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $newProjectCount = Project::where('created_at', '>=', Carbon::now()->subDays(30))->count();

        return view('projects.index', ['projects'=>$projects, 'newProjectCount'=>$newProjectCount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('projects.create', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'category'=>'required'
        ]);

        Project::create($validateData);
        return redirect('projects')->with('flash-message','Project added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show')->with('projects',$project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        
        return view('projects.edit')->with('projects',$project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $input = $request->all();
        $project->update($input);
        return redirect('projects')->with('update_message','project Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('projects')->with('flash_message','project deleted');
    }
}
