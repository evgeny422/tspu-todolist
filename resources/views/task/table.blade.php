<table class="table table-striped table-sm">
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Project</th>
        <th>Date range</th>
        <th>Executors</th>
        <th>Tags</th>
        <th>Created at</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->name }}</td>
            <td>{{ $task->project->name }}</td>
            <td>{{ $task->date_start }} - {{ $task->date_end }}</td>
            <td>
                @foreach($task->executor as $executor)
                    <a href="{{ route('users.show', ['user'=> $executor->id]) }}" class="badge bg-success">
                        {{ $executor->name }}
                    </a>
                @endforeach
            </td>
            <td>
                @foreach($task->labels as $label)
                    {{ $label->name }},
                @endforeach
            </td>
            <td>{{ $task->created_at }}</td>
            <td>
                <a class="btn btn-sm btn-outline-primary"
                   href="{{ route('task.show', ['project_id'=> $task->project->id, 'task'=> $task->id]) }}">Show</a>

                <form method="post" action="{{ route('task.done', ['project_id'=> $task->project->id, 'task'=> $task->id])
}}" class="d-inline-block">
                    @csrf

                    <button class="btn btn-sm btn-outline-success" type="submit">Done</button>
                </form>


                <form action="{{ route('task.destroy', ['project_id'=> $task->project->id,'task'=> $task->id]) }}"
                      method="post" class="d-inline-block">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
{{--                    {{ method_field('delete') }}--}}
{{--                    @method("delete")--}}

                    <button class="btn btn-sm btn-outline-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>