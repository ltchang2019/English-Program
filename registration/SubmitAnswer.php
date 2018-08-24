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

    $missing = $_GET["missing"];
    if($missing == "true"){
        print "<p style='color: crimson'> Please answer all questions...</p>";
    }
    else{
    $numbAnswers = $_GET["numberOfAnswers"];

    $sql = "SELECT * FROM Users WHERE username = '$user'";
    $statement = $conn -> query($sql);

    foreach($statement as $row){
        $groupNumber = $row["groupNumber"];
        $firstName = $row["firstName"];
        break;
    }
    if($numbAnswers == 1+1){
        $answer1 = $_GET["answer1"];
        $answerID1 = $_GET["answerID1"];

        $subAnswer1 = addslashes($answer1);

        $sql1 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID1', '$subAnswer1', CURDATE(), '$groupNumber','$firstName')";
        $conn -> exec ( $sql1 );

        $sql = "UPDATE Questions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE questionID = '$answerID1'";
        $conn -> exec ( $sql );
        $sql = "UPDATE Assignments SET completedBy = CONCAT(completedBy, '$firstName ') WHERE textName = '$textName' AND groupNumber = '$groupNumber'";
        $conn -> exec ( $sql );
    }
    else if($numbAnswers == 2+1){
        $answer1 = $_GET["answer1"];
        $answerID1 =$_GET["answerID1"];

        $answer2 = $_GET["answer2"];
        $answerID2 = $_GET["answerID2"];

        $subAnswer1 = addslashes($answer1);
        $subAnswer2 = addslashes($answer2);

        $sql1 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID1', '$subAnswer1', CURDATE(), '$groupNumber','$firstName')";
        $conn -> exec ( $sql1 );
        $sql2 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID2', '$subAnswer2', CURDATE(), '$groupNumber','$firstName')";
        $conn -> exec ( $sql2 );

        $sql = "UPDATE Questions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE questionID = '$answerID1'";
        $conn -> exec ( $sql );
        $sql = "UPDATE Questions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE questionID = '$answerID2'";
        $conn -> exec ( $sql );

        $sql = "UPDATE Assignments SET completedBy = CONCAT(completedBy, '$firstName ') WHERE textName = '$textName' AND groupNumber = '$groupNumber'";
        $conn -> exec ( $sql );
    }
    else if($numbAnswers == 3+1){
        $answer1 = $_GET["answer1"];
        $answerID1 =$_GET["answerID1"];

        $answer2 = $_GET["answer2"];
        $answerID2 = $_GET["answerID2"];

        $answer3 = $_GET["answer3"];
        $answerID3 = $_GET["answerID3"];

        $subAnswer1 = addslashes($answer1);
        $subAnswer2 = addslashes($answer2);
        $subAnswer3 = addslashes($answer3);

        $sql1 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID1', '$subAnswer1', CURDATE(), '$groupNumber','$firstName')";
        $conn -> exec ( $sql1 );
        $sql2 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID2', '$subAnswer2', CURDATE(), '$groupNumber','$firstName')";
        $conn -> exec ( $sql2 );
        $sql3 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID3', '$subAnswer3', CURDATE(), '$groupNumber', '$firstName')";
        $conn -> exec ( $sql3 );

        $sql = "UPDATE Questions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE questionID = '$answerID1'";
        $conn -> exec ( $sql );
        $sql = "UPDATE Questions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE questionID = '$answerID2'";
        $conn -> exec ( $sql );
        $sql = "UPDATE Questions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE questionID = '$answerID3'";
        $conn -> exec ( $sql );

        $sql = "UPDATE Assignments SET completedBy = CONCAT(completedBy, '$firstName ') WHERE textName = '$textName' AND groupNumber = '$groupNumber'";
        $conn -> exec ( $sql );
    }
    else if($numbAnswers == 4+1){
        $answer1 = $_GET["answer1"];
        $answerID1 =$_GET["answerID1"];

        $answer2 = $_GET["answer2"];
        $answerID2 = $_GET["answerID2"];

        $answer3 = $_GET["answer3"];
        $answerID3 = $_GET["answerID3"];

        $answer4 = $_GET["answer4"];
        $answerID4 = $_GET["answerID4"];

        $subAnswer1 = addslashes($answer1);
        $subAnswer2 = addslashes($answer2);
        $subAnswer3 = addslashes($answer3);
        $subAnswer4 = addslashes($answer4);

        $sql1 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID1', '$subAnswer1', CURDATE(), '$groupNumber','$firstName')";
        $conn -> exec ( $sql1 );
        $sql2 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID2', '$subAnswer2', CURDATE(), '$groupNumber','$firstName')";
        $conn -> exec ( $sql2 );
        $sql3 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID3', '$subAnswer3', CURDATE(), '$groupNumber', '$firstName')";
        $conn -> exec ( $sql3 );
        $sql4 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID4', '$subAnswer4', CURDATE(), '$groupNumber', '$firstName')";
        $conn -> exec ( $sql4 );

        $sql = "UPDATE Questions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE questionID = '$answerID1'";
        $conn -> exec ( $sql );
        $sql = "UPDATE Questions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE questionID = '$answerID2'";
        $conn -> exec ( $sql );
        $sql = "UPDATE Questions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE questionID = '$answerID3'";
        $conn -> exec ( $sql );
        $sql = "UPDATE Questions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE questionID = '$answerID4'";
        $conn -> exec ( $sql );

        $sql = "UPDATE Assignments SET completedBy = CONCAT(completedBy, '$firstName ') WHERE textName = '$textName' AND groupNumber = '$groupNumber'";
        $conn -> exec ( $sql );
    }
    else if($numbAnswers == 5+1){
        $answer1 = $_GET["answer1"];
        $answerID1 =$_GET["answerID1"];
        $answer2 = $_GET["answer2"];
        $answerID2 = $_GET["answerID2"];
        $answer3 = $_GET["answer3"];
        $answerID3 = $_GET["answerID3"];
        $answer4 = $_GET["answer4"];
        $answerID4 = $_GET["answerID4"];
        $answer5 = $_GET["answer5"];
        $answerID5 = $_GET["answerID5"];

        $subAnswer1 = addslashes($answer1);
        $subAnswer2 = addslashes($answer2);
        $subAnswer3 = addslashes($answer3);
        $subAnswer4 = addslashes($answer4);
        $subAnswer5 = addslashes($answer5);


        $sql1 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID1', '$subAnswer1', CURDATE(), '$groupNumber','$firstName')";
        $conn -> exec ( $sql1 );
        $sql2 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID2', '$subAnswer2', CURDATE(), '$groupNumber','$firstName')";
        $conn -> exec ( $sql2 );
        $sql3 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID3', '$subAnswer3', CURDATE(), '$groupNumber', '$firstName')";
        $conn -> exec ( $sql3 );
        $sql4 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID4', '$subAnswer4', CURDATE(), '$groupNumber', '$firstName')";
        $conn -> exec ( $sql4 );
        $sql5 = "INSERT INTO Answers (questionID, answer, dateAnswered, groupNumber, firstName)VALUES('$answerID5', '$subAnswer5', CURDATE(), '$groupNumber', '$firstName')";
        $conn -> exec ( $sql5);

        $sql = "UPDATE Questions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE questionID = '$answerID1'";
        $conn -> exec ( $sql );
        $sql = "UPDATE Questions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE questionID = '$answerID2'";
        $conn -> exec ( $sql );
        $sql = "UPDATE Questions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE questionID = '$answerID3'";
        $conn -> exec ( $sql );
        $sql = "UPDATE Questions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE questionID = '$answerID4'";
        $conn -> exec ( $sql );
        $sql = "UPDATE Questions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE questionID = '$answerID5'";
        $conn -> exec ( $sql );

        $sql = "UPDATE Assignments SET completedBy = CONCAT(completedBy, '$firstName ') WHERE textName = '$textName' AND groupNumber = '$groupNumber'";
        $conn -> exec ( $sql );
    }
    print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
}
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
