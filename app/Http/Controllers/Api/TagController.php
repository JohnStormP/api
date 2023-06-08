<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Request;

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
    public function store(Request $request): TagResource
    {
        $request->validate([
            'name' => 'required',
        ]);
        return new TagResource(Tag::create(['name' => $request->name]));
    }

    /**
     * Display the specified resource.
     */
    public function show($id): TagResource
    {
        return new TagResource(Tag::with(['tasks'])->where('id', $id)->get());
    }

}
