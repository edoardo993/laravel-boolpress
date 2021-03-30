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

                </tr>

            @endforeach
        </tbody>
    </table>
@endsection
