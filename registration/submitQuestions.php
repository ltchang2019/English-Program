<?php

session_start();
$user = $_SESSION['username'];
//See original: https://www.w3schools.com/php/php_mysql_connect.asp
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "English Program";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $numbQuestions = $_GET["numbQuestions"];

    if($numbQuestions == 1){
        $question1 = $_GET["question1"];
        $sql = "INSERT INTO Questions (textName, question, groupNumber, completed) VALUES ('Three Little Pigs', $question1, 0, 'no')";
        $conn -> exec ( $sql );
        print "submitted question!";
    }



}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
