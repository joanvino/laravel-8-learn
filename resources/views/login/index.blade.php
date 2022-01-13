@extends('layouts.main')

@section('container')


<div class="loginpanel">
  <div class="row justify-content-center">
    <div class="col-md-4">

      @if (session()->has('success'))
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
       {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
       {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      <main class="form-signin">
        <h1>Login</h1>
  <form class="text-center" action="/login" method="post">
    @csrf
    <div class="txt">
      <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email"  placeholder="Email" autofocus required value="{{ old('email') }}">
      <label class="w-100" for="email" ></label> 
      @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
    </div> 
    <div class="txt">
      <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
      <label for="password"></label> 
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

  </form>
    <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
</main>
  </div>
</div>
</div>
  <span class="resp-info"></span>
@endsection