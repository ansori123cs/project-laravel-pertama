@extends('layout/main')
@section('main')
<div class="p-5 mb-4 bg-light rounded-3">
<h2 class="mb-5 ">{{ $title }}</h2>
  <div class="row align-items-start">
    @foreach ($posts as $post)
    <div class="card mb-3" style="max-width: 85rem;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="../img/posts-img/{{ $post["img"] }}" class="img-fluid rounded-start m-3 border border-danger border-3 rounded-pill" alt="{{ $post["title"] }}">
        </div>
        <div class="col-md-8 p-3">
          <div class="card-body">
          <h3 class="card-title"><a href="/posts/{{ $post->id }}" class="text-decoration-none text-dark">{{ $post->title }} </a></h3>
            <p class="mb-2 mt-2 ">Category: <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-dark">{{ $post->category->name }} </a> Ditulis Oleh <a href="/authors/{{$post->user->id}}" class="text-decoration-none text-dark">{{$post->user->name}}</a></p>
              <p class="card-text">{!! $post->exerpt !!}</p>
              <a href="/posts/{{ $post->id }}" class="btn btn-danger">Lihat Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection
