<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TasksController;
use App\Models\Task;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function(){
    return view('home');
})->name('home');



Route::resource('tasks', TasksController::class);

Route::resource('projects', ProjectsController::class);
Route::get('projects/tasks/{projectId}', [TasksController::class,'index'])->name('projects.tasks');
// Route::post('tasks/store', [TasksController::class,'store'])->name('tasks.store');

// Route::get('/tasks/{task_id}', [TasksController::class, 'show'])->name('tasks.show');
// Route::get('add.task', [TasksController::class, 'create'])->name('tasks.add');
// Route::post('add.task', [TasksController::class, 'store'])->name('tasks.store');
// Route::get('edit/{id}', [TasksController::class, 'edit'])->name('tasks.edit');
// Route::get('delete/{id}', [TasksController::class, 'destroy'])->name('tasks.destroy');
// Route::patch('edit/{id}', [TasksController::class, 'update'])->name('tasks.update');
