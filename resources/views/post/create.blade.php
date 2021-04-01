@extends('base')
@section('title', 'Index Post')
@section('main-content')

    <form action="{{ route('posts.store') }}" method="post">

        @csrf
        @method('POST')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="author_id">Authors</label>
            <select class="form-control" name="author_id">

                @foreach ($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}} {{$author->lastname}}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" rows="9"></textarea>
        </div>

        <div class="form-group">

            <label for="tags[]">Tags</label>

            <select multiple class="custom-select" name="tags[]">

                @foreach ($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach

            </select>

        </div>

        <button type="submit" class="btn btn-primary">Create</button>

    </form>

@endsection
