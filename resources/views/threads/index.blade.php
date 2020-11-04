@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">forum threads</div>

                    <div class="card-body">
                        @foreach($threads as $thread)
                            <article>
                                <a href="{{$thread->id}}"> <h4>{{$thread->title}}</h4></a>
                                <div>{{$thread->body}}</div>
                            </article>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

