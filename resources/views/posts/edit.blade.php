@extends('layout.layout')


@section('content')
    <form style="width: 40%; margin:100px auto;" action="{{route('post_update',$post->id)}}" method="POST" >
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Post title </label>
            <input type="text" class="form-control" value="{{old('title',$post->title)}}" id="title" name="title" aria-describedby="emailHelp" placeholder="Post title">

        </div>
        <div class="form-group">
            <label for="author_name">Author_name</label>
            <input type="text" class="form-control" value="{{old('author_name',$post->author_name)}}" id="author_name" name="author_name" placeholder="Author name" >
        </div>
        <div class="form-group">
            <label for="post_text">Post text</label>
            <input type="text" class="form-control" value="{{old('post_text',$post->post_text)}}" id="post_text" name="post_text" placeholder="Post text">
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 20px">Submit</button>
    </form>



@endsection

