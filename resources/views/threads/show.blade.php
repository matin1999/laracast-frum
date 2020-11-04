@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="#">{{$thread->creator->name}}</a>
                        Posted
                        {{$thread->title}}</div>

                    <div class="card-body">
                       {{$thread->body}}
                    </div>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">

            <div class="col-md-8">
                @foreach($thread->replies as $reply)
                    @include('threads.reply')
                @endforeach
            </div>
        </div>

        @if(auth()->check())
            <div class="row justify-content-center">

            <div class="col-md-8">
                <form method="post" action="{{route('add.reply',$thread->id)}}">
                    @csrf
                    <div class="form-row">
                        <label for="body"></label>
                        <textarea name="body" id="body" cols="100" rows="5" placeholder="Have something to say ?"></textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </form>
            </div>
        </div>
            @else
            <P><a href="{{route('login')}}">please sign in for answer this question </a></P>
            @endif
    </div>
@endsection

