@extends('../Layouts.Layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="card-title">Détails de {{ $task->nom }}</h1>
                </div>
                <div class="col-sm-6">

                    <a class="btn btn-default float-right " href="{{ route('tasks.index') }}">Retour</a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <label for="nom">Nom:</label>
                        <p>{{ $task->nom }}</p>
                    </div>

                    <div class="col-sm-12">
                        <label for="nom">Nom du projet:</label>
                        <p> {{ $task->project->nom }}</p>
                    </div>


                    <div class="col-sm-12">
                        <label for="description">Description:</label>
                        <p>{{ $task->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
