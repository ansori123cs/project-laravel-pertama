@extends('layout/main')
@section('main')
    <div class="container ">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-5">
                <main class="form-signin p-4">
                    <h1 class="h3 mb-3 fw-normal">Form registration</h1>
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"name="name"
                                id="name" placeholder="Name" value="{{ old('name') }}"required>
                            <label for="name">Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control  @error('username') is-invalid @enderror"
                                name="username" id="username" placeholder="Username" value="{{ old('username') }}"
                                required>
                            <label for="username">Userame</label>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}"required>
                            <label for="floatingInput">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="floatingPassword" placeholder="Password"required>
                            <label for="floatingPassword">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="w-100 btn btn-lg btn-primary mt-3" name="submit" type="submit">Register</button>
                        <small class="mt-3">Already Regitered <a href="/login">Login!!!</a></small>
                    </form>
                </main>
            </div>
        </div>
    </div>
@endsection
