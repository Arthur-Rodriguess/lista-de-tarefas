<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::orderBy('created_at', 'desc')->get();

        $successMessage = $request->session()->get('success.message');

        return view('tasks.index', ['tasks' => $tasks, 'successMessage' => $successMessage]);
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

        $request->session()->flash('success.message', 'Tarefa adicionada com sucesso');

        return redirect('/tasks');
    }

    public function destroy(Request $request, int $id)
    {
        Task::destroy($id);

        $request->session()->flash('success.message', 'Tarefa removida com sucesso');

        return redirect('/tasks');
    }
}
