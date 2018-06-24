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

    $sql = "SELECT * FROM Users WHERE username = '$user'";
    $statement = $conn -> query($sql);

    foreach($statement as $row){
        $groupNumber = $row["groupNumber"];
        break;
    }

    $textName = $_GET["textName"];

    $sql = "SELECT * FROM Questions WHERE textName = '$textName' AND groupNumber = '$groupNumber' ";
    $statement = $conn -> query($sql);

    if($textName==""){
        print "<p style='color: crimson'>" . "Please specify a book..." . "</h4>";
        $_SESSION["displayBoolean"] = "false";
    }
    else{
        $_SESSION["displayBoolean"] = "true";
    if ($statement -> rowCount() == 0) {
        print "<h4 style='text-align: center'>" . "No new questions have been posted..." . "</h4>";
    }
    else{
    $varNumb = 1;
    foreach($statement as $row){
    	$question = $row["question"];
        $questionID = $row["questionID"];

        print $varNumb . ". " . $question;
    
        print "<textarea class='" . $questionID . "' style='max-width: 100%' rows='2' cols='36' placeholder='Answer...' id='question" . $varNumb . "'>" . "</textarea><br>";

        $varNumb++;
    }
    }
}

    print "<p id='answerMessageContainer' style='color: green'></p>";
    print "<form action='javascript:submitAnswer();' method='GET'>
          <input type='submit' value='Submit Answers'></form>";
    print "<div id='numbAnswers' class='" . $varNumb . "'></div>";
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
