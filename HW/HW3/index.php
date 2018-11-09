<?php
   
    if(isset($_POST['keyword']) || isset($_POST['checkbox']) || isset($_POST['category'])) {
        include 'index.php';
         if($_POST['keyword'] == '') {
             echo "*ERROR: please select or input an answer";

            }
                elseif($_POST['category'] == "") {
                    echo "*ERROR: please select or input an answer";
        
            }
                elseif($_POST['checkbox'] == "") {
                    echo "*ERROR: please select or input an answer";
            }

}

?>
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
    <body>
        <div class="container">
        <br /><br />
        <main>
            <form class="questionForm" id="q1" data-question="1" action="Question1.php" method="post" >
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
                <input type="submit" value="Submit" />
            </fieldset>  
        </form>   

<!-- QUESTION 2 -->  
        <br />
        <form class="questionForm" id="q2" data-question="2"  method="post" action="../HW3/Question1.php" >
            <fieldset><label for="Question2"><strong>2. Is Wayne's World one of your favorite movies?</strong></label><!-- if yes=bohemian rhapsody, if no=Somebody to Love-->
            <br />
                <select name = "q2">
                    <option name="q2" value ="">Select One</option>
                    <option name="q2" value="yes">Hell, Yeah!</option>
                    <option name="q2" value="no">Nope</option>
                </select>
                <br />
                <input type="submit" value="Submit" />
            </fieldset>        
        </form>  

<!-- QUESTION 3 --> 
        <br />
        <form class="questionForm" id="q3" data-question="3" method="post" action="../HW3/Question1.php" >
            
            <fieldset >
                <label for="Question3"><strong>3. Complete this lyric (hint: two words)</strong></label>
                 <!--if correct=We are the champions, if not=Killer Queen-->
            <br />
                <label for="lyric">We will, we will...</label><br>
                <input type="text" name="q3" placeholder="Keyword" value="<?=$_GET['keyword']?>"/>
                <br />
                <input type="submit" value="Submit">
            </fieldset> 
        </form>  
        <?php
            if($_GET['keyword'] == 'champions') {
            echo "champions";
            }
        ?>
        
<!-- QUESTION 4 -->  
        <br />
        <form class="questionForm" id="q4" data-question="4" method="post" action="../HW3/Question1.php" >
            <fieldset> <label for="Question4"><strong>4. What is your current mood? </strong></label> <!-- all will result to "Dont stop me now-->
            <br />
            <form class="answers">
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
                <input type="submit" value="Submit" />
            </fieldset>        
        </form>    

<!-- QUESTION 5 -->
        <br />
        <form class="questionForm" id="q5" data-question="5" method="post" action="../HW3/Question1.php" >
            <fieldset><label for="Question5"><strong>5. Are you a Computer Science student?</strong></label><!-- yes=We are the champions, no=Somebody to Love-->
            <br />
                <select name = "q5">
                    <option name="q5" value ="">Select One</option>
                    <option name="q5" value="yes">Hell, Yeah!</option>
                    <option name="q5" value="no">Nah Bruh!</option>
                </select>
                <br />
                <input type="submit" value="Submit" />
            </fieldset>        
        </form>      
    </div>
  </main>

    <footer id="indexFooter"> 
            <hr>
            Internet Programming. 2018&copy; Garcia <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br />
            
            It is used for academic purposes only.
            
            <figure id="logo">
                <img src="img/csumb.jpg" alt="CSUMB logo" />
            </figure>
        </footer>
    </body>
</html>