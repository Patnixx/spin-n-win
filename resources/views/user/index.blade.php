@extends('components.structure')
@section('content')
<body class="profile">
    <div class="column left">
      <h1 class="profile-title">Profile of <span>{{$user->username}}</span></h1>
      <h2>Change password</h2>
      <form action="{{route('profile.updatepass')}}" method="POST">
        @csrf
        <!-- NOTE - New Pass --> 
        <div class="input-container">
          <input class="input-placeholder @error('n_pass') is-invalid @enderror" type="password" id="n_pass" name="n_pass" placeholder="New password" value="">
        </div>
        <div class="input-container">
          <input class="input-placeholder @error('nc_pass') is-invalid @enderror" type="password" id="nc_pass" name="nc_pass" placeholder="Confirm password" value="">
        </div>
          <button class="register-btn" type="submit">Change password</button>
          @error('nc_pass')
            <div class="error">{{$message}}</div>
          @enderror
          @error('n_pass')
            <div class="error">{{$message}}</div>
          @enderror
          @if(session('success'))
            <span class="alert alert-success">
                {{ session('success') }}
            </span>
          @endif
          @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
          @endif
      </form>
    </div>

  <div class="column right">
    <h2>Change username</h2>
    <form action="{{route('profile.updatepass')}}" method="POST">
      @csrf
      <!-- NOTE - New Pass --> 
      <div class="input-container">
        <input class="input-placeholder @error('o_user') is-invalid @enderror" type="text" id="o_user" name="o_user" placeholder="{{$user->username}}" value="">
      </div>
      <div class="input-container">
        <input class="input-placeholder @error('n_user') is-invalid @enderror" type="text" id="n_user" name="n_user" placeholder="New username" value="">
      </div>
        <button class="register-btn" type="submit">Change username</button>
        @error('o_user')
          <div class="error">{{$message}}</div>
        @enderror
        @error('n_user')
          <div class="error">{{$message}}</div>
        @enderror
        @if(session('success'))
          <div class="alert alert-success">
              {{ session('success-u') }}
          </div>
        @endif
        @if(session('error'))
          <div class="alert alert-error">
              {{ session('error') }}
          </div>
      @endif
    </form>
    </div>
  </body>
@endsection