@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Task: <strong>{{ $task->name }}</strong></h1>
    </div>
    <div class="main-content">
        <div class="col-8">
            <div>
                <p>
                    <strong>Range Date</strong>: <span
                            class="badge bg-danger">{{ $task->date_start }} - {{ $task->date_end }}</span>
                </p>
            </div>
            <div>
                <p>
                    <strong>Executors</strong>:
                    @foreach($task->executor as $executor)
                        <a href="{{ route('users.show', ['user'=> $executor->id]) }}" class="badge bg-success">
                            {{ $executor->name }}
                        </a>
                    @endforeach
                </p>
            </div>
            <div>
                <p><strong>Description</strong>:</p>
                <p>
                   {{ $task->description }}
                </p>
            </div>
        </div>
    </div>
@endsection