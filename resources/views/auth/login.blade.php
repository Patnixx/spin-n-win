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
        @if ($errors->has('password'))
          <span class="text-danger" role="alert"><strong>{{$errors->first('password')}}</strong></span>
        @endif
        @if ($errors->has('username'))
          <span class="text-danger" role="alert"><strong>{{$errors->first('username')}}</strong></span>
        @endif
        
      </div>
        <button class="login-btn" type="submit">Log In</button>
        <div class="sub-btns" >
        <a class="sub-btn" href="{{route('register')}}">Register</a>
      <a class="sub-btn" href="#">Forgot your password?</a>
      </div
    </form>
  </div>
</body>
  @endsection