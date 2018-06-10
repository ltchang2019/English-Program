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

    $sql = "SELECT messageID FROM MessageRecipients WHERE toUserID = " . $userID;
    $statement = $conn -> query($sql);

    if ($statement -> rowCount() > 0) {

    print "<style> table, th, td {width: 200px; border: 1px solid black; text-align: center;} #center { margin-left: auto; margin-right: auto;}</style>";
    print "<div id='center'><table id='center'><tr><th>From</th><th>Subject</th><th>Body</th></tr>";

    $messageID = -1;
    foreach($statement as $row){
    	$sql2 = "SELECT * FROM Messages WHERE messageID = ". $row["messageID"];
    	$statement2 = $conn->query($sql2);

    	foreach($statement2 as $row2) {
            $currFrom = $row2["fromUserID"];
            $sql4 = "SELECT * FROM Users WHERE userID = ". $currFrom;
            $statement4 = $conn->query($sql4);

            foreach($statement4 as $row4){

                $username = $row4["username"];
            }
            $Subject = $row2["subject"];
    		$MessageBody = $row2["body"];
    	}
        
        print "<tr>";
        print "<td>" . $username . "</td>";
        print "<td>" .  $Subject .  "</td>";
        print "<td>" .  $MessageBody .  "</td>";
        print "</tr>";

    }
    print "</table></div>";
}
else{
    print "<style> table, th, td { border: 0px solid black;} #center { margin-left: auto; margin-right: auto;}</style>";
    print "<div id='center'><table id='center'><th><br><h4>" . "User " . $u . " has received no messages..." . "</h4></th>";
}
}
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
