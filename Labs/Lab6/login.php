<?php 
    session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <tittle>Ottermart's Admin Site</tittle>
    </head>
    <body>
        <h1>Ottermart's Admin Site</h1>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </body>

      <form method ="POST" action ="loginProcess.php" >
        Username: <input type="text" name="username" /> <br />
        Password: <input type="password" name="password" /> <br />
    
        <input type="submit" name="submitForm" value="Login!" />
        
       <!-- <input type="submit" class ='btn btn-primary' name="submitForm" value="Login!" /> -->
        <br /> <br />
        <?php 
            if($_SESSION['incorrect']) {
                echo "<p class='lead' id = 'error' style='color:red'>";
                echo "<strong>Incorrect Username or Password!</strong></p>";
            }
        ?>
        </form>
    </body>
</html>

