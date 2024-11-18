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
              <iframe src="https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?gameSymbol=vswaysmfreya&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobby_url=https%3A%2F%2Fwww.pragmaticplay.com%2Fen%2F&lang=SK&cur=EUR.">
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