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

    if($numbQuestions == 5){
        $answer1 = $_GET["grammarSlot1"];
        $answer2 = $_GET["grammarSlot2"];
        $answer3 = $_GET["grammarSlot3"];
        $answer4 = $_GET["grammarSlot4"];
        $answer5 = $_GET["grammarSlot5"];

        $subAnswer1 = addslashes($answer1);
        $subAnswer2 = addslashes($answer2);
        $subAnswer3 = addslashes($answer3);
        $subAnswer4 = addslashes($answer4);
        $subAnswer5 = addslashes($answer5);

        if($subAnswer1=="" || $subAnswer2=="" || $subAnswer3=="" || $subAnswer4=="" || $subAnswer5==""){
            print "<p style='color: crimson'> Please answer all questions...</p>";
        }
        else{
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$subAnswer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$subAnswer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$subAnswer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$subAnswer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$subAnswer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );

        $sql = "UPDATE GrammarQuestions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE assignmentID = '$assignmentID'";
        $conn -> exec ( $sql );
        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
    }
    }
    else if($numbQuestions == 6){
        $answer1 = $_GET["grammarSlot1"];
        $answer2 = $_GET["grammarSlot2"];
        $answer3 = $_GET["grammarSlot3"];
        $answer4 = $_GET["grammarSlot4"];
        $answer5 = $_GET["grammarSlot5"];
        $answer6 = $_GET["grammarSlot6"];

        $subAnswer1 = addslashes($answer1);
        $subAnswer2 = addslashes($answer2);
        $subAnswer3 = addslashes($answer3);
        $subAnswer4 = addslashes($answer4);
        $subAnswer5 = addslashes($answer5);
        $subAnswer6 = addslashes($answer6);

        if($subAnswer1=="" || $subAnswer2=="" || $subAnswer3=="" || $subAnswer4=="" || $subAnswer5=="" || $subAnswer6==""){
            print "<p style='color: crimson'> Please answer all questions...</p>";
        }
        else{
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$subAnswer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$subAnswer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$subAnswer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$subAnswer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$subAnswer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$subAnswer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );

        $sql = "UPDATE GrammarQuestions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE assignmentID = '$assignmentID'";
        $conn -> exec ( $sql );
        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
    }
    }
    else if($numbQuestions == 7){
        $answer1 = $_GET["grammarSlot1"];
        $answer2 = $_GET["grammarSlot2"];
        $answer3 = $_GET["grammarSlot3"];
        $answer4 = $_GET["grammarSlot4"];
        $answer5 = $_GET["grammarSlot5"];
        $answer6 = $_GET["grammarSlot6"];
        $answer7 = $_GET["grammarSlot7"];

        $subAnswer1 = addslashes($answer1);
        $subAnswer2 = addslashes($answer2);
        $subAnswer3 = addslashes($answer3);
        $subAnswer4 = addslashes($answer4);
        $subAnswer5 = addslashes($answer5);
        $subAnswer6 = addslashes($answer6);
        $subAnswer7 = addslashes($answer7);

        if($subAnswer1=="" || $subAnswer2=="" || $subAnswer3=="" || $subAnswer4=="" || $subAnswer5=="" || $subAnswer6=="" || $subAnswer7==""){
            print "<p style='color: crimson'> Please answer all questions...</p>";
        }
        else{
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$subAnswer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$subAnswer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$subAnswer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$subAnswer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$subAnswer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$subAnswer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$subAnswer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );

        $sql = "UPDATE GrammarQuestions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE assignmentID = '$assignmentID'";
        $conn -> exec ( $sql );
        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
    }
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

        $subAnswer1 = addslashes($answer1);
        $subAnswer2 = addslashes($answer2);
        $subAnswer3 = addslashes($answer3);
        $subAnswer4 = addslashes($answer4);
        $subAnswer5 = addslashes($answer5);
        $subAnswer6 = addslashes($answer6);
        $subAnswer7 = addslashes($answer7);
        $subAnswer8 = addslashes($answer8);

        if($subAnswer1=="" || $subAnswer2=="" || $subAnswer3=="" || $subAnswer4=="" || $subAnswer5=="" || $subAnswer6=="" || $subAnswer7=="" || $subAnswer8==""){
            print "<p style='color: crimson'> Please answer all questions...</p>";
        }
        else{
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$subAnswer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$subAnswer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$subAnswer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$subAnswer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$subAnswer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$subAnswer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$subAnswer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 8, '$subAnswer8', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );

        $sql = "UPDATE GrammarQuestions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE assignmentID = '$assignmentID'";
        $conn -> exec ( $sql );
        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
    }
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

        $subAnswer1 = addslashes($answer1);
        $subAnswer2 = addslashes($answer2);
        $subAnswer3 = addslashes($answer3);
        $subAnswer4 = addslashes($answer4);
        $subAnswer5 = addslashes($answer5);
        $subAnswer6 = addslashes($answer6);
        $subAnswer7 = addslashes($answer7);
        $subAnswer8 = addslashes($answer8);
        $subAnswer9 = addslashes($answer9);

        if($subAnswer1=="" || $subAnswer2=="" || $subAnswer3=="" || $subAnswer4=="" || $subAnswer5=="" || $subAnswer6=="" || $subAnswer7=="" || $subAnswer8=="" || $subAnswer9==""){
            print "<p style='color: crimson'> Please answer all questions...</p>";
        }
        else{
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$subAnswer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$subAnswer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$subAnswer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$subAnswer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$subAnswer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$subAnswer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$subAnswer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 8, '$subAnswer8', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 9, '$subAnswer9', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );

        $sql = "UPDATE GrammarQuestions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE assignmentID = '$assignmentID'";
        $conn -> exec ( $sql );
        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
    }
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

        $subAnswer1 = addslashes($answer1);
        $subAnswer2 = addslashes($answer2);
        $subAnswer3 = addslashes($answer3);
        $subAnswer4 = addslashes($answer4);
        $subAnswer5 = addslashes($answer5);
        $subAnswer6 = addslashes($answer6);
        $subAnswer7 = addslashes($answer7);
        $subAnswer8 = addslashes($answer8);
        $subAnswer9 = addslashes($answer9);
        $subAnswer10 = addslashes($answer10);

        if($subAnswer1=="" || $subAnswer2=="" || $subAnswer3=="" || $subAnswer4=="" || $subAnswer5=="" || $subAnswer6=="" || $subAnswer7=="" || $subAnswer8=="" || $subAnswer9=="" || $subAnswer10==""){
            print "<p style='color: crimson'> Please answer all questions...</p>";
        }
        else{
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$subAnswer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$subAnswer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$subAnswer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$subAnswer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$subAnswer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$subAnswer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$subAnswer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 8, '$subAnswer8', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 9, '$subAnswer9', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 10, '$subAnswer10', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );

        $sql = "UPDATE GrammarQuestions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE assignmentID = '$assignmentID'";
        $conn -> exec ( $sql );
        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
    }
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

        $subAnswer1 = addslashes($answer1);
        $subAnswer2 = addslashes($answer2);
        $subAnswer3 = addslashes($answer3);
        $subAnswer4 = addslashes($answer4);
        $subAnswer5 = addslashes($answer5);
        $subAnswer6 = addslashes($answer6);
        $subAnswer7 = addslashes($answer7);
        $subAnswer8 = addslashes($answer8);
        $subAnswer9 = addslashes($answer9);
        $subAnswer10 = addslashes($answer10);
        $subAnswer11 = addslashes($answer11);

        if($subAnswer1=="" || $subAnswer2=="" || $subAnswer3=="" || $subAnswer4=="" || $subAnswer5=="" || $subAnswer6=="" || $subAnswer7=="" || $subAnswer8=="" || $subAnswer9=="" || $subAnswer10=="" || $subAnswer11==""){
            print "<p style='color: crimson'> Please answer all questions...</p>";
        }
        else{
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$subAnswer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$subAnswer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$subAnswer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$subAnswer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$subAnswer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$subAnswer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$subAnswer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 8, '$subAnswer8', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 9, '$subAnswer9', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 10, '$subAnswer10', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 11, '$subAnswer11', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );

        $sql = "UPDATE GrammarQuestions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE assignmentID = '$assignmentID'";
        $conn -> exec ( $sql );
        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
    }
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

        $subAnswer1 = addslashes($answer1);
        $subAnswer2 = addslashes($answer2);
        $subAnswer3 = addslashes($answer3);
        $subAnswer4 = addslashes($answer4);
        $subAnswer5 = addslashes($answer5);
        $subAnswer6 = addslashes($answer6);
        $subAnswer7 = addslashes($answer7);
        $subAnswer8 = addslashes($answer8);
        $subAnswer9 = addslashes($answer9);
        $subAnswer10 = addslashes($answer10);
        $subAnswer11 = addslashes($answer11);
        $subAnswer12 = addslashes($answer12);

        if($subAnswer1=="" || $subAnswer2=="" || $subAnswer3=="" || $subAnswer4=="" || $subAnswer5=="" || $subAnswer6=="" || $subAnswer7=="" || $subAnswer8=="" || $subAnswer9=="" || $subAnswer10=="" || $subAnswer11=="" || $subAnswer12==""){
            print "<p style='color: crimson'> Please answer all questions...</p>";
        }
        else{
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$subAnswer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$subAnswer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$subAnswer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$subAnswer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$subAnswer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$subAnswer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$subAnswer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 8, '$subAnswer8', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 9, '$subAnswer9', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 10, '$subAnswer10', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 11, '$subAnswer11', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 12, '$subAnswer12', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );

        $sql = "UPDATE GrammarQuestions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE assignmentID = '$assignmentID'";
        $conn -> exec ( $sql );
        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
    }
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

        $subAnswer1 = addslashes($answer1);
        $subAnswer2 = addslashes($answer2);
        $subAnswer3 = addslashes($answer3);
        $subAnswer4 = addslashes($answer4);
        $subAnswer5 = addslashes($answer5);
        $subAnswer6 = addslashes($answer6);
        $subAnswer7 = addslashes($answer7);
        $subAnswer8 = addslashes($answer8);
        $subAnswer9 = addslashes($answer9);
        $subAnswer10 = addslashes($answer10);
        $subAnswer11 = addslashes($answer11);
        $subAnswer12 = addslashes($answer12);
        $subAnswer13 = addslashes($answer13);

        if($subAnswer1=="" || $subAnswer2=="" || $subAnswer3=="" || $subAnswer4=="" || $subAnswer5=="" || $subAnswer6=="" || $subAnswer7=="" || $subAnswer8=="" || $subAnswer9=="" || $subAnswer10=="" || $subAnswer11=="" || $subAnswer12=="" || $subAnswer13==""){
            print "<p style='color: crimson'> Please answer all questions...</p>";
        }
        else{
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$subAnswer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$subAnswer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$subAnswer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$subAnswer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$subAnswer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$subAnswer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$subAnswer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 8, '$subAnswer8', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 9, '$subAnswer9', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 10, '$subAnswer10', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 11, '$subAnswer11', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 12, '$subAnswer12', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 13, '$subAnswer13', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );

        $sql = "UPDATE GrammarQuestions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE assignmentID = '$assignmentID'";
        $conn -> exec ( $sql );
        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
    }
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

        $subAnswer1 = addslashes($answer1);
        $subAnswer2 = addslashes($answer2);
        $subAnswer3 = addslashes($answer3);
        $subAnswer4 = addslashes($answer4);
        $subAnswer5 = addslashes($answer5);
        $subAnswer6 = addslashes($answer6);
        $subAnswer7 = addslashes($answer7);
        $subAnswer8 = addslashes($answer8);
        $subAnswer9 = addslashes($answer9);
        $subAnswer10 = addslashes($answer10);
        $subAnswer11 = addslashes($answer11);
        $subAnswer12 = addslashes($answer12);
        $subAnswer13 = addslashes($answer13);
        $subAnswer14 = addslashes($answer14);

        if($subAnswer1=="" || $subAnswer2=="" || $subAnswer3=="" || $subAnswer4=="" || $subAnswer5=="" || $subAnswer6=="" || $subAnswer7=="" || $subAnswer8=="" || $subAnswer9=="" || $subAnswer10=="" || $subAnswer11=="" || $subAnswer12=="" || $subAnswer13=="" || $subAnswer14==""){
            print "<p style='color: crimson'> Please answer all questions...</p>";
        }
        else{
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$subAnswer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$subAnswer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$subAnswer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$subAnswer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$subAnswer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$subAnswer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$subAnswer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 8, '$subAnswer8', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 9, '$subAnswer9', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 10, '$subAnswer10', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 11, '$subAnswer11', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 12, '$subAnswer12', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 13, '$subAnswer13', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 14, '$subAnswer14', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );

        $sql = "UPDATE GrammarQuestions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE assignmentID = '$assignmentID'";
        $conn -> exec ( $sql );
        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
    }
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

        $subAnswer1 = addslashes($answer1);
        $subAnswer2 = addslashes($answer2);
        $subAnswer3 = addslashes($answer3);
        $subAnswer4 = addslashes($answer4);
        $subAnswer5 = addslashes($answer5);
        $subAnswer6 = addslashes($answer6);
        $subAnswer7 = addslashes($answer7);
        $subAnswer8 = addslashes($answer8);
        $subAnswer9 = addslashes($answer9);
        $subAnswer10 = addslashes($answer10);
        $subAnswer11 = addslashes($answer11);
        $subAnswer12 = addslashes($answer12);
        $subAnswer13 = addslashes($answer13);
        $subAnswer14 = addslashes($answer14);
        $subAnswer15 = addslashes($answer15);

        if($subAnswer1=="" || $subAnswer2=="" || $subAnswer3=="" || $subAnswer4=="" || $subAnswer5=="" || $subAnswer6=="" || $subAnswer7=="" || $subAnswer8=="" || $subAnswer9=="" || $subAnswer10=="" || $subAnswer11=="" || $subAnswer12=="" || $subAnswer13=="" || $subAnswer14=="" || $subAnswer15==""){
            print "<p style='color: crimson'> Please answer all questions...</p>";
        }
        else{
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 1, '$subAnswer1', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 2, '$subAnswer2', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 3, '$subAnswer3', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 4, '$subAnswer4', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 5, '$subAnswer5', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 6, '$subAnswer6', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 7, '$subAnswer7', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 8, '$subAnswer8', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 9, '$subAnswer9', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 10, '$subAnswer10', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 11, '$subAnswer11', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 12, '$subAnswer12', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 13, '$subAnswer13', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 14, '$subAnswer14', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );
        $sql = "INSERT INTO GrammarAnswers (assignmentID, questionNumb, answer, firstName, groupNumber) VALUES ('$assignmentID', 15, '$subAnswer15', '$firstName', '$groupNumber')";
        $conn -> exec ( $sql );

        $sql = "UPDATE GrammarQuestions SET completedBy = CONCAT(completedBy, '$firstName ') WHERE assignmentID = '$assignmentID'";
        $conn -> exec ( $sql );
        print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
    }
    }
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
