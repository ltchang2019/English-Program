<?php

session_start();
$timeSinceLogin = ( time () - $_SESSION ['timer'])/60;

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "English Program";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $difference = $_SESSION['loginTime']->diff(new DateTime(date('y-m-d h:m:s')));
    // echo $difference->format('%i minutes');
    //INSERT TIMESTAMP INTO DATABASE
    echo $timeSinceLogin;

}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
