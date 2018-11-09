<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <title> Results </title>
        <style>
            @import url("HW3/index.php");
            @import url("css/styles.css");
        </style>

    </head>
    <br />
    <br />
    <br />
    
<?php
function convertYoutube($string) {
	return preg_replace(
		"/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
		"<iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
		$string
	);
}

//Question 1
     
    if($_POST['q1'] == 'guitar') {
        $text = "https://www.youtube.com/watch?v=fJ9rUzIMcZQ";
        echo "<div id='result'>";
        echo "Your favorite instrument is the Guitar!";
        echo "<br />";
        echo "Your song is 'Bohemian Rhapsody'!";
        echo "<br />";
        echo convertYoutube($text);
        echo "<br />";
        echo "<img src='img/bh.gif' width='420' height='340'>";
        echo "</div>";
 
    }
    if($_POST['q1'] == 'bass') {
        $text = 'https://www.youtube.com/watch?v=rY0WxgSXdEE';
        echo "<div id='result'>";
        echo "Your favorite instrument is the Bass!";
        echo "<br />";
        echo "Your song is 'Another One Bites The Dust'!";
        echo "<br />";
        echo "<br />";
        echo convertYoutube($text);
        echo "</div>";
        
    }
    if($_POST['q1'] == 'drums') {
        $text = "https://www.youtube.com/watch?v=azdwsXLmrHE";
        echo "<div id='result'>";
        echo "Your favorite instrument are the Drums!";
        echo "<br />";
        echo "Your song is 'Radio Ga Ga'!";
        echo "<br />";
        echo "<br />";
        echo convertYoutube($text);
        echo "</div>";
    }
    if($_POST['q1'] == 'vocals') {
        $text = "https://www.youtube.com/watch?v=yziGiVua0Dg";
        echo "<div id='result'>";
        echo "Your favorite instrument is Vocals!";
        echo "<br />";
        echo "Your song is 'Crazy Little Thing Called Love'!";
        echo "<br />";
        echo "<br />";
        echo convertYoutube($text);
        echo "</div>";
        
    }
//Question 2
         
    if($_POST['q2'] == 'yes') {
        echo "<div id='result'>";
        $text = 'https://www.youtube.com/watch?v=thyJOnasHVE?autoplay';
        echo "Your song is 'Bohemian Rhapsody'!";
        echo "<br />";
        echo "<br />";
        echo convertYoutube($text);
        echo "<br />";
        echo "</div>";
    }
    if($_POST['q2'] == 'no'){
        $text = 'https://www.youtube.com/watch?v=2ZBtPf7FOoM?autoplay';
        echo "<div id='result'>";
        echo "Your song is 'Killer Queen'!";
        echo "<br />";
        echo "<br />";
        echo convertYoutube($text);
        echo "</div>";
        
    }
//Question 3
    if(($_POST['q3'] == 'rock you') || ($_POST['q3'] == 'Rock you')) {
        $text = 'https://www.youtube.com/watch?v=-tJYN-eG1zk';
        echo "<div id='result'>";
        echo "Your song is 'We Will Rock You'!";
        echo "<br />";
        echo "<br />";
        echo convertYoutube($text);
        echo "</div>";
    }
    if(($_POST['q3'] != 'rock you') || ($_POST['q3'] != 'Rock you'))  {
        
        
    }
//Question 4
    if(($_POST['q4'] == 'excited') || ($_POST['q4'] == 'happy')) {
        $text = 'https://www.youtube.com/watch?v=HgzGwKwLmgM';
        echo "<div id='result'>";
        echo "Your song is 'Don't Stop Me Now'!";
        echo "<br />";
        echo "<br />";
        echo convertYoutube($text);
        echo "</div>";
    }
    if(($_POST['q4'] == 'melancholy') || ($_POST['q4'] == 'dramatic')) {
        $text = 'https://www.youtube.com/watch?v=HaZpZQG2z10';
        echo "<div id='result'>";
        echo "Your song is 'You're My Best Friend'!";
        echo "<br />";
        echo "<br />";
        echo convertYoutube($text);
        echo "</div>";
    }
//Question 5
    if($_POST['q5'] == 'yes') {
        
        $text = 'https://www.youtube.com/watch?v=hSTivVclQQ0';
        echo "<div id='result'>";
        echo "Your song is 'We Are The Champions'!";
        echo "<br />";
        echo "<br />";
        echo convertYoutube($text);
        echo "<br />";
        echo "</div>";
    }
    if($_POST['q5'] == 'no'){
        $text = 'https://www.youtube.com/watch?v=LS1RXZ6qpLc';
        echo "<div id='result'>";
        echo "Your song is 'Play The Game'!";
        echo "<br />";
        echo "<br />";
        echo convertYoutube($text);
        echo "</div>";
        
    }

   echo "<main id='homepage'>";
        echo "<br />";
        echo "<br />";
        echo "<strong>To go back to answer the next question, click on the Queen Icon </strong>";
        echo "<br />";
        echo "<br />";
        echo "<a href='index.php'>";
        echo "<img src='img/queen_bk2.jpg' alt='queen' width='100px'>";
        echo "</a>";
    echo "</main>";


?>

        <footer id="indexFooter"> 
            <hr>
            Internet Programming. 2018&copy; Garcia <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br />
            
            It is used for academic purposes only.
            
            <figure id="logo">
                <img src="img/csumb.jpg" alt="CSUMB logo" />
            </figure>
        </footer>
</html>