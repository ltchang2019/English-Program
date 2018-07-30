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
    $instructions = $_GET["instructions"];
    $_SESSION["instructions"] = $instructions;

    $sql = "INSERT INTO GrammarAssignments (gradeLevel, numbSections, instructions) VALUES ('$gradeLevel', '$numbSections', '$instructions')";
    $conn -> exec ( $sql );

    if($numbSections == 1){
      $questions1 = $_GET["numbQuestions1"];
      $sectionNumb1 = $_GET["sectionNumb1"];

      $sql = "SELECT * FROM GrammarAssignments WHERE instructions = '$instructions'";
      $statement = $conn -> query($sql);
      foreach($statement as $row){
        $assignmentID =  $row["assignmentID"];
        break;
    }

      $sql = "INSERT INTO GrammarQuestions (assignmentID, numbQuestions, sectionNumber) VALUES ('$assignmentID', '$questions1', '$sectionNumb1')";
      $conn -> exec ( $sql );
    }
    else if($numbSections == 2){
      $questions1 = $_GET["numbQuestions1"];
      $questions2 = $_GET["numbQuestions2"];
      $sectionNumb1 = $_GET["sectionNumb1"];
      $sectionNumb2 = $_GET["sectionNumb2"];

      $sql = "SELECT * FROM GrammarAssignments WHERE instructions = '$instructions'";
      $statement = $conn -> query($sql);
      foreach($statement as $row){
        $assignmentID =  $row["assignmentID"];
        break;
    }

      $sql = "INSERT INTO GrammarQuestions (assignmentID, numbQuestions, sectionNumber) VALUES ('$assignmentID', '$questions1', '$sectionNumb1')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (assignmentID, numbQuestions, sectionNumber) VALUES ('$assignmentID', '$questions2', '$sectionNumb2')";
      $conn -> exec ( $sql );
    }
    else if($numbSections == 3){
      $questions1 = $_GET["numbQuestions1"];
      $questions2 = $_GET["numbQuestions2"];
      $questions3 = $_GET["numbQuestions3"];
      $sectionNumb1 = $_GET["sectionNumb1"];
      $sectionNumb2 = $_GET["sectionNumb2"];
      $sectionNumb3 = $_GET["sectionNumb3"];

      $sql = "SELECT * FROM GrammarAssignments WHERE instructions = '$instructions'";
      $statement = $conn -> query($sql);
      foreach($statement as $row){
        $assignmentID =  $row["assignmentID"];
        break;
    }

      $sql = "INSERT INTO GrammarQuestions (assignmentID, numbQuestions, sectionNumber) VALUES ('$assignmentID', '$questions1', '$sectionNumb1')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (assignmentID, numbQuestions, sectionNumber) VALUES ('$assignmentID', '$questions2', '$sectionNumb2')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (assignmentID, numbQuestions, sectionNumber) VALUES ('$assignmentID', '$questions3', '$sectionNumb3')";
      $conn -> exec ( $sql );
    }
    else if($numbSections == 4){
      $questions1 = $_GET["numbQuestions1"];
      $questions2 = $_GET["numbQuestions2"];
      $questions3 = $_GET["numbQuestions3"];
      $questions4 = $_GET["numbQuestions4"];

      $sectionNumb1 = $_GET["sectionNumb1"];
      $sectionNumb2 = $_GET["sectionNumb2"];
      $sectionNumb3 = $_GET["sectionNumb3"];
      $sectionNumb4 = $_GET["sectionNumb4"];


      $sql = "SELECT * FROM GrammarAssignments WHERE instructions = '$instructions'";
      $statement = $conn -> query($sql);
      foreach($statement as $row){
        $assignmentID =  $row["assignmentID"];
        break;
    }

      $sql = "INSERT INTO GrammarQuestions (assignmentID, numbQuestions, sectionNumber) VALUES ('$assignmentID', '$questions1', '$sectionNumb1')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (assignmentID, numbQuestions, sectionNumber) VALUES ('$assignmentID', '$questions2', '$sectionNumb2')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (assignmentID, numbQuestions, sectionNumber) VALUES ('$assignmentID', '$questions3', '$sectionNumb3')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (assignmentID, numbQuestions, sectionNumber) VALUES ('$assignmentID', '$questions4', '$sectionNumb4')";
      $conn -> exec ( $sql );
    }
    else if($numbSections == 5){
      $questions1 = $_GET["numbQuestions1"];
      $questions2 = $_GET["numbQuestions2"];
      $questions3 = $_GET["numbQuestions3"];
      $questions4 = $_GET["numbQuestions4"];
      $questions5 = $_GET["numbQuestions5"];

      $sectionNumb1 = $_GET["sectionNumb1"];
      $sectionNumb2 = $_GET["sectionNumb2"];
      $sectionNumb3 = $_GET["sectionNumb3"];
      $sectionNumb4 = $_GET["sectionNumb4"];
      $sectionNumb5 = $_GET["sectionNumb5"];

      $sql = "SELECT * FROM GrammarAssignments WHERE instructions = '$instructions'";
      $statement = $conn -> query($sql);
      foreach($statement as $row){
        $assignmentID =  $row["assignmentID"];
        break;
    }

      $sql = "INSERT INTO GrammarQuestions (assignmentID, numbQuestions, sectionNumber) VALUES ('$assignmentID', '$questions1', '$sectionNumb1')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (assignmentID, numbQuestions, sectionNumber) VALUES ('$assignmentID', '$questions2', '$sectionNumb2')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (assignmentID, numbQuestions, sectionNumber) VALUES ('$assignmentID', '$questions3', '$sectionNumb3')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (assignmentID, numbQuestions, sectionNumber) VALUES ('$assignmentID', '$questions4', '$sectionNumb4')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (assignmentID, numbQuestions, sectionNumber) VALUES ('$assignmentID', '$questions5', '$sectionNumb5')";
      $conn -> exec ( $sql );
    }
    print "submitted!";
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
