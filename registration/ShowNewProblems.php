<?php
session_start();
$user = $_SESSION['username'];

$servername = "db746401298.db.1and1.com";
$username = "dbo746401298";
$password = "Tr@vel000";
$dbName = "db746401298";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM Users WHERE username = '$user'";
    $statement = $conn -> query($sql);

    foreach($statement as $row){
        $groupNumber = $row["groupNumber"];
        $firstName = $row["firstName"];
        break;
    }



    $sql1 = "SELECT * FROM Assignments WHERE groupNumber = '$groupNumber' ";
    $statement = $conn -> query($sql1);

    // foreach($statement as $row){
    //     $completedBy = $row["completedBy"];
    // }

    

    if ($statement -> rowCount() == 0) {
        print "<p style='text-align: center'>No new assignments posted...</p>";
    }
    else{
    print "<style> table, th, td {max-width: 500px; border: 1px solid black; text-align: center;} #center { margin-left: auto; margin-right: auto;}</style>";
    print "<div id='center'><table id='center'><tr><th style='min-width:100px'>Text</th><th>Instructions</th><th>Completed</th></tr>";

    $userID = -1;
    foreach($statement as $row){
        $completedBy = $row["completedBy"];

        $assignmentID = $row["assignmentID"];
    	$dateAssigned = $row["dateAssigned"];
        $text = $row["textName"];
        $instructions = $row["instructions"];
        $link = $row["link"];
        $numbQuestions = $row["numbQuestions"];

        $_SESSION['link'] = $link;

        if(strpos($completedBy, $firstName) !== false){
            $string = '✅';
        }
        else{
            $string = '❌';
        }
        print "<tr>";
        print "<td style='max-width:50px'>" . $text . "</td>";
        print "<td max-width:50px>" . $instructions . "</td>";
        print "<td>" . $string . "</td>";
        print "</tr>";
    }
        print "</table></div>";

}
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>