<?php

session_start();
$user = $_SESSION['username'];
$textName = $_SESSION["textName"];
//See original: https://www.w3schools.com/php/php_mysql_connect.asp
$servername = "db746401298.db.1and1.com";
$username = "dbo746401298";
$password = "Tr@vel000";
$dbName = "db746401298";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $gradeLevel = $_GET["gradeLevel"];
    $_SESSION["gradeLevel"] = $gradeLevel;
    $numbSections = $_GET["numbSections"];
    $_SESSION["numbSections"] = $numbSections;

    $sql = "INSERT INTO GrammarAssignments (gradeLevel, numbSections, dateAssigned) VALUES ('$gradeLevel', '$numbSections', CURDATE())";
    $conn -> exec ( $sql1 );
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
