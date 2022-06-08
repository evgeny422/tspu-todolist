@extends('layouts.app')


@section('content')


    <form action="{{ route('project.store') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="name" class="col-sm-1-12 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>
        </div>

        <div class="form-group mt-5 row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection