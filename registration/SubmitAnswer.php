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

    $numbAnswers = $_GET["numberOfAnswers"];

    $sql = "SELECT * FROM Users WHERE username = '$user'";
    $statement = $conn -> query($sql);

    foreach($statement as $row){
        $groupNumber = $row["groupNumber"];
        $firstName = $row["firstName"];
        break;
    }

    if($numbAnswers == 3+1){
        $answer1 = $_GET["answer1"];
        $answerID1 =$_GET["answerID1"];

        $answer2 = $_GET["answer2"];
        $answerID2 = $_GET["answerID2"];

        $answer3 = $_GET["answer3"];
        $answerID3 = $_GET["answerID3"];

        $sql1 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID1', '$answer1', CURDATE(), '$groupNumber','$firstName')";
        $conn -> exec ( $sql1 );

        $sql2 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID2', '$answer2', CURDATE(), '$groupNumber','$firstName')";
        $conn -> exec ( $sql2 );

        $sql1 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID3', '$answer3', CURDATE(), '$groupNumber', '$firstName')";
        $conn -> exec ( $sql1 );
    }

    print "Answers submitted!";
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
