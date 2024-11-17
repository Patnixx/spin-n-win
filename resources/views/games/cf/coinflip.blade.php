@extends('components.structure')
@section('content')
<body class="cf-body">
   <div class="coin-container">
     <h1 class="title">Coinflip</h1>
     <h3>Flip a coin! It's truly 50/50.</h3>
     <br/>
     <div class="coin" id="coin">
      <img src="{{asset('assets/img/tails.png')}}" alt="Tails" />
     </div>
     <div class="choices">
      <label for="heads"><input type="radio" name="choice" id="choice" value="Heads">Heads</label>
      <label for="tails"><input type="radio" name="choice" id="choice" value="Tails">Tails</label>
     </div>
     <button id="tossButton">Toss Coin</button>
     <div class="tkn">
      <p>Balance: <span id="balance">{{$user_info->token_amount}}</span></p>
      <input type="number" name="betAmount" id="betAmount" placeholder="Enter a value" min="1" max="{{$user_info->token_amount}}">
   </div>
     
   </div>
   <p class="message"></p>
   <script>
      const coinIcon = document.getElementById('coin');
      const tossBtn = 
         document.getElementById('tossButton');
      const result = 
         document.querySelector('.message');
      let tokens = document.getElementById('balance').value;
      let bet = document.getElementById('betAmount').value;
      let choice = document.getElementById('choice').value;
      const win = bet*2;
      coinIcon.insertAdjacentElement('afterend', result);
      tossBtn.addEventListener('click', () => {
         tossBtn.disabled = true;
         tossBtn.classList.add('disabled');
         tokens -= bet;
         tossCoinFunction();
      });
      function tossCoinFunction() {
         const randomVal = Math.random();
         const faceCoin = randomVal < 0.5 ? 'Heads' : 'Tails';
         const imageUrl = faceCoin === 'Heads' ? '{{ asset("assets/img/heads.png") }}' : '{{ asset("assets/img/tails.png") }}';
            
         coinIcon.classList.add('flip');
         setTimeout(() => {
            coinIcon.innerHTML = 
                  `<img src="${imageUrl}" alt="${faceCoin}">`;
            coinIcon.classList.remove('flip');
            setTimeout(() => {
               if(choice == faceCoin)
               {
                  tokens += (bet*2);
               }
                  result.textContent = `Result: ${faceCoin}`;
                  result.style.opacity = 1;
                  tossBtn.classList.remove('disabled');
                  tossBtn.disabled = false;
                  
            }, 500);
         }, 1000);
      }
   </script>
</body>
@endsection