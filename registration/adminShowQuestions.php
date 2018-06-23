<?php

session_start();
$user = $_SESSION['username'];
//See original: https://www.w3schools.com/php/php_mysql_connect.asp
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
        break;
    }

    $textName = $_GET["textName"];

    $sql = "SELECT * FROM Questions WHERE textName = '$textName' AND groupNumber = '$groupNumber' ";
    $statement = $conn -> query($sql);

    if($textName==""){
        print "<h4 style='text-align: center; color: crimson'>" . "Please specify a book..." . "</h4>";
        $_SESSION["displayBoolean"] = "false";
    }
    else{
        $_SESSION["displayBoolean"] = "true";
    if ($statement -> rowCount() == 0) {
        print "<h4 style='text-align: center'>" . "No new questions have been posted..." . "</h4>";
    }
    else{
    
    print "<style> table, th, td {max-width: 500px; border: 1px solid black; text-align: center;} #center { margin-left: auto; margin-right: auto;}</style>";
    print "<div><table id='center'><tr><th>Number</th><th>Question</th></tr>";

    $varNumb = 1;
    foreach($statement as $row){
    	$question = $row["question"];
    
        print "<tr>";
        print "<td>" . $varNumb . "</td>";
        print "<td>" . $question . "</td>";
        print "</tr>";

        $varNumb++;
    }
        print "</table></div>";
    }
}

}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
