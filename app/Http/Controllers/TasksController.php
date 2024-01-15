<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateFormRequest;
use App\Models\Task;
use App\Repositories\ProjectsRepository;
use App\Repositories\TasksRepository;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    protected $TaskRepository;
    protected $ProjectsRepository;

    public function __construct(TasksRepository $TaskRepository, ProjectsRepository $ProjectsRepository)
    {
        $this->TaskRepository = $TaskRepository;
        $this->ProjectsRepository = $ProjectsRepository;
    }
    public function index(Request $request)
    {

        $projectId = $request->projectId;

        if ($request->ajax()) {
            $searchQuery = $request->get('searchValue');
            $searchQuery = str_replace(' ', '%', $searchQuery);
            $Tasks = $this->TaskRepository->searchTasks($searchQuery);
            
            
            return view('Tasks.Search', compact('Tasks'))->render();
        }

        if ($projectId) {
            $Tasks = $this->TaskRepository->GetTasksByProjectId($projectId);
            $project = $this->ProjectsRepository->find($projectId);
            return view('tasks.index', compact('Tasks', 'project'));
        } else {
            $Tasks = $this->TaskRepository->index();
        }
        return view('tasks.index', compact('Tasks'));
    }


    public function create()
    {
        $Projects = $this->ProjectsRepository->index();
        return view('tasks.create', compact('Projects'));
    }
    public function store(StoreTaskRequest $StoreTaskRequest)
    {
        $validatedData = $StoreTaskRequest->validated();

        $this->TaskRepository->store($validatedData);
        return redirect()->route('tasks.index')->with('success', 'Tâche créée avec succès.');
    }

    public function edit(Task $Task)
    {
        $Projects = $this->ProjectsRepository->index();
        return view('tasks.edit', compact('Task', 'Projects'));
    }
    public function update(UpdateFormRequest $request, string $id)
    {
        $validatedData = $request->validated();

        $this->TaskRepository->update($validatedData, $id);
        return redirect()->route('projects.tasks', ['projectId' => $request->projetId])->with('success', "tâche mise à jour avec succès.");
    }
    public function destroy(string $id)
    {
        $this->TaskRepository->delete($id);
        return redirect()->back()->with('success', "tâche supprimée avec succès");
    }

    public function show($task_id)
    {
        $task = $this->TaskRepository->show($task_id);
        return view('tasks.show', compact('task'));
    }
}
