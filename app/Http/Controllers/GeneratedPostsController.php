<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storegenerated_postsRequest;
use App\Http\Requests\Updategenerated_postsRequest;
use App\Models\generated_posts;

class GeneratedPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storegenerated_postsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(generated_posts $generated_posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(generated_posts $generated_posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updategenerated_postsRequest $request, generated_posts $generated_posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(generated_posts $generated_posts)
    {
        //
    }
}
