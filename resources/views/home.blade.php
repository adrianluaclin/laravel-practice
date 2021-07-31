@extends('layout')

@section('content')

<!-- Page Content -->
<div class="container">
    
    <h1 class="my-4">POSTS</h1>

    @foreach($posts as $post)
    <!-- Blog Post -->
    <div class="card mb-4">
        <img class="card-img-top" src="{{$post->image}}" alt="Card image cap">
        <div class="card-body">
        <h2 class="card-title">{{$post->title}}</h2>
        <p class="card-text">{{$post->body}}</p>
        <a href="/post/{{$post->id}}" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
        Posted on {{$post->created_at}} by {{$post->user()->get()[0]["name"]}}
        </div>
    </div>
    @endforeach
    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
        <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
        <a class="page-link" href="#">Newer &rarr;</a>
        </li>
    </ul>
</div>


@endsection