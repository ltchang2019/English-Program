<?php

session_start();
$user = $_SESSION['username'];
$completedStatus = $_SESSION["questionsCompleted"];
//See original: https://www.w3schools.com/php/php_mysql_connect.asp
$servername = "db746401298.db.1and1.com";
$username = "dbo746401298";
$password = "Tr@vel000";
$dbName = "db746401298";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
    
        print "<iframe src=" . $link . '" style="width:100%; height:98vh"></iframe>';

}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
