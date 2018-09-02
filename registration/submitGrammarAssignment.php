<?php

session_start();
$firstName = $_SESSION['firstName'];
//See original: https://www.w3schools.com/php/php_mysql_connect.asp
$servername = "db746401298.db.1and1.com";
$username = "dbo746401298";
$password = "Tr@vel000";
$dbName = "db746401298";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $unit = $_GET["unit"];

    $sql = "SELECT * FROM Administrators WHERE firstName = '$firstName'";
    $statement = $conn -> query($sql);

    foreach($statement as $row){
      $groupNumber = $row['groupNumber'];
    }

    $gradeLevel = $_GET["gradeLevel"];
    $_SESSION["gradeLevel"] = $gradeLevel;
    $numbSections = $_GET["numbSections"];
    $_SESSION["numbSections"] = $numbSections;

    if($numbSections == 1){
      $questions1 = $_GET["numbQuestions1"];
      $sectionNumb1 = $_GET["sectionNumb1"];
      $page1 = $_GET["page1"];

      $sql = "INSERT INTO GrammarQuestions (numbQuestions, sectionNumber, pageNumber, dateAssigned, groupNumber, gradeLevel, unit) VALUES ('$questions1', '$sectionNumb1', '$page1', CURDATE(), '$groupNumber', '$gradeLevel', '$unit')";
      $conn -> exec ( $sql );
    }
    else if($numbSections == 2){
      $questions1 = $_GET["numbQuestions1"];
      $questions2 = $_GET["numbQuestions2"];
      $page1 = $_GET["page1"];
      $sectionNumb1 = $_GET["sectionNumb1"];
      $sectionNumb2 = $_GET["sectionNumb2"];
      $page2 = $_GET["page2"];

      $sql = "INSERT INTO GrammarQuestions (numbQuestions, sectionNumber, pageNumber, dateAssigned, groupNumber, gradeLevel, unit) VALUES ('$questions1', '$sectionNumb1', '$page1', CURDATE(), '$groupNumber', '$gradeLevel','$unit')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (numbQuestions, sectionNumber, pageNumber, dateAssigned, groupNumber, gradeLevel, unit) VALUES ('$questions2', '$sectionNumb2', '$page2', CURDATE(), '$groupNumber','$gradeLevel', '$unit')";
      $conn -> exec ( $sql );
    }
    else if($numbSections == 3){
      $questions1 = $_GET["numbQuestions1"];
      $questions2 = $_GET["numbQuestions2"];
      $questions3 = $_GET["numbQuestions3"];
      $sectionNumb1 = $_GET["sectionNumb1"];
      $sectionNumb2 = $_GET["sectionNumb2"];
      $sectionNumb3 = $_GET["sectionNumb3"];
      $page1 = $_GET["page1"];
      $page2 = $_GET["page2"];
      $page3 = $_GET["page3"];

      $sql = "INSERT INTO GrammarQuestions (numbQuestions, sectionNumber, pageNumber, dateAssigned, groupNumber, gradeLevel, unit) VALUES ('$questions1', '$sectionNumb1', '$page1', CURDATE(), '$groupNumber', '$gradeLevel', '$unit')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (numbQuestions, sectionNumber, pageNumber, dateAssigned, groupNumber, gradeLevel, unit) VALUES ('$questions2', '$sectionNumb2', '$page2', CURDATE(), '$groupNumber','$gradeLevel', '$unit')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (numbQuestions, sectionNumber, pageNumber, dateAssigned, groupNumber, gradeLevel, unit) VALUES ('$questions3', '$sectionNumb3', '$page3', CURDATE(), '$groupNumber','$gradeLevel', '$unit')";
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

      $page1 = $_GET["page1"];
      $page2 = $_GET["page2"];
      $page3 = $_GET["page3"];
      $page4 = $_GET["page4"];

      $sql = "INSERT INTO GrammarQuestions (numbQuestions, sectionNumber, pageNumber, dateAssigned, groupNumber, gradeLevel, unit) VALUES ('$questions1', '$sectionNumb1', '$page1', CURDATE(), '$groupNumber', '$gradeLevel', '$unit')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (numbQuestions, sectionNumber, pageNumber, dateAssigned, groupNumber, gradeLevel, unit) VALUES ('$questions2', '$sectionNumb2', '$page2', CURDATE(), '$groupNumber','$gradeLevel', '$unit')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (numbQuestions, sectionNumber, pageNumber, dateAssigned, groupNumber, gradeLevel, unit) VALUES ('$questions3', '$sectionNumb3', '$page3', CURDATE(), '$groupNumber','$gradeLevel', '$unit')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (numbQuestions, sectionNumber, pageNumber, dateAssigned, groupNumber, gradeLevel, unit) VALUES ('$questions4', '$sectionNumb4', '$page4', CURDATE(), '$groupNumber', '$gradeLevel','$unit')";
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

      $page1 = $_GET["page1"];
      $page2 = $_GET["page2"];
      $page3 = $_GET["page3"];
      $page4 = $_GET["page4"];
      $page5 = $_GET["page5"];

      $sql = "INSERT INTO GrammarQuestions (numbQuestions, sectionNumber, pageNumber, dateAssigned, groupNumber, gradeLevel, unit) VALUES ('$questions1', '$sectionNumb1', '$page1', CURDATE(), '$groupNumber', '$gradeLevel', '$unit')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (numbQuestions, sectionNumber, pageNumber, dateAssigned, groupNumber, gradeLevel, unit) VALUES ('$questions2', '$sectionNumb2', '$page2', CURDATE(), '$groupNumber','$gradeLevel', '$unit')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (numbQuestions, sectionNumber, pageNumber, dateAssigned, groupNumber, gradeLevel, unit) VALUES ('$questions3', '$sectionNumb3', '$page3', CURDATE(), '$groupNumber','$gradeLevel', '$unit')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (numbQuestions, sectionNumber, pageNumber, dateAssigned, groupNumber, gradeLevel, unit) VALUES ('$questions4', '$sectionNumb4', '$page4', CURDATE(), '$groupNumber', '$gradeLevel', '$unit')";
      $conn -> exec ( $sql );
      $sql = "INSERT INTO GrammarQuestions (numbQuestions, sectionNumber, pageNumber, dateAssigned, groupNumber, gradeLevel, unit) VALUES ('$questions5', '$sectionNumb5', '$page5', CURDATE(), '$groupNumber', '$gradeLevel', '$unit')";
      $conn -> exec ( $sql );
    }
    print "<b><p class='animated fadeOut' style='color: green'>Submitted!</p></b>";
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
