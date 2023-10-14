@extends('layout/main')
@section('main')
<div class="container">
    <h2 class="mb-5 mt-5 ">Lists of Categories :</h2>
    <div class="row justify-content-center">
        @foreach ($categories as $category)
        <div class="col-md-4 m-3">
            <a href="/categories/{{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/400x400/?{{$category->name}}" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-5 fs-3 " style="background-color: rgba(0,0,0,0.7);">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection