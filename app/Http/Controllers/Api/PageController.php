<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class PageController extends Controller
{
    public function index(){
        $projects = Project::with('technologies')->paginate(5);
        return response()->json($projects);
    }

    public function getProjectBySlug($slug){
        // query che mi prende il progetto con lo slug corrispondente
        $project = Project::where('slug', $slug)->with('technologies')->first();
        return response()->json($project);
    }
}
