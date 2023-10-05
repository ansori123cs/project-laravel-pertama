@extends('layout/main')
@section('main')
<div class="p-5 mb-4 bg-light rounded-3">
<h2 class="mb-5 ">Lists of Categories :</h2>
    @foreach ($categories as $category)
    <div class="container">
              <a href="/category/{{ $category->slug }}" class="btn btn-danger mb-3">{{ $category->name }}</a>
    </div>
    @endforeach
</div>

@endsection
