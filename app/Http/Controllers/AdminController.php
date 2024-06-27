<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function dashboard()
    {
        $projects = Project::all();
        return view('admin.dashboard', compact('projects'));
    }

   
    public function createProject()
    {
        return view('admin.create_project');
    }


    public function storeProject(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $project = new Project($validatedData);
        $project->user_id = Auth::id();
        $project->save();

        return redirect()->route('admin.dashboard')->with('success', 'Project created successfully.');
    }


    public function editProject(Project $project)
    {
        return view('admin.edit_project', compact('project'));
    }


    public function updateProject(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $project->update($validatedData);

        return redirect()->route('admin.dashboard')->with('success', 'Project updated successfully.');
    }


    public function destroyProject(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Project deleted successfully.');
    }
}
