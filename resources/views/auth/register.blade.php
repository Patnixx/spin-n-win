@extends('components.structure')
@section('content')
<body class="register" >
<div class="register-container">
    <h1 class="register-title">Register</h1>
    <form action="{{route('custom.register')}}" method="POST">
      @csrf
      <!-- NOTE - First Name --> 
      <div class="input-container">
        <input class="input-placeholder" type="text" id="f_name" name="f_name" placeholder="First Name" class="@error('f_name') is-invalid @enderror" value="{{@old('f_name')}}">
        @if ($errors->has('f_name'))
          <span class="text-danger" role="alert">{{$errors->first('f_name')}}</span>
        @endif
      </div>

      <!-- NOTE - Last Name --> 
      <div class="input-container">
        <input class="input-placeholder" type="text" id="l_name" name="l_name" placeholder="Last Name" class="@error('l_name') is-invalid @enderror" value="{{@old('l_name')}}">
        @if ($errors->has('l_name'))
          <span class="text-danger" role="alert">{{$errors->first('l_name')}}</span>
        @endif
      </div>
      
      <!-- NOTE - Username --> 
      <div class="input-container">
        <input class="input-placeholder" type="text" id="username" name="username" placeholder="Username" class="@error('username') is-invalid @enderror" value="{{@old('username')}}">
        @if ($errors->has('username'))
          <span class="text-danger" role="alert">{{$errors->first('username')}}</span>
        @endif
      </div>

      <!-- NOTE - Email --> 
      <div class="input-container">
        <input class="input-placeholder" type="email" id="email" name="email" placeholder="Email" class="@error('email') is-invalid @enderror" value="{{@old('email')}}">
        @if ($errors->has('email'))
          <span class="text-danger" role="alert">{{$errors->first('email')}}</span>
        @endif
      </div>

      <!-- NOTE - Password --> 
      <div class="input-container">
        <input class="input-placeholder" type="password" id="password" name="password" placeholder="Password" class="@error('password') is-invalid @enderror" value="{{old('pass')}}">
        @if ($errors->has('password'))
          <span class="text-danger" role="alert">{{$errors->first('password')}}</span>
        @endif
      </div>

      <!-- NOTE - Confirm Password --> 
      <div class="input-container">
        <input class="input-placeholder" type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" class="@error('cpassword') is-invalid @enderror" autocomplete="new-password">
        @if ($errors->has('cpassword'))
          <span class="text-danger" role="alert">{{$errors->first('cpassword')}}</span>
        @endif
      </div>
        <button class="register-btn" type="submit">Register</button>
        <div class="sub-btns"><a class="sub-btn" href="{{route('login')}}">Back to Log In</a></div>
    </form>
  </div>
</body>
  @endsection