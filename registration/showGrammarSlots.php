<?php

session_start();
$user = $_SESSION['username'];
//See original: https://www.w3schools.com/php/php_mysql_connect.asp
$servername = "db746401298.db.1and1.com";
$username = "dbo746401298";
$password = "Tr@vel000";
$dbName = "db746401298";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $slotID = $_GET["slotID"];

    $sql = "SELECT * FROM GrammarQuestions WHERE assignmentID = '$slotID'";
    $statement = $conn -> query($sql);

    foreach($statement as $row){
        $numbSlots = $row["numbQuestions"];
        break;
    }

    $_SESSION["assignmentID"] = $slotID;

    for ($x = 1; $x <= $numbSlots; $x++) {

        print "<div id='numbSlots' class='" . $numbSlots . "'></div>";

        print $x . ". " .
            '<input class = "input" style="width: 150px; margin-bottom: 2px; margin-top: 4px;" type="text" name="subject"; id="grammarSlot' . $x . '"><br>';
    } 
    print '<form action="javascript: submitGrammarAnswers();" method="GET"><input type="submit" value="Submit Answers" style="margin-top: 5px"></form>';
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
