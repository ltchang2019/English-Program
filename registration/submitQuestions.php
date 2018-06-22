<?php

session_start();
$adminUsername = $_SESSION['username'];
//See original: https://www.w3schools.com/php/php_mysql_connect.asp
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "English Program";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM Administrators WHERE username = '$adminUsername'";
    $statement = $conn -> query($sql);

    foreach($statement as $row){
        $groupNumber =  $row["groupNumber"];
        break;
    }

    $numbQuestions = $_SESSION["numbQuestions"];
    $textName = $_GET["storedTextName"];
    $link = $_GET["link"];

    if($numbQuestions > 0){
    if($numbQuestions == 1){
        $question1 = $_GET["question1"];
        $sql = "INSERT INTO Questions (textName, question, groupNumber, completed) VALUES ('$textName', '$question1', $groupNumber, 'no')";
        $conn -> exec ( $sql );
        print "submitted question!";
    }
    else if($numbQuestions == 2){
        $question1 = $_GET["question1"];
        $question2 = $_GET["question2"];
        $sql1 = "INSERT INTO Questions (textName, question, groupNumber, completed) VALUES ('$textName', '$question1', $groupNumber, 'no')";
        $conn -> exec ( $sql1 );
        $sql1 = "INSERT INTO Questions (textName, question, groupNumber, completed) VALUES ('$textName', '$question2', $groupNumber, 'no')";
        $conn -> exec ( $sql1 );

        print "submitted questions!";
    }
    else if($numbQuestions == 3){
        $question1 = $_GET["question1"];
        $question2 = $_GET["question2"];
        $question3 = $_GET["question3"];

        $sql1 = "INSERT INTO Questions (textName, question, groupNumber, completed) VALUES ('$textName', '$question1', $groupNumber, 'no')";
        $conn -> exec ( $sql1 );
        $sql2 = "INSERT INTO Questions (textName, question, groupNumber, completed) VALUES ('$textName', '$question2', $groupNumber, 'no')";
        $conn -> exec ( $sql2 );
        $sql3 = "INSERT INTO Questions (textName, question, groupNumber, completed) VALUES ('$textName', '$question3', $groupNumber, 'no')";
        $conn -> exec ( $sql3 );

        print "submitted questions!";
    }
    else if($numbQuestions == 4){
        $question1 = $_GET["question1"];
        $question2 = $_GET["question2"];
        $question3 = $_GET["question3"];
        $question4 = $_GET["question4"];

        $sql1 = "INSERT INTO Questions (textName, question, groupNumber, completed) VALUES ('$textName', '$question1', $groupNumber, 'no')";
        $conn -> exec ( $sql1 );
        $sql2 = "INSERT INTO Questions (textName, question, groupNumber, completed) VALUES ('$textName', '$question2', $groupNumber, 'no')";
        $conn -> exec ( $sql2 );
        $sql3 = "INSERT INTO Questions (textName, question, groupNumber, completed) VALUES ('$textName', '$question3', $groupNumber, 'no')";
        $conn -> exec ( $sql3 );
        $sql4 = "INSERT INTO Questions (textName, question, groupNumber, completed) VALUES ('$textName', '$question4', $groupNumber, 'no')";
        $conn -> exec ( $sql4 );

        print "submitted questions!";
    }
    else if($numbQuestions == 5){
        $question1 = $_GET["question1"];
        $question2 = $_GET["question2"];
        $question3 = $_GET["question3"];
        $question4 = $_GET["question4"];
        $question5 = $_GET["question5"];

        $sql1 = "INSERT INTO Questions (textName, question, groupNumber, completed) VALUES ('$textName', '$question1', $groupNumber, 'no')";
        $conn -> exec ( $sql1 );
        $sql2 = "INSERT INTO Questions (textName, question, groupNumber, completed) VALUES ('$textName', '$question2', $groupNumber, 'no')";
        $conn -> exec ( $sql2 );
        $sql3 = "INSERT INTO Questions (textName, question, groupNumber, completed) VALUES ('$textName', '$question3', $groupNumber, 'no')";
        $conn -> exec ( $sql3 );
        $sql4 = "INSERT INTO Questions (textName, question, groupNumber, completed) VALUES ('$textName', '$question4', $groupNumber, 'no')";
        $conn -> exec ( $sql4 );
        $sql5 = "INSERT INTO Questions (textName, question, groupNumber, completed) VALUES ('$textName', '$question5', $groupNumber, 'no')";
        $conn -> exec ( $sql5 );

        print "submitted questions!";
    }
    $sql = "INSERT INTO Assignments (textName, link, groupNumber, dateAssigned, numbQuestions) VALUES ('$textName', '$link', '$groupNumber', CURDATE() ,'$numbQuestions')";
    $conn -> exec ($sql);
}

    
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
