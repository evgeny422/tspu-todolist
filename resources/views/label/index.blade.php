@extends('layouts.app')


@section('content')

    <div>
        <a href="{{ route('label.create', ['project_id'=> $project->id]) }}" class="btn btn-primary">Create</a>
    </div>


    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($project->labels as $label)
            <tr>
                <td>{{ $label->id }}</td>
                <td>{{ $label->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection