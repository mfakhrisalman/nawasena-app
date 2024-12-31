<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::get(); 

        return view('project.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $validatedData = $request->validate([
                'name' => 'required',
                'company' => 'required',
                'location' => 'required',
                'startdate' => 'required',
                'enddate' => 'required',
                'status' => 'required',
            ]);
        
            Project::create($validatedData);
        
            return redirect('/project')->with('success', 'Data Project Baru Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('project.edit',[
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'company' => 'required',
            'location' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'status' => 'required',
        ]);

        // Perbarui data pada database
        $project->update($validatedData);
    
        return redirect('/project')->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Project::destroy($project->id);
        return redirect('/project')->with('success', 'Data Project Berhasil Dihapus');
    }   
}
