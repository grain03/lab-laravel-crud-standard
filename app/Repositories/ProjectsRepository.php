<?php

 namespace App\Repositories;

 use App\Models\Project;
 use App\Repositories\BaseRepository;

 class ProjectsRepository extends BaseRepository {
    public function __construct(Project $project){
        $this->model = $project;
    }
    protected $fieldProject = [
        'nom',
        'description'
    ];
    public function getFieldData():array{
        return $this->fieldProject;
    }
    public function model():string{
        return Project::class;
    }

    public function searchProjects($searchTask)
    {
        return Project::where(function ($query) use ($searchTask) {
            $query->where('nom', 'like', '%' . $searchTask . '%')
                ->orWhere('description', 'like', '%' . $searchTask . '%');
        })->paginate(4);
    }
 }