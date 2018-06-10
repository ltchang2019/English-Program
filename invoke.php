<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chatlog";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $u = $_GET["username"];
    $sql = "SELECT * FROM Users WHERE username =  '$u'";
    
    foreach ($conn->query($sql) as $row) {
    print "<b><u>User Info</u></b>" . "<br>";
    print  "<b>User ID: </b>" . $row['userID'] . "<br>";        
    print "<b>Username: </b>" . $row['username'] . "<br>";
    print "<b>Password: </b>" . $row['password'] . "<br>";
    print "<b>Email: </b>" . $row['email'] . "<br>";
    print "<b>First Name: </b>" . $row['firstName'] . "<br>";
    print "<b>Last Name: </b>" . $row['lastName'] . "<br>";
    }
    
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }



?>