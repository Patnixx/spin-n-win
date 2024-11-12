@extends('components.structure')
@section('content')
<body class="coinflip">
    <div class=”cf-container”>
        <div class=”coin” id=”coin”>
            <div class=”heads”>
               <img src=”head.jpg”>
            </div>
            <div class=”tails”>
               <img src=”tails.jpg”>
            </div>
         </div>
         <div class=”cf-stats”>
            <p id=”heads-count”>Heads: 0</p>
            <p id=”tails-count”>Tails: 0</p>
         </div>
         <div class=”cf-buttons”>
            <button id=”flip-button”>Flip Coin</button>
            <button id=”reset-button”>Reset</button>
         </div>
    </div>
</body>
@endsection