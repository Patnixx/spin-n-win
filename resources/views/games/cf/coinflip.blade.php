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
     <div>
      <label>
          <input type="radio" name="choice" value="heads"> Heads
      </label>
      <label>
          <input type="radio" name="choice" value="tails"> Tails
      </label>
  </div>
     <button id="tossButton">Toss Coin</button>
     <div class="tkn">
      <p>Balance: <span id="balance">100000.00</span></p>
      <input type="number" name="betAmount" id="betAmount" placeholder="Enter a value" min="1" max="">
      </div>
     
   </div>
   <p class="message"></p>
   <script>
      /*const coinIcon = document.getElementById('coin');
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
                  result.textContent = `Result: ${faceCoin}`;
                  result.style.opacity = 1;
                  tossBtn.classList.remove('disabled');
                  tossBtn.disabled = false;
                  
            }, 500);
         }, 1000);
      }*/
      document.addEventListener("DOMContentLoaded", () => {
    const balanceSpan = document.getElementById("balance");
    const betAmountInput = document.getElementById("betAmount");
    const playButton = document.getElementById("tossButton");
    const choiceInputs = document.getElementsByName("choice");
    const coinIcon = document.getElementById("coin"); // The coin image element
    const resultMessage = document.querySelector(".message"); // Result display element

    playButton.addEventListener("click", () => {
        const currentBalance = parseFloat(balanceSpan.textContent.replace(/,/g, ""));
        const betAmount = parseFloat(betAmountInput.value);
        const selectedChoice = Array.from(choiceInputs).find(input => input.checked)?.value;

        if (!selectedChoice) {
            alert("Please select Heads or Tails.");
            return;
        }

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

        // Simulate a coin flip result (Heads = 0, Tails = 1)
        const flipResult = Math.random() < 0.5 ? "heads" : "tails";

        // Coin animation
        coinIcon.classList.add("flip"); // Add a class to trigger CSS animation
        setTimeout(() => {
            // Update coin image and stop animation
            const imageUrl = flipResult === "heads" 
                ? '{{ asset("assets/img/heads.png") }}' 
                : '{{ asset("assets/img/tails.png") }}';

            coinIcon.innerHTML = `<img src="${imageUrl}" alt="${flipResult}" />`;
            coinIcon.classList.remove("flip");

            // Display the result
            setTimeout(() => {
                if (flipResult === selectedChoice) {
                    const winnings = betAmount * 2;
                    balanceSpan.textContent = (newBalance + winnings).toFixed(2);
                    resultMessage.textContent = `You won! The coin landed on ${flipResult}. Your bet amount has doubled to ${winnings.toFixed(2)}.`;
                } else {
                    resultMessage.textContent = `You lost! The coin landed on ${flipResult}. ${betAmount.toFixed(2)} has been deducted from your balance.`;
                }
                resultMessage.style.opacity = 1; // Make the result visible
            }, 500);
        }, 1000); // Coin animation duration
    });
});

   </script>
</body>
@endsection