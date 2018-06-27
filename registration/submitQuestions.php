<?php

session_start();
$adminUsername = $_SESSION['username'];
//See original: https://www.w3schools.com/php/php_mysql_connect.asp
$servername = "localhost";
$username = "root";
$password = '';
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

    $blankQuestion = "false";

    if($numbQuestions > 0){
    if($numbQuestions == 1){
        $question1 = $_GET["question1"];

        if($question1 == ""){
            $blankQuestion = "true";
            print "<p style='color: crimson'>Please fill in all questions...</p>";
        }
        else{
        $sql = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question1', $groupNumber, '')";
        $conn -> exec ( $sql );
        print '<p class="assignmentMessageContainer">Assignment submitted!</p>';
    }
    }
    else if($numbQuestions == 2){
        $question1 = $_GET["question1"];
        $question2 = $_GET["question2"];

        if($question1 == "" || $question2 == ""){
            $blankQuestion = "true";
            print "<p style='color: crimson'>Please fill in all questions...</p>";
        }
        else{
        $sql1 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question1', $groupNumber, '')";
        $conn -> exec ( $sql1 );
        $sql1 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question2', $groupNumber, '')";
        $conn -> exec ( $sql1 );

        print '<p class="assignmentMessageContainer">Assignment submitted!</p>';
    }
    }
    else if($numbQuestions == 3){
        $question1 = $_GET["question1"];
        $question2 = $_GET["question2"];
        $question3 = $_GET["question3"];

        if($question1 == "" || $question2 == "" || $question3 == ""){
            $blankQuestion = "true";
            print "<p style='color: crimson'>Please fill in all questions...</p>";
        }
        else{
        $sql1 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question1', $groupNumber, '')";
        $conn -> exec ( $sql1 );
        $sql2 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question2', $groupNumber, '')";
        $conn -> exec ( $sql2 );
        $sql3 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question3', $groupNumber, '')";
        $conn -> exec ( $sql3 );

        print '<p class="assignmentMessageContainer">Assignment submitted!</p>';
    }
    }
    else if($numbQuestions == 4){
        $question1 = $_GET["question1"];
        $question2 = $_GET["question2"];
        $question3 = $_GET["question3"];
        $question4 = $_GET["question4"];

        if($question1 == "" || $question2 == "" || $question3 == "" || $question4 == ""){
            $blankQuestion = "true";
            print "<p style='color: crimson'>Please fill in all questions...</p>";
        }
        else{
        $sql1 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question1', $groupNumber, '')";
        $conn -> exec ( $sql1 );
        $sql2 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question2', $groupNumber, '')";
        $conn -> exec ( $sql2 );
        $sql3 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question3', $groupNumber, '')";
        $conn -> exec ( $sql3 );
        $sql4 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question4', $groupNumber, '')";
        $conn -> exec ( $sql4 );

        print '<p class="assignmentMessageContainer">Assignment submitted!</p>';
    }
    }
    else if($numbQuestions == 5){
        $question1 = $_GET["question1"];
        $question2 = $_GET["question2"];
        $question3 = $_GET["question3"];
        $question4 = $_GET["question4"];
        $question5 = $_GET["question5"];

        if($question1 == "" || $question2 == "" || $question3 == "" || $question4 == "" || $question5 == ""){
            $blankQuestion = "true";
            print "<p style='color: crimson'>Please fill in all questions...</p>";
        }
        else{
        $sql1 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question1', $groupNumber, '')";
        $conn -> exec ( $sql1 );
        $sql2 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question2', $groupNumber, '')";
        $conn -> exec ( $sql2 );
        $sql3 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question3', $groupNumber, '')";
        $conn -> exec ( $sql3 );
        $sql4 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question4', $groupNumber, '')";
        $conn -> exec ( $sql4 );
        $sql5 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question5', $groupNumber, '')";
        $conn -> exec ( $sql5 );

        print '<p class="assignmentMessageContainer">Assignment submitted!</p>';
    }
    }
    if($blankQuestion=="false"){
    $sql = "INSERT INTO Assignments (textName, link, groupNumber, dateAssigned, numbQuestions) VALUES ('$textName', '$link', '$groupNumber', CURDATE() ,'$numbQuestions')";
    $conn -> exec ($sql);
    }
}

}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
