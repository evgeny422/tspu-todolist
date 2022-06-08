@extends('layouts.app')

@section('content')

    <div>
        <a href="{{ route('task.create', ['project_id'=>$project->id]) }}" class="btn btn-sm btn-primary">Create</a>
    </div>

    @include('task.table', ['tasks' => $tasks])
@endsection