<?php

session_start();
// $timeSinceLogin = ( time () - $_SESSION ['timer'])/60;

$servername = "db746401298.db.1and1.com";
$username = "dbo746401298";
$password = "Tr@vel000";
$dbName = "db746401298";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $difference = $_SESSION['loginTime']->diff(new DateTime(date('y-m-d h:m:s')));
    // echo $difference->format('%i minutes');
    //INSERT TIMESTAMP INTO DATABASE
    $loginTime = time();
    echo $loginTime;

}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
