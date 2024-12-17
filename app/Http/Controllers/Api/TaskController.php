<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): TaskResource
    {
        return new TaskResource(Task::orderBy('id', 'desc')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): TaskResource
    {
        $request->validate([
            'name' => ['required','string','max:255'],
            'description' => 'required'
        ]);
        $task = Task::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        if ($request->has('tags')) {
            $task->tags()->attach($request->tags);
        }
        return new TaskResource($task);
    }

    /**
     * Display the specified resource.
     */
    public function show($id): TaskResource
    {
        return new TaskResource(Task::with(['tags'])->where('id', $id)->get());
    }

}
