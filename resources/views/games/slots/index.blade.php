@extends('components.structure')
@section('content')
<link rel="stylesheet" href="home.css">
<body>
    <main class="main_sp">
        <div class="sidebar">
            <div class="banner">
                <img src="{{asset('assets/favicon/spin_n_win_circle.png')}}" alt="" srcset="">
                <h1>S&W</h1>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="">SLOTS</a></li>
                    <li><a href="{{route('coinflip')}}">COINFLIP</a></li>
                </ul>
            </div> 
        </div>
        <div class="slots">
            <nav>
              @foreach ($slots as $index => $slot)
              <div class="last-win" style="background-image: url('{{ asset("assets/slots/" . $slot->name . ".png") }}');">
                <div class="gradient">
                  <h1>{{$slot->name}}</h1>
                  <h2>{{$users[$index]->username}}</h2>
                </div>
              </div>
            @endforeach
                <div class="btns">
                 @if (Route::has('login'))
                        <div>
                            @auth
                                <a href="{{ route('logout') }}" class="font-semibold text-white-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Logout</a>
                                <a href="{{ route('profile') }}" class="font-semibold text-white-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:&outline-2 focus:rounded-sm focus:outline-red-500">{{$credentials->username}}</a>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-white-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-white-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>        
            </nav>
            <div class="iframe-container">
              <iframe src="{{$slot->game_path}}">
              </div>
            </div>
        </div>
    </main>
    </body>
@endsection