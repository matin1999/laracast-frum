<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->only('store');

    }

    /**
     * @param Channel $channel
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Channel $channel)
    {
        if($channel->exists){

            $threads = $channel->threads->latest()->get();

        }else{
            $threads = Thread::latest()->get();
        }



        return view('threads.index')->with('threads', $threads);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'title' => 'required',
            'body' => 'required',
            'channel_id' => 'required|exists:channels,id',

        ]);
        $thread = Thread::create([
            'user_id' => auth()->id(),
            'channel_id' => request('channel_id'),
            'title' => request('title'),
            'body' => request('body'),
        ]);
        return redirect($thread->path());
    }

    /**
     * Display the specified resource.
     *
     * @param $channelId
     * @param \App\Models\thread $thread
     * @return \Illuminate\Http\Response
     */
    public function show($channelId,thread $thread)
    {
        return view('threads.show')->with('thread', $thread);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\thread $threads
     * @return \Illuminate\Http\Response
     */
    public function edit(thread $threads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\thread $threads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, thread $threads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\thread $threads
     * @return \Illuminate\Http\Response
     */
    public function destroy(thread $threads)
    {
        //
    }
}
