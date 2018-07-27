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

    print "<b> Welcome " . $firstName . "!" . "</b>";

    $sql = "SELECT * FROM Administrators WHERE firstName = '$firstName'";
    $statement = $conn -> query($sql);

    if ($statement -> rowCount() == 0) 
    	print '<a href="javascript:getSessionLength();"><img src="logout.png" style="float: right; margin-right: 15px; margin-top: 10px; width:40px; height:35px;"></a>';
    else
    	print '<a href="adminlogin.php"><img src="logout.png" style="float: right; margin-right: 15px; margin-top: 10px; width:40px; height:35px;"></a>';
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>