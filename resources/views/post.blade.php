@extends('layout/main')
@section('main')
<div class="container mt-3">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="title">
        <h3 class="card-title">{{ $posts->title }}</h3>
        <p class="mb-5 mt-3"> <a href="/posts?category={{ $posts->category->slug }}" class="text-decoration-none text-dark">{{ $posts->category->name }}</a> Ditulis Oleh <a href="/posts?user={{ $posts->user->name }}" class="text-decoration-none text-dark">{{ $posts->user->name}}</a></p>
        <img src="https://source.unsplash.com/1200x400/?{{$posts->name}}" class="d-block w-100" alt="...">
      </div>
      <p class="mt-3">{!! $posts->body !!}</p>
      <a href="/posts" class="btn btn-danger">
        < Kembali</a>
    </div>
  </div>
</div>



@endsection