<div class="login-container">
    <h1 class="green">Login</h1>
    <form method="POST" action="{{route('custom.login')}}">
      @csrf
      <!-- NOTE - Username -->
      <div class="input-container">
        <input type="username" id="username" name="username" placeholder="Username" class="@error('username') is-invalid @enderror" value="{{@old('username')}}">
      </div>

      <!-- NOTE - Password -->
      <div class="input-container">
        <input type="password" id="password" name="password" placeholder="Password" class="@error('password') is-invalid @enderror" value="{{@old('password')}}" minlength="6">
        @if ($errors->has('password'))
          <span class="text-danger" role="alert"><strong>{{$errors->first('password')}}</strong></span>
        @endif
        @if ($errors->has('username'))
          <span class="text-danger" role="alert"><strong>{{$errors->first('username')}}</strong></span>
        @endif
        
      </div>
      <div class="buttons">
        <button type="submit">Log In</button>
        <a href="{{route('register')}}">Register</a>
      </div>
      
      <p><a href="#">Forgot your password?</a></p>
    </form>
  </div>