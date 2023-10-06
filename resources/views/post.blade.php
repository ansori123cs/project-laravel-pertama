@extends('layout/main')
@section('main')
    <div class="container p-3 mt-3">
        <div class="title">
            <h3 class="card-title">{{ $posts->title }}</h3>
          
            <a href="#{{ $posts->title }}" class="btn btn-danger mt-3 mb-3 ">Lokasi <i class="bi bi-geo-alt-fill"></i></a>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide mt-3 mb-3 border rounded-3 border-danger border-3 " style="max-width: 75rem">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../img/posts-img/{{ $posts->img }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/posts-img/{{ $posts->img }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../img/posts-img/{{ $posts->img }}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        <h5>{{ $posts->title }}</h5>
        <p class="mb-5 mt-5 "> <a href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a>{{ $posts->category->name }} Ditulis Oleh <a href="">{{ $posts->user->name}}</a></p>
        <p class="card-text">{!! $posts->body !!}</p>
        <a href="/posts" class="btn btn-danger"> < Kembali</a>
    </div>

  
@endsection
