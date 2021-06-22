@extends('layout.layout')

@section('content')

    <div class="card" style="width: 18rem; margin: 100px auto" >
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$post->author_name}}</h6>
            <p class="card-text">{{$post->post_text}}</p>
        </div>
    </div>

@endsection

