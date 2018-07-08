<?php
session_start();
$user = $_SESSION['username'];

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "English Program";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM Administrators WHERE username = '$user'";
    $statement = $conn -> query($sql);

    foreach($statement as $row){
        $groupNumber = $row["groupNumber"];
        $firstName = $row["firstName"];
        break;
    }



    $sql1 = "SELECT * FROM Assignments WHERE groupNumber = '$groupNumber' ";
    $statement = $conn -> query($sql1);

    // print $user;
    // print $firstName;
    print "<select id='textMenuID'>";

    $userID = -1;
    foreach($statement as $row){
        $text = $row["textName"];

        print "<option value='" . $text . "'>" . $text . "</option>";
    }
        print "</select>";
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>