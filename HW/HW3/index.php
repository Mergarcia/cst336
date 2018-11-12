<?php
include 'functions.php';

    session_start();
                
                if(isset($_GET['q1'])) {
                    $_SESSION['q1'] = $_GET['q1'];
                    
                }
                if(isset($_GET['q2'])) {
                    $_SESSION['q2'] = $_GET['q2'];
                    
                }
                if(isset($_GET['q3'])) {
                    $_SESSION['q3'] = $_GET['q3'];
                    
                }
                if(isset($_GET['q4'])) {
                    $_SESSION['q4'] = $_GET['q4'];
                    
                }
                if(isset($_GET['q5'])) {
                    $_SESSION['q5'] = $_GET['q5'];
                    
                }
                
                session_destroy();
                main();
                    

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
        
<!-- QUESTION 1 (RADIO) -->   
        <div class="container">

        <br /><br />
            <form class="questionForm" action="index.php" method="GET" >
            <fieldset>
                <label for="q1"><strong>1. What is your favorite instrument?</strong></label> <!-- guitar=We Will Rock You -->
            <br />
            
                <input type="radio" name="q1" value="guitar"
                    <?php  
                            if($_SESSION['q1'] == 'guitar'){
                            echo 'checked="checked"';
                            } 
                    ?>
                    >
                <label for="guitar">Guitar</label><br>
                <input type="radio" name="q1" value="bass"
                    <?php
                        if($_SESSION['q1'] == 'bass'){
                            echo 'checked="checked"';
                        } 
                    ?>
                    >
                <label for="bass">Bass</label><br>
                <input type="radio" name="q1" value="drums"
                    <?php 
                        if($_SESSION['q1'] == 'drums'){
                            echo 'checked="checked"';
                        } 
                    ?>
                    >
                <label for="drums">Drums</label><br>
                <input type="radio" name="q1" value="vocals"
                    <?php 
                        if($_SESSION['q1'] == 'vocals'){
                            echo 'checked="checked"';
                        } 
                    ?>
                    >
                <label for="vocals">Vocals</label><br>
            </fieldset>  
<!-- QUESTION 2 (DROPDOWN) -->  
        <br />
            <fieldset><label for="Question2"><strong>2. Is Wayne's World one of your favorite movies?</strong></label><!-- if yes=bohemian rhapsody, if no=Somebody to Love-->
            <br />
                <select name="q2" required="required" placeholder="<?php $_SESSION['q2']; ?>">
                    <option  value ="">Select One</option>
                    <option  value="yes"
                    <?php 
                        if($_SESSION['q2'] == 'yes'){
                            echo 'selected="selected"';
                        } 
                    ?>>Hell, Yeah!</option>
                        
                    <option  value="no"
                     <?php 
                        if($_SESSION['q2'] == 'no'){
                            echo 'selected="selected"';
                        } 
        
                    ?>>No</option>
                </select>
                <br />
            </fieldset>        
<!-- QUESTION 3 (TEXT) --> 
        <br />
            <fieldset >
                <label for="Question3"><strong>3. Complete this lyric (hint: two words)</strong></label>
            <br />
                <label for="lyric">We will, we will...</label><br>
                <input type="text" name="q3" placeholder="Lyrics" 
                value="<?php  echo $_SESSION['q3'];?>" />
                <br />
            </fieldset> 

<!-- QUESTION 4 (CHECKBOX) -->  
        <br />
            <fieldset> <label for="Question4"><strong>4. What is your current mood? </strong></label> <!-- all will result to "Dont stop me now-->
            <br />
                <label for="q4">Select all that apply: </label><br>
                <input id="excited" type="checkbox" name="q4" value="excited" 
                    <?php 
                        if($_SESSION['q4'] == 'excited'){
                            echo 'checked="checked"';
                        } 
                        else { 'checked=""';
                            
                        }
                    ?>
                    >
                <label for="excited">Excited</label><br>
                <input id="melancholy" type="checkbox" name="q4" value="melancholy" 
                <?php 
                        if($_SESSION['q4'] == 'melancholy'){
                            echo 'checked="checked"';
                        } 
                    
                    ?>
                >
                <label for="melancholy">Melancholy</label><br>
                <input id="dramatic" type="checkbox" name="q4" value="dramatic" 
                    <?php 
                        if($_SESSION['q4'] == 'dramatic'){
                            echo 'checked="checked"';
                        } 
                    
                    ?>
                    >
                <label for="dramatic">Dramatic</label><br>
                <input id="happy" type="checkbox" name="q4" value="happy" 
                    <?php 
                        if($_SESSION['q4'] == 'happy'){
                            echo 'checked="checked"';
                        }
                
                    ?>
                    >
                <label for="happy">Happy AF</label>
                <br />
            </fieldset>        
        
<!-- QUESTION 5 (DROPDOWN) -->
        <br />
            <fieldset><label for="Question5"><strong>5. Are you a Computer Science student?</strong></label><!-- yes=We are the champions, no=Somebody to Love-->
            <br />
                <select name = "q5">
                    <option name="q5" value ="">Select One</option>
                    <option name="q5" value="yes"
                    
                        <?php 
                            if($_SESSION['q5'] == 'yes'){
                            echo 'selected="selected"';
                        } 
                    
                    ?>>Hell, Yeah!</option>
                    <option name="q5" value="no"
                        <?php 
                        if($_SESSION['q5'] == 'no'){
                            echo 'selected="selected"';
                        } 
                    ?>>Nah Bruh!</option>
                </select>
                <br />
            </fieldset>  
            <input id="submit" name="submit" type="submit" value="Submit" />
        </form> 
    </div>

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