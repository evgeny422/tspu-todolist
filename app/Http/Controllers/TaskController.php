<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct()
    {
        // only for auth users
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();

        return view('task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = User::all();
        $project_id = $request->project_id;

        $project = Project::with('labels')->findOrFail($project_id);

        return view('task.create', compact('users', 'project_id', 'project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $task = Task::create($input);
        $task->executor()->attach($input['users']);
        $task->labels()->attach($input['labels']);

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::with('executor')->findOrFail($id);

        return view('task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $project_id
     * @param int $task_id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $project_id, int $task_id)
    {
        Task::findOrFail($task_id)->delete();
//
        return redirect()->route('dashboard');
    }

    public function done($project_id, $task_id)
    {
        $task = Task::findOrFail($task_id);

        $task->is_active = !$task->is_active;

        $task->save();

        return redirect()->back();
    }
}
