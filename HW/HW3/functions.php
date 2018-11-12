<?php

function main() {
    
    if(isset($_GET['submit'])) { 
        $q1 = $_GET['q1'];
        $q2 = $_GET['q2'];
        $q3 = $_GET['q3'];
        $q4a = $_GET['q4a'];
        $q4b = $_GET['q4b'];
        $q4c = $_GET['q4c'];
        $q4d = $_GET['q4d'];
        $q5 = $_GET['q5'];
    
        if (empty($_GET['q1']) || (empty($_GET['q2'])) || (empty($_GET['q3'])) 
            || ((empty($_GET['q4a'])) &&  (empty($_GET['q4b'])) && (empty($_GET['q4c'])) && (empty($_GET['q4d']))) || (empty($_GET['q5']))) 
            {
           
                echo "<h3>ERROR: You Must ENTER or SELECT an option </h3>";       
            
             }
    }
             //Results: 'Bohemian Rhapsody'
             
         if (($q1  == 'guitar') && ($q2 == 'no') && (($q3 != 'rock you') || ($q3 =='rock you'))
                        && (($q4c == 'dramatic ') || ($q4b == 'melancholy') || ()) && (($q5 == 'yes') || ($q5 == 'no'))){
                $text = "https://www.youtube.com/watch?v=fJ9rUzIMcZQ";
                echo "<div id='result'>";
                echo "<strong>Your song is 'Bohemian Rhapsody'!</strong>";
                echo "<br />";
                echo "<br />";
                echo convertYoutube($text);
                echo "</div>";
            }
            // Results: 'Another One Bites The Dust'
             elseif(($q1  == 'bass') && (($q2 == 'yes') || ($q2 == 'no' )) && (($q3 != 'rock you') || ($q3 =='rock you')) && 
            (($q4c == 'dramatic') || ($q4d == 'happy ') ||  ($q4b == 'melancholy') || ($q4a == 'excited')) 
                        && (($q5 == 'yes') || ($q5 == 'no'))) {
                $text = 'https://www.youtube.com/watch?v=rY0WxgSXdEE';
                echo "<div id='result'>";
                echo "<strong>Your song is 'Another One Bites The Dust'!</strong>";
                echo "<br />";
                echo "<br />";
                echo convertYoutube($text);
                echo "</div>";
               
            } 
             // Results: 'Waynes World'
            elseif ((($q1 == 'guitar')  || ($q1 == 'drums')) && ($q2 == 'yes') && (($q3 != 'rock you') || ($q3 =='rock you')) 
                    && (($q4a == 'excited') || ($q4d == 'happy')) && ($q5 == 'yes')) {
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
             elseif  ((($q1 == 'vocals') || ($q1 == 'drums')) && ($q2 == 'no') && 
                    ($q3 != 'rock you') && (($q4a == 'excited') || ($q4d == 'happy') || ($q4b == 'melancholy') ) && (($q5 == 'yes')||($q5 == 'no'))) {
                $text = 'https://www.youtube.com/watch?v=HgzGwKwLmgM';
                echo "<div id='result'>";
                echo "Your song is 'Don't Stop Me Now'!";
                echo "<br />";
                echo "<br />";
                echo convertYoutube($text);
                echo "</div>";
                }

            // Results: 'We Will Rock You'
            elseif  (($q1 == 'drums') && ($q2 == 'no') && 
                    ($q3 == 'rock you') && (($q4c == 'dramatic') || ($q4d == 'happy'))  && ($q5 == 'yes')) {
                echo "<div id='result'>"; 
                $text = 'https://www.youtube.com/watch?v=-tJYN-eG1zk';
                echo "<div id='result'>";
                echo "Your song is 'We Will Rock You'!";
                echo "<br />";
                echo "<br />";
                echo convertYoutube($text);
                echo "</div>";
                }
                // Results: 'We Are The Champions'!
            elseif((($q1 == 'guitar') || ($q1 == 'drums') || ($q1  == 'bass')) && ($q2 == 'yes')  && ($q3 == 'rock you') 
            && (($q4a == 'excited') || ($q4c == "dramatic")) 
                        && (($q5 == 'no') || ($q5 == 'yes'))) {
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
                elseif(($q1  == 'vocals') && (($q2 == 'yes') || ($q2 == 'no')) && (($q3 != 'rock you') || ($q3 =='rock you'))
                    && (($q4c == 'dramatic') || ($q4b == 'melancholy') || ($q4a == 'excited') ||  ($q4d == 'happy')) 
                        && (($q5 == 'yes')) || ($q5 == 'no')) {
                    $text = 'https://www.youtube.com/watch?v=aA2IRoPFIn0';
                    echo "<div id='result'>";
                    echo "<strong>Your song is 'Somebody To Love'!</strong>";
                    echo "<br />";
                    echo "<br />";
                    echo convertYoutube($text);
                    echo "</div>";
                 }
                 //Results: 'You're My Best Friend'
                elseif(($q1  == 'guitar') &&  ($q2 == 'no' ) && ($q3 =='rock you') 
                    && (($q4b == 'happy')) 
                        && ($q5 == 'no'))  {
                    $text = 'https://www.youtube.com/watch?v=HaZpZQG2z10';
                    echo "<div id='result'>";
                    echo "<strong>Your song is 'You're My Best Friend'!</strong>";
                    echo "<br />";
                    echo "<br />";
                    echo convertYoutube($text);
                    echo "</div>";
                    }
                elseif((($q1 == 'guitar') || ($q1 == 'drums')) &&  (($q2 == 'yes') || ($q2 == 'no')) &&
                        (($q3 != 'rock you') || ($q3 =='rock you')) && (($q4a == 'excited') || ($q4b == 'melancholy') ||
                            ($q4c == "dramatic") ||  ($q4d == 'happy')) && (($q5 == 'yes')||($q5 == 'no')))  {
                        $text = 'https://www.youtube.com/watch?v=2ZBtPf7FOoM';
                        echo "<div id='result'>";
                        echo "<strong>Your song is 'Killer Queen'!</strong>";
                        echo "<br />";
                        echo "<br />";
                        echo convertYoutube($text);
                        echo "</div>";
                        
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
