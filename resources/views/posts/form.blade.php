<?php
$update = isset($post);
?>

@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <form action="{{$update ? route('posts.update', $post) : route('posts.store')}}" method="post" class="card card-body">
        @csrf

        @if($update)
        @method('put')
        @endif

        <div class="form-group">
            <label for="title">Title <span class="text-danger">*</span></label>
            <input type="text" name="title" id="title"
                   value="{{old('title') ?? ($post->title ?? '')}}"
                   class="form-control @error('title') is-invalid @enderror"
                   placeholder="Enter title">
            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Post <span class="text-danger">*</span></label>
            <textarea name="content"
                      id="content"
                      cols="30" rows="10"
                      class="form-control @error('content') is-invalid @enderror"
                      placeholder="Write something interesting...">{{old('content') ?? ($post->content ?? '')}}</textarea>
            @error('content')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div>
            <button class="btn btn-success">Save</button>
        </div>
    </form>
@endsection
