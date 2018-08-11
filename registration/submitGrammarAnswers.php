<?php

session_start();
$assignmentID = $_SESSION["assignmentID"];
$firstName = $_SESSION["firstName"];
//See original: https://www.w3schools.com/php/php_mysql_connect.asp
$servername = "db746401298.db.1and1.com";
$username = "dbo746401298";
$password = "Tr@vel000";
$dbName = "db746401298";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM GrammarQuestions WHERE assignmentID = '$assignmentID'";
    $statement = $conn -> query($sql);

    foreach($statement as $row){
        $numbQuestions = $row["numbQuestions"];
    }

    $sql = "SELECT * FROM Users WHERE firstName = '$firstName'";
    $statement = $conn -> query($sql);

    foreach($statement as $row){
        $groupNumber = $row["groupNumber"];
        break;
    }

    $answer1 = $_GET["grammarSlot1"];
    $answer2 = $_GET["grammarSlot2"];
    $answer3 = $_GET["grammarSlot3"];
    $answer4 = $_GET["grammarSlot4"];
    $answer5 = $_GET["grammarSlot5"];
    $answer6 = $_GET["grammarSlot6"];

    if($numbQuestions == 5){
        $answer1 = $_GET["grammarSlot1"];
        $answer2 = $_GET["grammarSlot2"];
        $answer3 = $_GET["grammarSlot3"];
        $answer4 = $_GET["grammarSlot4"];
        $answer5 = $_GET["grammarSlot5"];

        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$answer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$answer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$answer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$answer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$answer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
    }
    else if($numbQuestions == 6){
        $answer1 = $_GET["grammarSlot1"];
        $answer2 = $_GET["grammarSlot2"];
        $answer3 = $_GET["grammarSlot3"];
        $answer4 = $_GET["grammarSlot4"];
        $answer5 = $_GET["grammarSlot5"];
        $answer6 = $_GET["grammarSlot6"];

        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$answer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$answer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$answer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$answer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$answer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$answer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
    }
    else if($numbQuestions == 7){
        $answer1 = $_GET["grammarSlot1"];
        $answer2 = $_GET["grammarSlot2"];
        $answer3 = $_GET["grammarSlot3"];
        $answer4 = $_GET["grammarSlot4"];
        $answer5 = $_GET["grammarSlot5"];
        $answer6 = $_GET["grammarSlot6"];
        $answer7 = $_GET["grammarSlot7"];

        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$answer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$answer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$answer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$answer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$answer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$answer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$answer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
    }
    else if($numbQuestions == 8){
        $answer1 = $_GET["grammarSlot1"];
        $answer2 = $_GET["grammarSlot2"];
        $answer3 = $_GET["grammarSlot3"];
        $answer4 = $_GET["grammarSlot4"];
        $answer5 = $_GET["grammarSlot5"];
        $answer6 = $_GET["grammarSlot6"];
        $answer7 = $_GET["grammarSlot7"];
        $answer8 = $_GET["grammarSlot8"];

        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$answer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$answer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$answer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$answer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$answer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$answer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$answer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 8, '$answer8', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
    }
    else if($numbQuestions == 9){
        $answer1 = $_GET["grammarSlot1"];
        $answer2 = $_GET["grammarSlot2"];
        $answer3 = $_GET["grammarSlot3"];
        $answer4 = $_GET["grammarSlot4"];
        $answer5 = $_GET["grammarSlot5"];
        $answer6 = $_GET["grammarSlot6"];
        $answer7 = $_GET["grammarSlot7"];
        $answer8 = $_GET["grammarSlot8"];
        $answer9 = $_GET["grammarSlot9"];

        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$answer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$answer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$answer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$answer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$answer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$answer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$answer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 8, '$answer8', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 9, '$answer9', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
    }
    else if($numbQuestions == 10){
        $answer1 = $_GET["grammarSlot1"];
        $answer2 = $_GET["grammarSlot2"];
        $answer3 = $_GET["grammarSlot3"];
        $answer4 = $_GET["grammarSlot4"];
        $answer5 = $_GET["grammarSlot5"];
        $answer6 = $_GET["grammarSlot6"];
        $answer7 = $_GET["grammarSlot7"];
        $answer8 = $_GET["grammarSlot8"];
        $answer9 = $_GET["grammarSlot9"];
        $answer10 = $_GET["grammarSlot10"];

        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$answer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$answer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$answer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$answer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$answer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$answer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$answer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 8, '$answer8', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 9, '$answer9', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 10, '$answer10', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
    }
    else if($numbQuestions == 11){
        $answer1 = $_GET["grammarSlot1"];
        $answer2 = $_GET["grammarSlot2"];
        $answer3 = $_GET["grammarSlot3"];
        $answer4 = $_GET["grammarSlot4"];
        $answer5 = $_GET["grammarSlot5"];
        $answer6 = $_GET["grammarSlot6"];
        $answer7 = $_GET["grammarSlot7"];
        $answer8 = $_GET["grammarSlot8"];
        $answer9 = $_GET["grammarSlot9"];
        $answer10 = $_GET["grammarSlot10"];
        $answer11 = $_GET["grammarSlot11"];

        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$answer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$answer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$answer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$answer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$answer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$answer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$answer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 8, '$answer8', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 9, '$answer9', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 10, '$answer10', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 11, '$answer11', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
    }
    else if($numbQuestions == 12){
        $answer1 = $_GET["grammarSlot1"];
        $answer2 = $_GET["grammarSlot2"];
        $answer3 = $_GET["grammarSlot3"];
        $answer4 = $_GET["grammarSlot4"];
        $answer5 = $_GET["grammarSlot5"];
        $answer6 = $_GET["grammarSlot6"];
        $answer7 = $_GET["grammarSlot7"];
        $answer8 = $_GET["grammarSlot8"];
        $answer9 = $_GET["grammarSlot9"];
        $answer10 = $_GET["grammarSlot10"];
        $answer11 = $_GET["grammarSlot11"];
        $answer12 = $_GET["grammarSlot12"];

        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$answer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$answer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$answer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$answer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$answer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$answer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$answer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 8, '$answer8', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 9, '$answer9', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 10, '$answer10', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 11, '$answer11', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 12, '$answer12', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
    }
    else if($numbQuestions == 13){
        $answer1 = $_GET["grammarSlot1"];
        $answer2 = $_GET["grammarSlot2"];
        $answer3 = $_GET["grammarSlot3"];
        $answer4 = $_GET["grammarSlot4"];
        $answer5 = $_GET["grammarSlot5"];
        $answer6 = $_GET["grammarSlot6"];
        $answer7 = $_GET["grammarSlot7"];
        $answer8 = $_GET["grammarSlot8"];
        $answer9 = $_GET["grammarSlot9"];
        $answer10 = $_GET["grammarSlot10"];
        $answer11 = $_GET["grammarSlot11"];
        $answer12 = $_GET["grammarSlot12"];
        $answer13 = $_GET["grammarSlot13"];

        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$answer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$answer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$answer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$answer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$answer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$answer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$answer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 8, '$answer8', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 9, '$answer9', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 10, '$answer10', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 11, '$answer11', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 12, '$answer12', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 13, '$answer13', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
    }
    else if($numbQuestions == 14){
        $answer1 = $_GET["grammarSlot1"];
        $answer2 = $_GET["grammarSlot2"];
        $answer3 = $_GET["grammarSlot3"];
        $answer4 = $_GET["grammarSlot4"];
        $answer5 = $_GET["grammarSlot5"];
        $answer6 = $_GET["grammarSlot6"];
        $answer7 = $_GET["grammarSlot7"];
        $answer8 = $_GET["grammarSlot8"];
        $answer9 = $_GET["grammarSlot9"];
        $answer10 = $_GET["grammarSlot10"];
        $answer11 = $_GET["grammarSlot11"];
        $answer12 = $_GET["grammarSlot12"];
        $answer13 = $_GET["grammarSlot13"];
        $answer14 = $_GET["grammarSlot14"];

        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$answer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$answer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$answer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$answer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$answer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$answer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$answer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 8, '$answer8', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 9, '$answer9', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 10, '$answer10', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 11, '$answer11', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 12, '$answer12', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 13, '$answer13', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 14, '$answer14', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
    }
    else if($numbQuestions == 15){
        $answer1 = $_GET["grammarSlot1"];
        $answer2 = $_GET["grammarSlot2"];
        $answer3 = $_GET["grammarSlot3"];
        $answer4 = $_GET["grammarSlot4"];
        $answer5 = $_GET["grammarSlot5"];
        $answer6 = $_GET["grammarSlot6"];
        $answer7 = $_GET["grammarSlot7"];
        $answer8 = $_GET["grammarSlot8"];
        $answer9 = $_GET["grammarSlot9"];
        $answer10 = $_GET["grammarSlot10"];
        $answer11 = $_GET["grammarSlot11"];
        $answer12 = $_GET["grammarSlot12"];
        $answer13 = $_GET["grammarSlot13"];
        $answer14 = $_GET["grammarSlot14"];
        $answer15 = $_GET["grammarSlot15"];

        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$answer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$answer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$answer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$answer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$answer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$answer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$answer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 8, '$answer8', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 9, '$answer9', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 10, '$answer10', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 11, '$answer11', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 12, '$answer12', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 13, '$answer13', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 14, '$answer14', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 15, '$answer15', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
    }
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
