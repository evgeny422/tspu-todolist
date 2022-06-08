@extends('layouts.app')

@section('content')
    <div class="table-responsive">
            @include('task.table', ['tasks'=>$tasks])
    </div>
@endsection