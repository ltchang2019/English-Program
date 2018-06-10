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

    $u = $_GET["username"];
    $sql = "SELECT userID FROM Users WHERE username = '$u' ";
    $statement = $conn -> query($sql);

    if ($statement -> rowCount() == 0) {
        print "<style> table, th, td { border: 0px solid black;} #center { margin-left: auto; margin-right: auto;}</style>";
        print "<div id='center'><table id='center'><th><br><h4>" . "User " . $u . " doesn't exist..." . "</h4></th>";
    }
    else{
    $userID = -1;
    foreach($statement as $row){
    	$userID = $row["userID"];
    	break;
    }

    $sql = "SELECT messageID FROM Messages WHERE fromUserID = " . $userID;
    $statement = $conn -> query($sql);

    if ($statement -> rowCount() > 0) {

    print "<style> table, th, td {width: 500px; border: 1px solid black; text-align: center;} #center { margin-left: auto; margin-right: auto;}</style>";
    print "<div id='center'><table id='center'><tr><th>To</th><th>Subject</th><th>Body</th></tr>";


    $userID = -1;
    foreach($statement as $row){
        $messageID = $row["messageID"];


        $sql = "SELECT subject FROM Messages WHERE messageID = " . $messageID;
        $statement = $conn -> query($sql);
        foreach($statement as $row){
            $MessageSubject = $row["subject"];
        }

        $sql = "SELECT body FROM Messages WHERE messageID = " . $messageID;
        $statement = $conn -> query($sql);
        foreach($statement as $row){
            $MessageBody = $row["body"];
        }
        $sql = "SELECT toUserID FROM MessageRecipients WHERE messageID = " . $messageID;
        $statement1 = $conn -> query($sql);

        foreach($statement1 as $row){
            $ToUserID = $row["toUserID"];
        }
            $sql = "SELECT username FROM Users WHERE userID = " . $ToUserID;
            $statement = $conn -> query($sql);

            foreach($statement as $row){
                $toUsername = $row["username"];
        }
            print "<tr>";
            print "<td>" . $toUsername . "</td>";
            print "<td>" .  $MessageSubject .  "</td>";
            print "<td>" .  $MessageBody .  "</td>";
            print "</tr>";
    }
    print "</table></div>";
}
else{
    print "<style> table, th, td { border: 0px solid black;} #center { margin-left: auto; margin-right: auto;}</style>";
    print "<div id='center'><table id='center'><th><br><h4>" . "User " . $u . " has sent no messages..." . "</h4></th>";
}
}
}

catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
