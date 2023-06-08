<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Resources\TaskResource;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new TaskResource(Task::orderBy('id', 'desc')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
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
    public function show($id)
    {
        return new TaskResource(Task::with(['tags'])->where('id', $id)->get());
    }

}
