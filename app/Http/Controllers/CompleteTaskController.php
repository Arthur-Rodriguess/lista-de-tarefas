<?php

namespace App\Http\Controllers;

use App\Models\Task;

class CompleteTaskController extends Controller
{
    public function __invoke(Task $task)
    {
        $task->update(['concluded' => !$task->concluded]);

        return redirect('/tasks');
    }
}
