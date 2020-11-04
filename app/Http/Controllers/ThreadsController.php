<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = Thread::all();
        return view('threads.index')->with('threads',$threads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show(thread $thread)
    {
        return view('threads.show')->with('thread',$thread);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\thread  $threads
     * @return \Illuminate\Http\Response
     */
    public function edit(thread $threads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\thread  $threads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, thread $threads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\thread  $threads
     * @return \Illuminate\Http\Response
     */
    public function destroy(thread $threads)
    {
        //
    }
}
