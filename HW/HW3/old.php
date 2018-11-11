<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8" />
        <title> Queen Quiz </title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
        <header>
            <h1> <strong>Which Queen Song Best Describes You? </strong></h1>
            <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
        </header>
        
<!-- QUESTION 1 -->   
        <div class="container">
        <br /><br />
            <form class="questionForm" id="q1" action="index.php" method="get" >
            <fieldset>
                <label for="q1"><strong>1. What is your favorite instrument?</strong></label> <!-- guitar=We Will Rock You -->
            <br />
            
                <input type="radio" name="q1" value="guitar">
                <label for="guitar">Guitar</label><br>
                <input type="radio" name="q1" value="bass">
                <label for="bass">Bass</label><br>
                <input type="radio" name="q1" value="drums">
                <label for="drums">Drums</label><br>
                <input type="radio" name="q1" value="vocals">
                <label for="vocals">Vocals</label><br>
            </fieldset>  
<!-- QUESTION 2 -->  
        <br />
            <fieldset><label for="Question2"><strong>2. Is Wayne's World one of your favorite movies?</strong></label><!-- if yes=bohemian rhapsody, if no=Somebody to Love-->
            <br />
                <select name = "q2">
                    <option name="q2" value ="">Select One</option>
                    <option name="q2" value="yes">Hell, Yeah!</option>
                    <option name="q2" value="no">Nope</option>
                </select>
                <br />
            </fieldset>        
<!-- QUESTION 3 --> 
        <br />
            <fieldset >
                <label for="Question3"><strong>3. Complete this lyric (hint: two words)</strong></label>
                 <!--if correct=We are the champions, if not=Killer Queen-->
            <br />
                <label for="lyric">We will, we will...</label><br>
                <input type="text" name="q3" placeholder="Keyword" value="<?=$_GET['keyword']?>"/>
                <br />
            </fieldset> 

<!-- QUESTION 4 -->  
        <br />
            <fieldset> <label for="Question4"><strong>4. What is your current mood? </strong></label> <!-- all will result to "Dont stop me now-->
            <br />
                <label for="q4">Select all that apply: </label><br>
                <input id="excited" type="checkbox" name="q4" value="excited">
                <label for="excited">Excited</label><br>
                <input id="melancholy" type="checkbox" name="q4" value="melancholy">
                <label for="melancholy">Melancholy</label><br>
                <input id="dramatic" type="checkbox" name="q4" value="dramatic">
                <label for="dramatic">Dramatic</label><br>
                <input id="happy" type="checkbox" name="q4" value="happy">
                <label for="happy">Happy AF</label>
                <br />
            </fieldset>        
        
<!-- QUESTION 5 -->
        <br />
            <fieldset><label for="Question5"><strong>5. Are you a Computer Science student?</strong></label><!-- yes=We are the champions, no=Somebody to Love-->
            <br />
                <select name = "q5">
                    <option name="q5" value ="">Select One</option>
                    <option name="q5" value="yes">Hell, Yeah!</option>
                    <option name="q5" value="no">Nah Bruh!</option>
                </select>
                <br />
            </fieldset>  
            <input id="submit" type="submit" value="Submit" />
        </form> 
    </div>
    
<?php

function convertYoutube($string) {
	return preg_replace(
		"/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
		"<iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
		$string
	);
}
   
        
        if (empty($_GET['q1']) || (empty($_GET['q2'])) || (empty($_GET['q3'])) || (empty($_GET['q4'])) || (empty($_GET['q5']))) 
        {
           
            echo "<h3>ERROR: You Must ENTER or SELECT an option </h3>";       
            
        }
        
            if($_GET['q1']  == 'guitar') {
                $text = "https://www.youtube.com/watch?v=fJ9rUzIMcZQ";
                echo "<div id='result'>";
                echo "<strong>Your song is 'Bohemian Rhapsody'!</strong>";
                echo "<br />";
                echo "<br />";
                echo convertYoutube($text);
                echo "</div>";
            }
            elseif($_GET['q1']  == 'bass')  {
                $text = 'https://www.youtube.com/watch?v=rY0WxgSXdEE';
                echo "<div id='result'>";
                echo "<strong>Your song is 'Another One Bites The Dust'!</strong>";
                echo "<br />";
                echo "<br />";
                echo convertYoutube($text);
                echo "</div>";
                
            }
  
     

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