<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Resources\TagResource;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): TagResource
    {
        return new TagResource(Tag::orderBy('id', 'desc')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        return new TagResource(Tag::create(['name' => $request->name]));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return new TagResource(Tag::with(['tasks'])->where('id', $id)->get());
    }

}
