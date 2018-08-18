<?php

session_start();
$adminUsername = $_SESSION['username'];
//See original: https://www.w3schools.com/php/php_mysql_connect.asp
$servername = "db746401298.db.1and1.com";
$username = "dbo746401298";
$password = "Tr@vel000";
$dbName = "db746401298";

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
    $readingLevel = $_GET["readingLevel"];

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
        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
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

        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
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

        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
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

        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
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

        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
    }
    }
    else if($numbQuestions == 6){
        $question1 = $_GET["question1"];
        $question2 = $_GET["question2"];
        $question3 = $_GET["question3"];
        $question4 = $_GET["question4"];
        $question5 = $_GET["question5"];
        $question6 = $_GET["question6"];

        if($question1 == "" || $question2 == "" || $question3 == "" || $question4 == "" || $question5 == "" || $question6 == ""){
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
        $sql6 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question6', $groupNumber, '')";
        $conn -> exec ( $sql6 );

        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
    }
    }
    else if($numbQuestions == 7){
        $question1 = $_GET["question1"];
        $question2 = $_GET["question2"];
        $question3 = $_GET["question3"];
        $question4 = $_GET["question4"];
        $question5 = $_GET["question5"];
        $question6 = $_GET["question6"];
        $question7 = $_GET["question7"];

        if($question1 == "" || $question2 == "" || $question3 == "" || $question4 == "" || $question5 == "" || $question6 == "" || $question7 == ""){
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
        $sql6 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question6', $groupNumber, '')";
        $conn -> exec ( $sql6 );
        $sql7 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question7', $groupNumber, '')";
        $conn -> exec ( $sql7 );

        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
    }
    }
    else if($numbQuestions == 8){
        $question1 = $_GET["question1"];
        $question2 = $_GET["question2"];
        $question3 = $_GET["question3"];
        $question4 = $_GET["question4"];
        $question5 = $_GET["question5"];
        $question6 = $_GET["question6"];
        $question7 = $_GET["question7"];
        $question8 = $_GET["question8"];

        if($question1 == "" || $question2 == "" || $question3 == "" || $question4 == "" || $question5 == "" || $question6 == "" || $question7 == "" || $question8 == ""){
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
        $sql6 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question6', $groupNumber, '')";
        $conn -> exec ( $sql6 );
        $sql7 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question7', $groupNumber, '')";
        $conn -> exec ( $sql7 );
        $sql8 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question8', $groupNumber, '')";
        $conn -> exec ( $sql8 );

        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
    }
    }
    else if($numbQuestions == 9){
        $question1 = $_GET["question1"];
        $question2 = $_GET["question2"];
        $question3 = $_GET["question3"];
        $question4 = $_GET["question4"];
        $question5 = $_GET["question5"];
        $question6 = $_GET["question6"];
        $question7 = $_GET["question7"];
        $question8 = $_GET["question8"];
        $question9 = $_GET["question9"];

        if($question1 == "" || $question2 == "" || $question3 == "" || $question4 == "" || $question5 == "" || $question6 == "" || $question7 == "" || $question8 == "" || $question9 == ""){
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
        $sql6 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question6', $groupNumber, '')";
        $conn -> exec ( $sql6 );
        $sql7 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question7', $groupNumber, '')";
        $conn -> exec ( $sql7 );
        $sql8 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question8', $groupNumber, '')";
        $conn -> exec ( $sql8 );
        $sql9 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question9', $groupNumber, '')";
        $conn -> exec ( $sql9 );

        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
    }
    }
    else if($numbQuestions == 10){
        $question1 = $_GET["question1"];
        $question2 = $_GET["question2"];
        $question3 = $_GET["question3"];
        $question4 = $_GET["question4"];
        $question5 = $_GET["question5"];
        $question6 = $_GET["question6"];
        $question7 = $_GET["question7"];
        $question8 = $_GET["question8"];
        $question9 = $_GET["question9"];
        $question10 = $_GET["question10"];

        if($question1 == "" || $question2 == "" || $question3 == "" || $question4 == "" || $question5 == "" || $question6 == "" || $question7 == "" || $question8 == "" || $question9 == ""){
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
        $sql6 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question6', $groupNumber, '')";
        $conn -> exec ( $sql6 );
        $sql7 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question7', $groupNumber, '')";
        $conn -> exec ( $sql7 );
        $sql8 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question8', $groupNumber, '')";
        $conn -> exec ( $sql8 );
        $sql9 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question9', $groupNumber, '')";
        $conn -> exec ( $sql9 );
        $sql10 = "INSERT INTO Questions (textName, question, groupNumber, completedBy) VALUES ('$textName', '$question10', $groupNumber, '')";
        $conn -> exec ( $sql10 );

        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
    }
    }

    if($blankQuestion=="false"){
    $sql = "INSERT INTO Assignments (readingLevel, textName, groupNumber, dateAssigned, numbQuestions) VALUES ('$readingLevel', '$textName', '$groupNumber', CURDATE() ,'$numbQuestions')";
    $conn -> exec ($sql);
    }
}

}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
