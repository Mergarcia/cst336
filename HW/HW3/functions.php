<?php

function main() {
    
    
        $q1 = $_GET['q1'];
        $q2 = $_GET['q2'];
        $q3 = $_GET['q3'];
        $q4 = $_GET['q4'];
        $q5 = $_GET['q5'];
        
        if (empty($_GET['q1']) || (empty($_GET['q2'])) || (empty($_GET['q3'])) || (empty($_GET['q4'])) || (empty($_GET['q5']))) 
            {
           
                echo "<h3>ERROR: You Must ENTER or SELECT an option </h3>";       
            
             }
             //Results: 'Bohemian Rhapsody'
             if (($q1  == 'guitar') && ($q2 == 'no') && (($q3 != 'rock you') || ($q3 =='rock you'))
                        && (($q4 == 'dramatic ') || ($q4 == 'melancholy')) && (($q5 == 'yes') || ($q5 == 'no'))){
                $text = "https://www.youtube.com/watch?v=fJ9rUzIMcZQ";
                echo "<div id='result'>";
                echo "<strong>Your song is 'Bohemian Rhapsody'!</strong>";
                echo "<br />";
                echo "<br />";
                echo convertYoutube($text);
                echo "</div>";
            }
            // Results: 'Another One Bites The Dust'
            if(($q1  == 'bass') && (($q2 == 'yes') || ($q2 == 'no' )) && (($q3 != 'rock you') || ($q3 =='rock you')) && 
            (($q4 == 'dramatic') || ($q4 == 'excited ') || ($q4 == 'happy') || ($q4 == 'melancholy')) 
                        && (($q5 == 'yes')||($q5 == 'no'))) {
                $text = 'https://www.youtube.com/watch?v=rY0WxgSXdEE';
                echo "<div id='result'>";
                echo "<strong>Your song is 'Another One Bites The Dust'!</strong>";
                echo "<br />";
                echo "<br />";
                echo convertYoutube($text);
                echo "</div>";
               
            } 
             // Results: 'Waynes World'
            if ((($q1 == 'vocals')  || ($q1 == 'drums')) && ($q2 == 'yes') && (($q3 != 'rock you') || ($q3 =='rock you')) 
                    && (($q4 == 'excited ') || ($q4 == 'happy') || ($q4 == 'melancholy') || ($q4 == 'dramatic')) && ($q5 == 'yes')) {
                echo "<div id='result'>";
                $text = "https://www.youtube.com/watch?v=thyJOnasHVE&t=80s";
                echo "<div id='result'>";
                echo "<img src='img/bh.gif' width='420' height='340'>";
                echo "<br />";
                echo "<br />";
                echo "Your song is 'Bohemian Rhapsody'!";
                echo "<br />";
                echo convertYoutube($text);
                echo "<br />";
                echo "</div>";

             }
             // Results: 'Don't Stop Me Now'
             if  ((($q1 == 'vocals') || ($q1 == 'drums')) && ($q2 == 'no') && 
                    ($q3 != 'rock you') && (($q4 == 'excited ') || ($q4 == 'happy')) && (($q5 == 'yes')||($q5 == 'no'))) {
                $text = 'https://www.youtube.com/watch?v=HgzGwKwLmgM';
                echo "<div id='result'>";
                echo "Your song is 'Don't Stop Me Now'!";
                echo "<br />";
                echo "<br />";
                echo convertYoutube($text);
                echo "</div>";
                }

            // Results: 'We Will Rock You'
            if  (($q1 == 'drums') && ($q2 == 'no') && 
                    ($q3 == 'rock you') && (($q4 == 'dramatic') || ($q4 == 'happy'))  && ($q5 == 'yes')) {
                echo "<div id='result'>"; {
                $text = 'https://www.youtube.com/watch?v=-tJYN-eG1zk';
                echo "<div id='result'>";
                echo "Your song is 'We Will Rock You'!";
                echo "<br />";
                echo "<br />";
                echo convertYoutube($text);
                echo "</div>";
                }
                //Results: 'Killer Queen'
             if(($q1  == 'vocals') && (($q2 == 'yes') || ($q2 == 'no' )) && (($q3 != 'rock you') || ($q3 =='rock you'))
                    && (($q4 == 'dramatic') && ($q4 == 'melancholy')) && (($q5 == 'yes')||($q5 == 'no'))) {
                    $text = 'https://www.youtube.com/watch?v=2ZBtPf7FOoM';
                    echo "<div id='result'>";
                    echo "<strong>Your song is 'Killer Queen'!</strong>";
                    echo "<br />";
                    echo "<br />";
                    echo convertYoutube($text);
                    echo "</div>";
                }
                // Results: 'We Are The Champions'!
            if((($q1 == 'guitar') || ($q1 == 'drums') || ($q1 == 'vocals') || ($q1  == 'bass')) && ($q2 == 'yes')  && ($q3 == 'rock you') 
            && (($q4 == 'excited ') && ($q4 == 'happy') && ($q4 == 'melancholy') && ($q4 == "happy)")) 
                        && ($q5 == 'yes')) {
                    $text = 'https://www.youtube.com/watch?v=hSTivVclQQ0';
                    echo "<div id='result'>";
                    echo "Your song is 'We Are The Champions'!";
                    echo "<br />";
                    echo "<br />";
                    echo convertYoutube($text);
                    echo "<br />";
                    echo "</div>";
                 }
                 //Results: 'Somebody To Love'
                 if(($q1  == 'vocals') && ($q2 == 'no' ) && ($q3 =='rock you') 
                    && (($q4 == 'dramatic') && ($q4 == 'happy')) 
                        && ($q5 == 'no')) {
                    $text = 'https://www.youtube.com/watch?v=aA2IRoPFIn0';
                    echo "<div id='result'>";
                    echo "<strong>Your song is 'Somebody To Love'!</strong>";
                    echo "<br />";
                    echo "<br />";
                    echo convertYoutube($text);
                    echo "</div>";
                 }
                 //Results: 'You're My Best Friend'
                    elseif(($q1  == 'drums') && ($q2 == 'no' ) && ($q3 =='rock you') 
                    && (($q4 == 'dramatic') && ($q4 == 'happy') && ($q4 == 'excited')) 
                        && ($q5 == 'no'))  {
                    $text = 'https://www.youtube.com/watch?v=HaZpZQG2z10';
                    echo "<div id='result'>";
                    echo "<strong>Your song is 'You're My Best Friend'!</strong>";
                    echo "<br />";
                    echo "<br />";
                    echo convertYoutube($text);
                    echo "</div>";
                    }
                    else {
                    $text = 'https://www.youtube.com/watch?v=LS1RXZ6qpLc';
                    echo "<div id='result'>";
                    echo "<strong>Your song is 'Play The Game'!</strong>";
                    echo "<br />";
                    echo "<br />";
                    echo convertYoutube($text);
                    echo "</div>";
                    }

        }
    }

 
function convertYoutube($string) {
	return preg_replace(
		"/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
		"<iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
		$string
	);
}

?>
