<?php

namespace App\Http\Controllers\Api\Mine;

use App\Models\task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
//use Illuminate\Console\View\Components\Task;

class CompletetaskController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, task $task)
    {
        $task->completed = $request->completed;
        $task->save();
        return TaskResource::make($task);
    }
}
