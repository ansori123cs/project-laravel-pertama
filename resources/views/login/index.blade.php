@extends('layout/main')
@section('main')
    <div class="container ">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <main class="form-signin p-4">
                    <h1 class="h3 mb-3 fw-normal">Please login</h1>
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="name@example.com" autofocus required>
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                        <small class="mt-3">Not Regitered yet? <a href="/register">Register now!!!</a></small>
                    </form>
                </main>
            </div>
        </div>
    </div>
@endsection
