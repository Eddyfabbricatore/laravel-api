<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class PageController extends Controller
{
    public function index(){
        $projects = Project::all();
        return response()->json($projects);
    }

    public function prova(){
        $user = [
            'name' => 'Ugo',
            'lastname' => 'De Ughi'
        ];
    
        $success = true;
    
        // non restituisco una view ma un file json
        return response()->json(compact('user', 'success'));
    }
}
