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

    echo "Connected successfully"; 

    $sql = "SELECT * FROM users";
    $statement = $conn -> query( $sql );
	
    print "<style> table, th, td {border: 1px solid black;} </style>";
    print "<table><tr><th>id</th><th>name</th><th>email</th></tr>";

    foreach ($statement as $row) {
	print "<tr>";
        	print "<td>" .  $row['userID'] .  "</td>";
        	print "<td>" .  $row['username'] .  "</td>";
        	print "<td>" .  $row['email'] .  "</td>";
	print "</tr>";
}

print "</table>";
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
