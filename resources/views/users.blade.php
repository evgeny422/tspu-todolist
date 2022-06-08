@extends('layouts.app')


@section('content')


    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Created at</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <span class="badge bg-success">admin</span>
                    </td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <a class="btn btn-sm btn-outline-primary" href="../user">Show</a>
                        <button class="btn btn-sm btn-outline-info" type="button">Edit</button>
                        <button class="btn btn-sm btn-outline-danger" type="button">Delete</button>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
@endsection