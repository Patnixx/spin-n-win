@extends('components.structure')
@section('content')
<body class="profile">
    <div class="column left">
      <h1 class="profile-title">Profile of <span>{{$user->username}}</span></h1>
      <h2>Change password</h2>
      <form action="{{route('profile.updatepass')}}" method="POST">
        @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
        @endif
        @if(session('error'))
          <div class="alert alert-error">
              {{ session('error') }}
          </div>
        @endif
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
      </form>
    </div>



  <div class="column right">
      <h2>Add balance</h2>
      <form action="{{route('profile.get.tkn')}}" method="POST">
        @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
        @endif
        @if(session('error'))
          <div class="alert alert-error">
              {{ session('error') }}
          </div>
        @endif
        @csrf
        <div class="input-container">
          <input class="input-placeholder" type="text" id="amount" name="amount" placeholder="{{$user->token_amount}}" class="" value="">
        </div>
        <button class="register-btn" type="submit">Buy</button>
        @error('amount')
          <div class="error">{{$message}}</div>
        @enderror
      </form>
      
      <h2>Withdraw balance</h2>
      <form action="{{route('profile.lost.tkn')}}" method="POST">
        <input type="hidden" name="_token" value="RlZ9ROPgBMxFGXd9hsp8aBv3TsXuA5G8HLwDg0h4" autocomplete="off">      <!-- NOTE - First Name --> 
        <div class="input-container">
          <input class="input-placeholder" type="text" id="amount" name="amount" placeholder="Amount" class="" value="">
                </div>
                <input type="hidden" name="_token" value="RlZ9ROPgBMxFGXd9hsp8aBv3TsXuA5G8HLwDg0h4" autocomplete="off">      <!-- NOTE - First Name --> 
        <div class="input-container">
          <input class="input-placeholder" type="text" id="acc" name="acc" placeholder="Card" class="" value="">
                </div>
      <button class="register-btn" type="submit">Withdraw</button>
      </form>
    </div>
  </body>
@endsection