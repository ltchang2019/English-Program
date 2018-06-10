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

    $sql = "SELECT * FROM Problems WHERE groupNumber = 1";
    $statement = $conn -> query($sql);

    if ($statement -> rowCount() == 0) {
        print "<style> table, th, td { border: 0px solid black;} #center { margin-left: auto; margin-right: auto;}</style>";
        print "<div id='center'><table id='center'><th><br><h4>" . "No new problems have been posted..." . "</h4></th>";
    }
    else{
    print "<style> table, th, td {width: 300px; border: 1px solid black; text-align: center;} #center { margin-left: auto; margin-right: auto;}</style>";
    print "<div id='center'><table id='center'><tr><th>#</th><th>Subject</th><th>Problem</th></tr>";

    $userID = -1;
    foreach($statement as $row){
    	$subject = $row["subject"];
        $problem = $row["problem"];
        $problemID = $row["problemID"];

        print "<tr>";
        print "<td>" . $problemID . "</td>";
        print "<td>" . $subject . "</td>";
        print "<td>" .  $problem .  "</td>";
        print "</tr>";
    }
        print "</table></div>";
    }

}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
