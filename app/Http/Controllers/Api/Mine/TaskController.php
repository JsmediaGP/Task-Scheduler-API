<?php

namespace App\Http\Controllers\Api\Mine;

use App\Models\task;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Http\Requests\StoretaskRequest;
use App\Http\Requests\UpdatetaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TaskResource::collection(task::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretaskRequest $request)
    {
        $task = task::create($request->validated());
        return TaskResource::make($task);
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        return TaskResource::make($task);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetaskRequest $request, task $task)
    {
        $task->update($request->validated());
        return TaskResource::make($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        $task->delete();
        return response('Task Deleted');
    }
}
