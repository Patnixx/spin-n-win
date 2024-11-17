@extends('components.structure')
@section('content')
<body class="profile">
    <div class="column left">
      <h1 class="profile-title">Profile</h1>
      <h2>Change password</h2>
      <form action="{{route('profile-update')}}" method="POST">
        <input type="hidden" name="_token" value="RlZ9ROPgBMxFGXd9hsp8aBv3TsXuA5G8HLwDg0h4" autocomplete="off">      <!-- NOTE - First Name --> 
        <div class="input-container">
          <input class="input-placeholder" type="text" id="o_pass" name="o_pass" placeholder="Old password" class="" value="">
                </div>
  
        <!-- NOTE - Last Name --> 
        <div class="input-container">
          <input class="input-placeholder" type="text" id="n_pass" name="n_pass" placeholder="New password" class="" value="">
                </div>
          <button class="register-btn" type="submit">Change password</button>
      </form>
    </div>
  <div class="column right">
      <h2>Add balance</h2>
      <form action="{{route('profile-update')}}" method="POST">
        <input type="hidden" name="_token" value="RlZ9ROPgBMxFGXd9hsp8aBv3TsXuA5G8HLwDg0h4" autocomplete="off">      <!-- NOTE - First Name --> 
        <div class="input-container">
          <input class="input-placeholder" type="text" id="amount" name="amount" placeholder="Amount" class="" value="">
                </div>
      <button class="register-btn" type="submit">Vyber</button>
      <h2>Add balance</h2>
      <form action="{{route('profile-update')}}" method="POST">
        <input type="hidden" name="_token" value="RlZ9ROPgBMxFGXd9hsp8aBv3TsXuA5G8HLwDg0h4" autocomplete="off">      <!-- NOTE - First Name --> 
        <div class="input-container">
          <input class="input-placeholder" type="text" id="amount" name="amount" placeholder="Amount" class="" value="">
                </div>
                <input type="hidden" name="_token" value="RlZ9ROPgBMxFGXd9hsp8aBv3TsXuA5G8HLwDg0h4" autocomplete="off">      <!-- NOTE - First Name --> 
        <div class="input-container">
          <input class="input-placeholder" type="text" id="acc" name="acc" placeholder="Ucet" class="" value="">
                </div>
      <button class="register-btn" type="submit">Vyber gg</button>
      </form>
    </div>
  </body>
@endsection