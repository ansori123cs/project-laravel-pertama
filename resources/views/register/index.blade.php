@extends('layout/main')
@section('main')
<div class="container ">
  <div class="row justify-content-center mt-5">
    <div class="col-md-5">
          <main class="form-signin p-4">
            <h1 class="h3 mb-3 fw-normal">Form registration</h1>
          <form>
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            <small class="mt-3">Not Regitered yet? <a href="/register">Register now!!!</a></small>
          </form>
        </main>
        </div>
      </div>
</div>
@endsection