<?php

namespace App\Http\Controllers;

use App\Models\rima;
use App\Http\Requests\StorerimaRequest;
use App\Http\Requests\UpdaterimaRequest;
use Illuminate\Http\Request;

class RimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function single(rima $rima)
{
    return view('post', [
        'title' => $rima->title,
        'post' => $rima
    ]);
}
     public function index()
    {
        return view('posts',[
            'posts' => rima::all(),
            'title' => 'halaman posts'
        ]);
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
    public function store(StorerimaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(rima $rima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rima $rima)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdaterimaRequest $request, rima $rima)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rima $rima)
    {
        //
    }
}
