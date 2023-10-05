@extends('layout/main')
@section('main')
<div class="p-5 mb-4 bg-light rounded-3">
<h2 class="mb-5 "> {{ $category }}</h2>
  <div class="row align-items-start">
    @foreach ($posts as $posts)
    <div class="card mb-3" style="max-width: 85rem;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="img/posts-img/{{ $posts["img"] }}.jpg" class="img-fluid rounded-start m-3 border border-danger border-3 rounded-pill" alt="{{ $posts["title"] }}">
        </div>
        <div class="col-md-8 p-3">
          <div class="card-body">
            <h3 class="card-title">{{ $posts->title }} </h3>
              <p class="card-text">{{ $posts->exerpt }}</p>
              <a href="/posts/{{ $posts->id }}" class="btn btn-danger">Lihat Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection
