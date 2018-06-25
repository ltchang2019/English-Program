<?php
session_start();
$user = $_SESSION['username'];

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

    $sql1 = "SELECT * FROM Assignments WHERE groupNumber = '$groupNumber'";
    $statement = $conn -> query($sql1);

    if ($statement -> rowCount() == 0) {
        print "<style> table, th, td { border: 0px solid black;} #center { margin-left: auto; margin-right: auto;}</style>";
        print "<div id='center'><table id='center'><th><br><h4>" . "No new assignments have been posted..." . "</h4></th>";
    }
    else{
    print "<style> table, th, td {max-width: 500px; border: 1px solid black; text-align: center;} #center { margin-left: auto; margin-right: auto;}</style>";
    print "<div id='center'><table id='center'><tr><th>Date Assigned</th><th style='min-width:150px'>Text</th><th>Number of Questions</th></tr>";

    $userID = -1;
    foreach($statement as $row){
        $assignmentID = $row["assignmentID"];
    	$dateAssigned = $row["dateAssigned"];
        $text = $row["textName"];
        $link = $row["link"];
        $numbQuestions = $row["numbQuestions"];

        $_SESSION['link'] = $link;

        session_abort();

        print "<tr>";
        print "<td style='max-width:50px'>" . $dateAssigned . "</td>";
        print "<td style='max-width:50px'>" . $text . "</td>";
        print "<td style='max-width:5px'>" . $numbQuestions . "</td>";
        print "</tr>";
    }
        print "</table></div>";

}
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>