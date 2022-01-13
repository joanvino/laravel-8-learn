@extends('dashboard.layouts.main')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New User</h1>
  </div>

  <div class="loginpanel">
    <div class="row justify-content-center">
      <div class="col-lg-5">

          <h1>Register Form</h1>
    <form method="post" action="/dashboard/user" >
      @csrf
           <div class="txt">
        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
        <label for="name" ></label> 
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div> 
      <div class="txt">
          <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" id="username" placeholder="UserName" required value="{{ old('username') }}">
          <label for="username" ></label> 
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div> 
      <div class="txt">
        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email"  placeholder="Email" required value="{{ old('email') }}">
        <label for="email" ></label> 
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div> 
      <div class="txt">
        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Password" required>
        <label  for="password"></label> 
        @error('password')
        <div class="invalid-feedback"> 
          {{ $message }}
        </div>
        @enderror
      </div>
  
      <button class="w-100 btn btn-lg btn-primary" type="submit">Create User</button>
  
    </form>

    </div>
  </div>
  </div>
  
      



@endsection

