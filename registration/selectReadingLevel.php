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

    $table = $_GET["level"];

    $_SESSION["readingLevel"] = $table;

    $sql = "SELECT * FROM $table";
    $statement = $conn -> query($sql);

    print "Books: " . "<select id='bookBrowseSelector'>";

    foreach($statement as $row){
        $textName = $row["textName"];
        $docName = $row["docName"];
        print "<option value='" . $docName . "'>" . $textName . "</option>";
    }

    print "</select> <br>";
    print '<form action="javascript:showBrowsedBook();" method="GET">
            <input type="submit" value="View Book" style="margin-top: 6px">
            </form>';
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
