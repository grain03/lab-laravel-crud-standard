@extends('layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Liste des Projets</h1>
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
                                    <input type="text" id="search-input" name="table_search" class="form-control float-right"
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
                                    @include('Projects.projectSearch')
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function fetchData(page, searchValue, projectId) {
            // Choose either requestUrl or requestUr2
            var requestUrl = "{{ url('projects') }}" + "/tasks/" + projectId + "?page=" + page + "&searchValue=" + searchValue;

            console.log("Request URL:", requestUrl);

            $.ajax({
                url: requestUrl, // Choose either requestUrl or requestUr2
                success: function(data) {
                    // console.log(1);
                    console.log(data);
                    $('tbody').html('');
                    $('tbody').html(data);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("AJAX Error:", textStatus, errorThrown);
                }
            });
        }

        $('body').on('click', '.pagination a', function(event) {
            event.preventDefault();

            var page = $(this).attr('href').split('page=')[1];
            var searchValue = $('#search-input').val();
            var projectId = $('#projectId').val();

            fetchData(page, searchValue, 1);
        });

        $('body').on('keyup', '#search-input', function() {
            
            var page = 1;
            var searchValue = $('#search-input').val();
            var projectId = $('#projectId').val();
            
            console.log(searchValue);
            fetchData(page, searchValue, 1);
        });
    });
</script>


