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

    $gradeLevel = $_GET["gradeLevel"];
    $_SESSION["grammarGradeBrowse"] = $gradeLevel;

    print "Unit: " . "<select id='grammarUnit'>";

    $sql = "SELECT * FROM GrammarBooks WHERE gradeLevel = '$gradeLevel'";
    $statement = $conn -> query($sql);

    foreach($statement as $row){
        $unit = $row["unit"];
        print "<option value='" . $unit . "'>" . $unit . "</option>";
    }

    print "</select> <br>";
    print '<form action="javascript:showGrammarUnit();" method="GET">
            <input type="submit" value="View Unit" style="margin-top: 6px">
            </form>';
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
