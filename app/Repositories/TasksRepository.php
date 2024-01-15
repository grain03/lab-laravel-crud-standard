<?php

 namespace App\Repositories;

 use App\Models\Task;
 use App\Repositories\BaseRepository;

 class TasksRepository extends BaseRepository {
    public function __construct(Task $task){
        $this->model = $task; 
    }
    protected $fieldTask = [
        'nom',
        'description'
    ];
    public function getFieldData():array{
        return $this->fieldTask;
    }
    public function model():string{
        return Task::class;
    }

    public function store($request){
        $this->model->create($request);
    }

    public function GetTasksByProjectId($projectId) {
        return $this->model->where('projetId', $projectId)->paginate(3);
    }

    public function searchTasks($searchTask)
    {
        return $this->model->where(function ($query) use ($searchTask) {
            $query->where('nom', 'like', '%' . $searchTask . '%')
                ->orWhere('description', 'like', '%' . $searchTask . '%');
        })->paginate(4);
    }

 }