@extends('base')
@section('title', 'Index Post')
@section('main-content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Author</th>
            <th scope="col">Tags</th>
            <th scope="col">Comment/s</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)

                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->author->name}} {{$post->author->lastname}}</td>
                    <td>

                        @foreach ($post->tags as $tag)
                            {{$tag->name}},
                        @endforeach
                    </td>
                    <td>
                        @foreach ($post->comments as $comment)
                            {{$comment->content}}<br><br>
                        @endforeach
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
@endsection
