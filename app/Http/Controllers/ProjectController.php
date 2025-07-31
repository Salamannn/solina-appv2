<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Menampilkan daftar proyek
    public function index()
    {
        
        $projects = Project::orderBy('project_date', 'desc')->get();

        return view('guest.projects', [
            'projects' => $projects,
            
        ]);
    }

    // Menampilkan detail proyek
    public function show($id)
    {
        $locale = app()->getLocale();
        $project = Project::findOrFail($id);

        return view('guest.project-details', [
            'project' => $project,
            'description' => $locale === 'id' ? $project->description_id : $project->description_en
        ]);
    }
}
