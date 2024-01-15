<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProjectsRepository;

class ProjectsController extends Controller
{
    protected $projectRepository;
    public function __construct(ProjectsRepository $projectsRepository){
        $this->projectRepository = $projectsRepository; 
    }
    public function index(Request $request){

        if ($request->ajax()) {
            $searchQuery = $request->get('searchValue');
            $searchQuery = str_replace(' ', '%', $searchQuery);
            $Projects = $this->projectRepository->searchProjects($searchQuery);
            // return response()->json($Projects);
            // dd($Projects);
            return view('Projects.projectSearch', compact('Projects'));
        }

        $Projects = $this->projectRepository->index();
        return view('Projects.index' , compact('Projects'));
    }


}
