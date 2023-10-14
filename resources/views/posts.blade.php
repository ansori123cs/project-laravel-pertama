@extends('layout/main')
@section('main')
<div class="p-5 mb-4 bg-light rounded-3">
  <h2 class="mb-5 ">{{ $title }}</h2>
  <!-- https://source.unsplash.com/1200x400/{{$posts[0]->category->name}} -->
  @if($posts->count())
  <div class="card mb-3">
    <img src="https://source.unsplash.com/1200x200/?{{$posts[0]->category->name}}" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <a href="/posts/{{ $posts[0]->id }}" class="text-decoration-none text-dark">
        <h3 class="card-title">{{$posts[0]->title}}</h3>
      </a>
      <small class="text-muted">
        <p class="mb-2 mt-2 ">Category: <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->category->name }} </a> Ditulis Oleh <a href="/authors/{{$posts[0]->user->id}}" class="text-decoration-none text-dark">{{$posts[0]->user->name}}</a> {{$posts[0]->created_at->diffForHumans()}}</p>
      </small>
      <p class="card-text">{{$posts[0]->exerpt}}</p>
      <a href="/posts/{{ $posts[0]->id }}" class="btn btn-danger">Lihat Selengkapnya...</a>
    </div>
  </div>
  @else
  <p class="fs-4">Post Not Found!!!</p>
  @endif
  <div class="container">
    <div class="row">
      @foreach ($posts->skip(1) as $post)
      <div class="col-md-4">
        <div class="card">
          <div class="position-absolute bg-dark ps-3 pe-3 m-2 rounded-pill"><a href="/categories/{{ $post->category->slug }}" class="text-light text-decoration-none">{{$post->category->name}}</a></div>
          <img src="https://source.unsplash.com/500x500/?{{$post->category->name}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $post->title }} </h5>
            <p class="card-text">{!! $post->exerpt !!}</p>
            <a href="/posts/{{ $post->id }}" class="btn btn-danger">Lihat Selengkapnya...</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection