<?php
//See original: https://www.w3schools.com/php/php_mysql_connect.asp
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "chatlog";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $sql = "INSERT INTO users (username, password, email, firstName, lastName) VALUES ('". $_GET["username"] ."', '". $_GET["password"] ."', '". $_GET["email"] ."', '". $_GET["firstName"] ."', '". $_GET["lastName"] ."') " ;

    $conn -> exec( $sql );

	 print "<style> table, th, td { border: 0px solid black;} #center { margin-left: auto; margin-right: auto;}</style>";
    print "<div id='center'><table id='center'><th><br><h4>New User Registered!</h4></th>"; 
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
