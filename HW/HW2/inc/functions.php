<?php

function spin($pill) {
    echo "<div id='spin'>";
    echo '<img id ="gif" src="img/pills.gif" alt="pills" title="Pills" width="400" />';
    echo "<br />";
    echo "<br />";
    echo "<strong>Click on the pill below to see where you will go: </strong>";
    echo "<br />";
    echo "<br />";
    
    switch ($pill) {
          case 0: $symbol = "Blue";
            break;  
          case 1: $symbol = "Red";
            break;
        }
        echo "<a href='index.php' id='home'>";
        echo "<a href='$symbol.php' id='$symbol'>";
        echo "<img id='pill$pos' src='img/$symbol.jpg' alt='$symbol' width='100px' >";
        echo "</a>";
    }


    
function play() {
    echo "<h1><audio src='img/matrix05.mp3' autoplay </audio></h1>";
    for ($i=1; $i<2; $i++) {
        ${"pill" . $i} = rand(0,1);
        spin (${"pill" . $i}, $i );
        }
    }
    
 // Array Function 1   
function display() {
    echo "These are the main characters: <br /> ";
    
    $characters = array("Neo", "Morpheus", "Trinity", "Agent Smith"); 

    for ($i=0; $i<4; $i++) {
        echo "<figure>";
            echo "<img src='img/$characters[$i].jpg' alt='$characters[$i]' width='100px'>";
            echo "<figcaption>$characters[$i]</figcaption>";
        echo "</figure>";
        
        }
    }
    
//Array Function 2
function random() {
    
    echo "<div ='bottom'>";
    
    $characters = array("Neo", "Morpheus", "Trinity", "Agent Smith"); 
    
    $key = array_rand($characters);

    if($characters[$key] == "Neo") {
        echo "You got Neo<br />";
        echo "You won 1000 points!";
    }
       
    else if($characters[$key] == "Morpheus") {
         echo "You got Morpheus<br />";
         echo "You won 500 points!";
    }
    else if($characters[$key] == "Trinity") {
         echo "You got Trinity<br />";
         echo "You won 250 points!";
    }
    else if($characters[$key] == "Agent Smith") {
         echo "You got Agent Smith<br />";
         echo "You Lost!";
    }
    
    soundClips($key);
    
      echo "</div>";
}
  

//Array Function 3
function soundClips($key) {
    $characters = array("Neo", "Morpheus", "Trinity", "Agent Smith"); 
    
    switch($key) {
         case 0: $symbol = "matrix19";
            break;  
         case 1: $symbol = "matrix88";
            break;
         case 2: $symbol = "matrix04";
            break;
         case 3: $symbol = "matrix47";
            break;
         
         }
        echo "<h1><audio src='img/$symbol.mp3' autoplay </audio></h1>";
    }

function game() {
    echo "<div id='game'>";
        display();
        echo "<br />";
        random();
    echo "<br />";
    echo "Click the spin button to try again: ";
    echo "<br />";
    echo "<a href='Red.php'</a>";
        echo "<img src='img/spin.jpg' alt='spin' width='60px'>";
    echo "</a>";

}


function blue() {
    echo"<h1>Hello!</h1>";
    echo "<strong>You took the BLUE pill, you may resume with your life. . .</strong>";
    echo "<h2><audio src='img/matrix23.mp3' autoplay </audio></h2>";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    
    echo "<div id='optionRed'>";
        echo "<strong>To take the RED pill, click on the red pill: </strong>";
        echo "<br />";
        echo "<a href='Red.php'>";
        echo "<img src='img/Red.jpg' alt='blue' width='100px'>";
        echo "</a>";
    echo "</div>";
    
}

function red() {
    echo"<h1 id='redH1'>Welcome to The Matrix</h1>";
    echo "<h2><strong>You took the RED pill</strong></h2>"; 
    echo "<img id='enter' src='img/Enter.jpg' alt='enter' 'width='70' >";
    
        game();
        echo "<br />";
        echo "<br />";

    echo "</div>";
    
    echo "<div id='optionBlue'>";
        echo "<strong>To take the BLUE pill, click on the blue pill:</strong>";
        echo "<br />";
        echo "<a href='Blue.php'>";
        echo "<img src='img/Blue.jpg' alt='blue' width='100px'>";
        echo "</a>";
    echo "</div>";
}

 
?>