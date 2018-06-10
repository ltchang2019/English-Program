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
    // $blah =  $_GET["fromWho"];
    // $searchString = ',';

    // if( strpos($blah, $searchString) !== false ) {
    // }

    $SenderStatement = "SELECT userID FROM Users WHERE username = '". $_GET["fromWho"] ."' ";
    $statement1 = $conn -> query($SenderStatement);

    if($statement1 -> rowCount() == 0) {
        print "<style> table, th, td { border: 0px solid black;} #center { margin-left: auto; margin-right: auto;}</style>";
        print "<div id='center'><table id='center'><th><br><h4>" . "User " . $_GET["fromWho"] . " doesn't exist..." . "</h4></th>";
    }
    else{
    $fromUserID = -1;
    foreach($statement1 as $row1){
        $FromUserID = $row1["userID"];
        break;
    }

    $RecipientStatement = "SELECT userID FROM Users WHERE username = '". $_GET["toWhom"] ."' ";
    $statement2 = $conn -> query($RecipientStatement);

if($statement2 -> rowCount() == 0) {
        print "<style> table, th, td { border: 0px solid black;} #center { margin-left: auto; margin-right: auto;}</style>";
        print "<div id='center'><table id='center'><th><br><h4>" . "User " . $_GET["toWhom"] . " doesn't exist..." . "</h4></th>";
    }
    else{

    $ToUserID = -1;
    foreach($statement2 as $row2){
        $ToUserID = $row2["userID"];
        break;
    }

    $sql1 =  "INSERT INTO Messages (subject, body, fromUserID) VALUES ('". $_GET["subject"] ."', '". $_GET["body"] ."', $FromUserID) ";

    
    $conn -> exec( $sql1 );

    $messageID = $conn -> lastInsertId();
    
    $sql2 = "INSERT INTO MessageRecipients (messageID, toUserID) VALUES ($messageID, $ToUserID) " ;

    $conn -> exec ( $sql2 );
	 print "<style> table, th, td { border: 0px solid black;} #center { margin-left: auto; margin-right: auto;}</style>";
    print "<div id='center'><table id='center'><th><br><h4>Message sent...</h4></th>";
}
}
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
