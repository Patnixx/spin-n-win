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
      <p>Balance: <span id="balance">100 000.00</span></p>
      <input type="number" name="betAmount" id="betAmount" placeholder="Enter a value" min="1" max="">
      </div>
     
   </div>
   <p class="message"></p>
   <script>
      const coinIcon = document.getElementById('coin');
      const tossBtn = document.getElementById('tossButton');
      const result = document.querySelector('.message');
      const win = bet*2;
      coinIcon.insertAdjacentElement('afterend', result);
      tossBtn.addEventListener('click', () => {
         
         const currentBalance = parseFloat(balanceSpan.textContent.replace(/,/g, ""));
         const betAmount = parseFloat(betAmountInput.value);

         if (isNaN(betAmount) || betAmount <= 0) {
               alert("Please enter a valid bet amount.");
               return;
         }

         if (betAmount > currentBalance) {
               alert("You cannot bet more than your current balance.");
               return;
         }

         // Deduct bet amount
         const newBalance = currentBalance - betAmount;
         balanceSpan.textContent = newBalance.toFixed(2);

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
      document.addEventListener("DOMContentLoaded", () => {
    const balanceSpan = document.getElementById("balance");
    const betAmountInput = document.getElementById("betAmount");
    const playButton = document.getElementById("playButton");

    playButton.addEventListener("click", () => {
        /*const currentBalance = parseFloat(balanceSpan.textContent.replace(/,/g, ""));
        const betAmount = parseFloat(betAmountInput.value);

        if (isNaN(betAmount) || betAmount <= 0) {
            alert("Please enter a valid bet amount.");
            return;
        }

        if (betAmount > currentBalance) {
            alert("You cannot bet more than your current balance.");
            return;
        }

        // Deduct bet amount
        const newBalance = currentBalance - betAmount;
        balanceSpan.textContent = newBalance.toFixed(2);*/

        const isWin = Math.random() < 0.5;

        setTimeout(() => {
            if (isWin) {
                const winnings = betAmount * 2;
                balanceSpan.textContent = (newBalance + winnings).toFixed(2);
                alert(`You won! Your bet amount has doubled to ${winnings.toFixed(2)}`);
            } else {
                alert(`You lost! ${betAmount.toFixed(2)} has been deducted from your balance.`);
            }
        }, 500); // Simulate a short delay for the game result
    });
});
   </script>
</body>
@endsection