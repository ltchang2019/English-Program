<?php
session_start();
$user = $_SESSION['username'];

$servername = "db746401298.db.1and1.com";
$username = "dbo746401298";
$password = "Tr@vel000";
$dbName = "db746401298";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM Assignments";
    $statement = $conn -> query($sql);

    foreach($statement as $row){
        $studName = explode(" ", $statement);
    }



    $sql1 = "SELECT * FROM Assignments WHERE groupNumber = '$groupNumber' ";
    $statement = $conn -> query($sql1);

    // print $user;
    // print $firstName;
    print "<select id='textMenuID'>";

    $userID = -1;
    foreach($statement as $row){
        $completedBy = $row["completedBy"];

        $assignmentID = $row["assignmentID"];
        $text = $row["textName"];

        if(strpos($completedBy, $firstName) !== false){
            $string = '✅';
        }
        else{
            $string = '❌';
        }

        if($string == ❌){
            print "<option value='" . $text . "'>" . $text . "</option>";
        }
        
    }
        print "</select>";


}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>