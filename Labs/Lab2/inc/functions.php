<?php
function displaySymbol($randomValue, $pos) {
    
         /*   
        if($randomValue == 0) {
            echo '<img src="img/seven.png" alt="seven" title="Seven" width="70" />';
        } else if ($randomValue == 1) {
            echo '<img src="img/cherry.png" alt="cherry" title="Cherry" width="70" />';
        } else {
            echo '<img src="img/lemon.png" alt="lemon" title="Lemon" width="70" />';
        }
      */ 

      switch ($randomValue) {
          case 0: $symbol = "seven";
            break;  
          case 1: $symbol = "grapes";
            break;
          case 2: $symbol = "cherry";
            break;
          case 3: $symbol = "lemon";
        }
        echo "<img id='reel$pos' src='img/$symbol.png' alt='$symbol' title='".ucfirst($symbol) . "'width='70' >";
    }
    
function displayPoints($randomValue1, $randomValue2, $randomValue3) {
    
        echo "<div id='output'>";
        if ($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3){
            switch ($randomValue1) 
            {
                case 0: $totalPoints = 1000;
                    echo "<h1>Jackpot!</h1>";
                    echo"<h2><audio src='img/jackpot.wav' autoplay </audio></h2>";
                    break;
                case 1: $totalPoints = 900;
                    break;
                case 2: $totalPoints = 500;
                    break;
                case 3: $totalPoints = 250;
                    break;
            }
            echo "<h3>You won $totalPoints points!</h3>";
        } else {
            echo "<h4> Try Again! </h4>";
        }
        echo "</div>";
    }
    
function play() {
    for ($i=1; $i<4; $i++) {
        ${"randomValue" . $i} = rand(0,3);
        displaySymbol(${"randomValue" . $i}, $i );
        }
        displayPoints($randomValue1, $randomValue2, $randomValue3);
    }
    
?>