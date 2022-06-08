<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function __construct()
    {
        // only for auth users
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $tasks = Task::all();

        return view('dashboard', compact('tasks'));
    }
}
