<?php
//See original: https://www.w3schools.com/php/php_mysql_connect.asp
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "Math Program";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $studAns = $_GET["studAns"];
    $problemNumber = $_GET["problemNumber"];
    $sql = "SELECT answer FROM Problems WHERE groupNumber = $problemNumber";
    $statement = $conn -> query($sql);

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
