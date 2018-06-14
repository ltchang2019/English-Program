<?php
session_start();
$username1 = $_SESSION['username'];

//See original: https://www.w3schools.com/php/php_mysql_connect.asp
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "Math Program";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $studAns = $_GET["studAns"];
    $problemNumber = $_GET["problemNumber"];

    $sql = "SELECT * FROM Problems WHERE problemID = $problemNumber";
    $TheProblem = $conn -> query($sql);

    foreach($TheProblem as $row){
        $problem = $row['problem'];
        $groupNumber = $row['groupNumber'];
    }


    $sql = "SELECT answer FROM Problems WHERE problemID = $problemNumber";
    $statement = $conn -> query($sql);

    foreach($statement as $row){
    	$answer = $row["answer"];
        break;
    }

    if($studAns == $answer){
        $validity = "correct";
        print "CORRECT!";
    }
    else{
        $validity = "incorrect";
        print "Incorrect, please try again!";
    }
    
    
    $sql1 = "INSERT INTO Answers (problemID, username, studentAnswer, answer, validity, problem, groupNumber)VALUES($problemNumber, '$username1', '$studAns', '$answer', '$validity', '$problem', $groupNumber)";
    $conn -> exec( $sql1 );
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
