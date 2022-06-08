@extends('layouts.app')


@section('content')
    <form action="{{ route('task.store', ['project_id' => $project_id]) }}" method="POST">
        {{ csrf_field() }}

        <input type="hidden" name="project_id" value="{{ $project_id }}">

        <div class="form-group row">
            <label for="name" class="col-sm-1-12 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>
        </div>
        <div class="form-group row mt-2">
            <div class="col-sm-3">
                <label for="date" class="col-sm-1-12 col-form-label">Date start</label>
                <input type="date" class="form-control" name="date_start" placeholder="Date start">
            </div>
            <div class="col-sm-3">
                <label for="date" class="col-sm-1-12 col-form-label">Date end</label>
                <input type="date" class="form-control" name="date_end" placeholder="Date end">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="detail">Detail</label>
            <div class="col-sm-6">
                <textarea name="description" id="detail" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group row mt-2">
            <label for="labels">Tags</label>

            <div class="col-sm-6">
                <select name="labels[]" id="labels" multiple class="form-control">
                    @foreach($project->labels as $label)
                        <option value="{{ $label->id }}">{{ $label->name }}</option>
                    @endforeach
                </select>
            </div>

        </div>

        <div class="form-group row mt-2">
            <label for="authors">Executor</label>
            <div class="col-sm-6">
                <select name="users[]" id="executor" multiple class="form-control">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group mt-5 row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>


@endsection()