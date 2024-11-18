@extends('components.structure')
@section('content')
<body class="login">
<div class="login-container">
    <h1 class="login-title">Login</h1>
    <form method="POST" action="{{route('custom.login')}}">
      @csrf
      <!-- NOTE - Username -->
      <div class="input-container">
        <input class="input-placeholder" type="username" id="username" name="username" placeholder="Username" class="@error('username') is-invalid @enderror" value="{{@old('username')}}">
      </div>

      <!-- NOTE - Password -->
      <div class="input-container">
        <input  class="input-placeholder" type="password" id="password" name="password" placeholder="Password" class="@error('password') is-invalid @enderror" value="{{@old('password')}}" minlength="6">
        @error('password')
          <span class="text-danger" role="alert">{{$message}}</span>
        @enderror
      </div>
        <button class="login-btn" type="submit">Log In</button>
        <div class="sub-btns" >
         <a class="sub-btn" href="{{route('register')}}">Register</a>
        </div>
    </form>
  </div>
</body>
  @endsection