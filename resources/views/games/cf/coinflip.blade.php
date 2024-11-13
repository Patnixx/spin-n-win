@extends('components.structure')
@section('content')
<body class="cf-body">
   <div class="coin-container">
     <h1 class="title">Coinflip</h1>
     <h3>Flip a coin! It's truly 50/50.</h3>
     <br/>
     <div class="coin" id="coin">
      <img src="https://media.geeksforgeeks.org/wp-content/uploads/20231016151806/tails.png" alt="Tails" />
     </div>
     <button id="toss-button">Toss Coin</button>
     <div class="tkn">
      <p>Balance: {{$user_info->token_amount}}</p>
      <p>Current bet: </p>
   </div>
     
   </div>
   <p class="result"></p>
   <script>
      const coinIcon = document.getElementById('coin');
      const tossBtn = 
         document.getElementById('toss-button');
      const result = 
         document.querySelector('.result');
      coinIcon.insertAdjacentElement('afterend', result);
      tossBtn.addEventListener('click', () => {
         tossBtn.disabled = true;
         tossCoinFunction();
      });
      function tossCoinFunction() {
         const randomVal = Math.random();
         const faceCoin = randomVal < 0.5 ? 'Heads' : 'Tails';
         const imageUrl = faceCoin === 'Heads' ?
      'https://media.geeksforgeeks.org/wp-content/uploads/20231016151817/heads.png' :
      'https://media.geeksforgeeks.org/wp-content/uploads/20231016151806/tails.png';
            
         coinIcon.classList.add('flip');
         setTimeout(() => {
            coinIcon.innerHTML = 
                  `<img src="${imageUrl}" alt="${faceCoin}">`;
            coinIcon.classList.remove('flip');
            setTimeout(() => {
                  result.textContent = `Result: ${faceCoin}`;
                  result.style.opacity = 1;
                  tossBtn.disabled = false;
            }, 500);
         }, 1000);
      }
   </script>
</body>
 
@endsection