<?php
session_start();
$user = $_SESSION['username'];
$firstName = $_SESSION['firstName'];

$servername = "db746401298.db.1and1.com";
$username = "dbo746401298";
$password = "Tr@vel000";
$dbName = "db746401298";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM Users WHERE firstName = '$firstName'";
    $statement = $conn -> query($sql);

    foreach($statement as $row){
        $groupNumber = $row["groupNumber"];
        break;
    }

    $sql1 = "SELECT * FROM GrammarQuestions WHERE groupNumber = '$groupNumber' ";
    $statement = $conn -> query($sql1);

    // print $user;
    // print $firstName;
    print "<select id='textMenuID'>";

    $userID = -1;
    foreach($statement as $row){
        $gradeLevel = $row["gradeLevel"];
        $sectionNumber = $row["sectionNumber"];
        $page = $row["pageNumber"];
        $numbQuestions = $row['numbQuestions'];
        $completedBy = $row['completedBy'];

        if(strpos($completedBy, $firstName) !== false){
        }
        else{
        print "<option value='" . $numbQuestions . "'>" . "Grade " . $gradeLevel . ", " . "Page " . $page . ", " . "Section " . $sectionNumber . "</option>";
    }
    }
        print "</select>";
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}

?>