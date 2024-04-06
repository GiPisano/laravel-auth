<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'DESC')->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $project = new project;
       return view('admin.projects.form', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $data= $request->all();
        $project = new project;

        $project->fill($data);

        $project->save();

        return redirect()->route('admin.projects.show', $project);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project  $project
     */
    public function show(project $project)
    {
       return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project  $project
     */
    public function edit(project $project)
    {
        return view('admin.projects.form' , compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project  $project
     */
    public function update(Request $request, project $project)
    {
        $data= $request->all();
        $project->update($data);

        return redirect()->route('admin.projects.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project  $project
     */
    public function destroy(project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index', $project);
    }
}
