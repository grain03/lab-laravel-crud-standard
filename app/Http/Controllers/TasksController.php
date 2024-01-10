<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Repositories\TasksRepository;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    protected $TaskRepository;
    public function __construct(TasksRepository $TaskRepository){
        $this->TaskRepository = $TaskRepository;
    }
    public function index(){
        $Tasks = $this->TaskRepository->index();
        return view('tasks.index' , compact('Tasks'));
    }

    public function show($task_id){
        $task = $this->TaskRepository->show($task_id);
        return view('tasks.show' , compact('task'));
    }
}
