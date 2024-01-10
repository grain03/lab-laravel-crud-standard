@extends('layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Liste des tâches</h1>
                </div>
                <div class="col-sm-6">
                    <div class="float-sm-right">
                        <a class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nouveau Tache
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header col-md-12">
                            <div class=" p-0">
                                <div class="input-group input-group-sm float-sm-right col-md-3 p-0">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Recherche">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Description</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Tasks as $task)
                                        <tr>
                                            <td>{{ $task->name }}</td>
                                            <td>
                                                {{ $task->description }}
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('tasks.show', $task->id) }}"
                                                    class='btn btn-default btn-sm'>
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="./edit.php" class="btn btn-sm btn-default"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <button type="button" class="btn btn-sm btn-danger"><i
                                                        class="fa-solid fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $Tasks->links() }}
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
