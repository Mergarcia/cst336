<?php
function getDatabaseConnection($dbname = 'heroku_8ed61068ca05413') {
    
    $host = 'us-cdbr-iron-east-01.cleardb.net'; //cloud9
    //$dbname = 'tcp';
    $username = 'ba015ab516ccf5';
    $password = 'b2c23509';


    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // display error when accessing tables
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $dbConn;
    
}

// creates db connection
    if  (strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $host = $url["host"];
        $dbname = substr($url["path"], 1);
        $username = $url["user"];
        $password = $url["pass"];
    } 