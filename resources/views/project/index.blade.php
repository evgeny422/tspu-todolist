@extends('layouts.app')


@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h2">Projects</h2>
    </div>

    <div>
        <a class="btn btn-sm btn-outline-primary" href="{{ route('project.create') }}">Добавить проект</a>
    </div>

    <div class="mt-3">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>
                        <a class="btn btn-sm btn-outline-primary"
                           href="{{ route('project.show', $project->id) }}">Tasks</a>

                        <a href="{{ route('label.index', ['project_id'=> $project->id]) }}"
                           class="btn btn-sm btn-outline-secondary">Labels</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
