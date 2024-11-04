@extends('components.structure')
@section('content')
{{-- NEMAM NAJMENSIE TUSENIE PRECO TO TAHA CLASSY AJ KED ICH TO NEMA POZNAT ALE OK --}}
<body class="login">
<div class="login-container">
    <h1 class="login-title">{{$user_info->username}}</h1>
    <form method="POST" action="{{route('custom.login')}}">
      @csrf
      <!-- NOTE - First Name -->
      <div class="input-container">
        <label for="f_name">Current <em>First Name:</em></label>
        <input class="input-placeholder" type="f_name" id="f_name" name="f_name" placeholder="{{$user_info->f_name}}" class="@error('f_name') is-invalid @enderror" value="{{$user_info->f_name}}">
      </div>

      <!-- NOTE - Last Name -->
      <div class="input-container">
        <label for="l_name">Current <em>Last Name:</em></label>
        <input class="input-placeholder" type="l_name" id="l_name" name="l_name" placeholder="{{$user_info->l_name}}" class="@error('l_name') is-invalid @enderror" value="{{$user_info->l_name}}">
      </div>

      <!-- NOTE - Username -->
      <div class="input-container">
        <label for="username">Current <em>Username:</em></label>
        <input class="input-placeholder" type="username" id="username" name="username" placeholder="{{$user_info->username}}" class="@error('username') is-invalid @enderror" value="{{$user_info->username}}">
      </div>

      <!-- NOTE - Username -->
      <div class="input-container">
        <label for="email">Current <em>Email:</em></label>
        <input class="input-placeholder" type="email" id="email" name="email" placeholder="{{$user_info->email}}" class="@error('email') is-invalid @enderror" value="{{$user_info->email}}">
      </div>

      <!-- NOTE - Password -->
      <div class="input-container">
        <label for="password">Heslo este dorobim teraz ho jebem</label>
        <input  class="input-placeholder" type="password" id="password" name="password" placeholder="Password" class="@error('password') is-invalid @enderror" value="{{old('password')}}" minlength="6">
        {{--@if ($errors->has('password'))
          <span class="text-danger" role="alert"><strong>{{$errors->first('password')}}</strong></span>
        @endif
        @if ($errors->has('username'))
          <span class="text-danger" role="alert"><strong>{{$errors->first('username')}}</strong></span>
        @endif
        @if ($errors->any())
          <span class="text-danger" role="alert"><strong>{{$errors->first('username')}}</strong></span>
        @endif--}}
        
      </div>
        <div class="sub-btns" >
        <a class="sub-btn" href="{{route('home')}}"><em>Back to Main page</em></a>
      <a class="sub-btn" href="{{route('profile-update', $user_info->username)}}">Apply Changes</a>
      </div
    </form>
  </div>
</body>
  @endsection