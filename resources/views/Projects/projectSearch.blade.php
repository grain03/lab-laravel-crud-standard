@foreach ($Projects as $project)
    <tr>
        <td>{{ $project->nom }}</td>
        <td>
            {{ $project->description }}
        </td>
        <td class="text-center">
            <a href="{{ route('projects.tasks',['projectId'=> $project->id] ) }}" class='btn btn-default btn-sm'>
                <i class="far fa-eye"></i>
            </a>
        </td>
    </tr>
@endforeach
<tr>
    <td></td>
    <td></td>
    <td>
        <div class="pagination m-0 float-right">
            {{ $Projects->links() }}
        </div>
    </td>
</tr>
