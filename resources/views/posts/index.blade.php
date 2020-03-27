@extends('layouts.app')

@section('content')
    <div class="d-flex align-content-between align-items-center">
        <h1>Стена</h1>
    @if(Auth::check())
        <a href="{{route('posts.create')}}" class="btn btn-success ml-auto">
            Create post
        </a>
    @endif
    </div>

    @forelse($posts as $post)
        <a href="{{route('posts.show', $post)}}" class="mb-3 d-flex flex-row align-items-center card card-body">
            <h4 class="mb-0">{{$post->title}}</h4>
            <div class="text-muted ml-auto">
                Author: {{$post->user->name}}
            </div>
        </a>
    @empty
        <div class="alert alert-secondary">
            Постов пока нет...
        </div>
    @endforelse
@endsection
