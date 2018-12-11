<?php
session_start();

include 'dbConnection.php';
$conn = getDatabaseConnection("final");

function imageSrc($img) {
    echo "<img src='img/superheroes/" .$img. ".png'>";
}

function displayRandomHero() {
    $heroes = array("batman","captain_america","hulk",
                        "iron_man", "spiderman", "superman", "wonder_woman");
    $r = rand(0, 6);
    $randHero = $heroes[$r];
    global $conn;
        $sql = "SELECT DISTINCT image 
                FROM superhero 
                WHERE image ='$randHero'";
                
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($records as $record) {
            echo imageSrc($record['image']);
        }
}  

function displayOptions() {
    global $conn;
        $sql = "SELECT DISTINCT firstName, lastName 
                FROM superhero 
                WHERE 1
                ORDER BY firstName";
            
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        
        
        foreach ($records as $record){
            $_SESSION['firstName'] = $record["firstName"]; 
            $_SESSION['lastName'] = $record["lastName"]; 
            echo "<option value='".$record["firstName"]."'>". $record["firstName"]. " " . $record["lastName"]."</option>";
        }

}
function displayResults() {
    if(empty($_SESSION['submit'])) {
        include 'gradeQuiz.js';
    } else {
        echo"Error: You must select an option.";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Superhero Quiz</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>What is the real name of the following superhero?</h1>
            <div> 
                <?= displayRandomHero(); ?>
            </div>
        <br/>
         <form>
            <select name="options" placeholder="<?php $_SESSION['options']; ?>">
            <option value="">Select One</option>
                <?= displayOptions(); ?> <br/>
            </select>
            <div id='question-feedback' class='answer'></div> <br/>
            <input type="submit" value="Check Answer" /><br/>
            <br/>
        </form>
        <div id="feedback">
            Times the real name of <?php $_SESSION['options']; ?> was answered correctly: <span id="correct"></span><br/>
            Times it was answered incorrectly:  <strong id="times"></strong> time(s). <br /><br />
        </div>
        <br />
        
        <!--Javascript files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/gradeQuiz.js"></script>

    </body>
</html> 