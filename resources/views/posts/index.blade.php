@extends('layout.layout')

@section('content')

    <h1 style="text-align: center">All Posts</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author_name</th>
            <th scope="col">Text</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->author_name}}</td>
                <td>{{$post->post_text}}</td>
                <td>

                    <form method="post" action="{{route('post_delete',$post->id)}}">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>

                </td>

                <td><button><a href="posts/{{$post->id}}/edit">Edit</a> </button></td>
            </tr>
        @endforeach

        </tbody>
    </table>

    {{$posts->links()}}


@endsection
