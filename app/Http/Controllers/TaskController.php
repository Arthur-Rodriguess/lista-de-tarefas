<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->get();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $title = $request->input('title', 'Tarefa sem título');

        $task = new Task();
        $task->title = $title;
        $task->save();

        return redirect('/tasks');
    }

    public function destroy(int $id)
    {
        Task::destroy($id);

        return redirect('/tasks');
    }
}
