@extends('layouts.app')

@section('content')

    <div class="mb-3 btn-group btn-group-sm">
    @if(auth()->check() && auth()->user()->can('update', $post))
        <a class="btn btn-info" href="{{route('posts.edit', $post)}}">Edit</a>
    @endif

    @if(auth()->user()->can('delete', $post))
        <a class="btn btn-danger delete-link" href="{{route('posts.destroy', $post)}}" data-target="delete-form">Delete
            <form style="display: none" id="delete-form" action="{{route('posts.destroy', $post)}}" method="post">
                @csrf
                @method('delete')
            </form>
        </a>
    @endif
    </div>

    <p class="text-muted">
        Author: {{$post->user->name}}
    </p>
    <div class="card card-body">
        <h1>{{$post->title}}</h1>
        <p class="lead">{{$post->content}}</p>
    </div>

    @if(auth()->user()->can('delete', $post))
    <script>
        let link = document.querySelector('.delete-link');
        let id = link.dataset.target;

        link.addEventListener('click', function (event) {
            event.preventDefault();
            document.getElementById(id).submit();
        });
    </script>
    @endif
@endsection
