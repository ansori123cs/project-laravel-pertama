@extends('layout/main')
@section('main')
<div class="p-5 mb-4 bg-light rounded-3">
  <h2 class="mb-5 text-center">{{ $title }}</h2>
  <div class="row mb-3 justify-content-center">
    <div class="col-md-6 ">
      <form action="/posts" method="get">
        @if(request('category'))
        <input type="hidden" name="category" value="{{request('category')}}">
        @elseif(request('user'))
        <input type="hidden" name="users" value="{{request('user')}}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari Postingan..." name="search" value="{{request('search')}}">
          <div class="input-group-append">
            <button class="btn btn-danger text-light ms-3" type="submit">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  @if($posts->count())
  <div class="card mb-3">
    <img src="https://source.unsplash.com/1200x200/?{{$posts[0]->category->name}}" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <a href="/posts/{{ $posts[0]->id }}" class="text-decoration-none text-dark">
        <h3 class="card-title">{{$posts[0]->title}}</h3>
      </a>
      <small class="text-muted">
        <p class="mb-2 mt-2 ">Category: <a href="/posts?category={{$posts[0]->category->slug }} " class="text-decoration-none text-dark">{{ $posts[0]->category->name }} </a> Ditulis Oleh <a href="/posts?user={{ $posts[0]->user->name}}" class="text-decoration-none text-dark">{{$posts[0]->user->name}}</a> {{$posts[0]->created_at->diffForHumans()}}</p>
      </small>
      <p class="card-text">{{$posts[0]->exerpt}}</p>
      <a href="/posts/{{ $posts[0]->id }}" class="btn btn-danger">Lihat Selengkapnya...</a>
    </div>
  </div>
  <div class="container">
    <div class="row">
      @foreach ($posts->skip(1) as $post)
      <div class="col-md-4">
        <div class="card">
          <div class="position-absolute bg-dark ps-3 pe-3 m-2 rounded-pill"><a href="/posts?category={{ $post->category->slug }}" class="text-light text-decoration-none">{{$post->category->name}}</a></div>
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
@else
<p class="fs-4 text-center">Post Not Found!!!</p>
@endif
@endsection