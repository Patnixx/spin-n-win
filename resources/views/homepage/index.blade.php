@extends('components.structure')
@section('content')
<link rel="stylesheet" href="home.css">
<body>
    <main class="main_hp">
        <div class="sidebar">
            <div class="banner">
                <img src="{{asset('assets/favicon/spin_n_win_circle.png')}}" alt="" srcset="">
                <h1>S&W</h1>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="">SLOTS</a></li>
                    <li><a href="{{route('coinflip')}}">COINFLIP</a></li>
                    <li><a href="">MINES</a></li>
                    @if (Route::has('login'))
                        <div>
                            @auth
                                <a href="{{ route('logout') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Logout</a>
                                <a href="{{ route('profile') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:&outline-2 focus:rounded-sm focus:outline-red-500">{{$credentials->username}}</a>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </ul>
            </div> 
        </div>
        <div class="slots">
            <nav>
                <div class="last-win">
                    <div class="gradient">
                      <h1>3.40€</h1>
                      <h2>Cukrovkar</h2>
                    </div>
                </div>  
                <div class="last-win">
                    <div class="gradient">
                      <h1>3.40€</h1>
                      <h2>Cukrovkar</h2>
                    </div>
                </div>    
                <div class="last-win">
                    <div class="gradient">
                      <h1>3.40€</h1>
                      <h2>Cukrovkar</h2>
                    </div>
                </div>    
                <div class="last-win">
                    <div class="gradient">
                      <h1>3.40€</h1>
                      <h2>Cukrovkar</h2>
                    </div>
                </div>    
                <div class="last-win">
                    <div class="gradient">
                      <h1>3.40€</h1>
                      <h2>Cukrovkar</h2>
                    </div>
                </div>    
                <div class="last-win">
                    <div class="gradient">
                      <h1>3.40€</h1>
                      <h2>Cukrovkar</h2>
                    </div>
                </div>      
            </nav>
            <div class="slideshow-container">
                <div class="mySlides fade">
                  <img src="{{asset('assets/slides/first.png')}}" style="width:100%">
                </div> 
                <div class="mySlides fade">
                  <img src="{{asset('assets/slides/second.jpg')}}" style="width:100%">
                </div>               
                <div class="mySlides fade">
                  <img src="{{asset('assets/slides/third.jpg')}}" style="width:100%">
                </div>
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a> 
                </div>
              <div class="games">
                <h1>SLOTS</h1>
                <h2>Most Popular</h2>
                  <div class="gamesky">
                    @foreach ($slots as $slot)
                    <a class="visibility" href="">
                    <div class="game" style="background-image: url('{{ asset("assets/slots/" . $slot->name . ".png") }}');">
                    <button class="play-btn">Play</button>
                      </div>
                    </a>  
                    {{--<div class="game"><img src="{{$slot->picture_path}}" alt="{{$slot->name}}"></div>--}}
                    @endforeach
                    {{--@for($i = 0; $i <10; $i++)
                        <div class="game"></div>
                    @endfor--}}
                  </div>
              </div>
            </div>
        </div>
    </main>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slides[slideIndex-1].style.display = "block";  
        }

        const links = document.querySelectorAll('.visibility');
        const buttons = document.querySelectorAll('.play-btn');

        links.forEach((link, index) => {
          link.addEventListener('mouseenter', () => {
            buttons[index].style.display = 'inline-block';
          });
          link.addEventListener('mouseleave', () => {
            buttons[index].style.display = 'none';
          });
        });

        </script>
    </body>
@endsection