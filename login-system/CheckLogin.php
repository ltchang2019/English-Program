<?php
//See original: https://www.w3schools.com/php/php_mysql_connect.asp
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "accounts";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $enteredUsername = $_GET["username"];
    $enteredPassword = $_GET["password"];
    $sql = "SELECT * FROM Users WHERE username = '$enteredUsername' AND password = '$enteredPassword' ";
    $statement = $conn -> query($sql);

    if ($statement -> rowCount() == 1){
        //LOGIN
    }
    else{
         echo "<script type='text/javascript'>alert('Username and/or password is incorrect');</script>";
    }


        foreach($statement as $row){
    	$answer = $row["answer"];
        break;
    }

    if($studAns == $answer)
        print "YAY!";
    }
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
