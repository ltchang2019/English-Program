<?php

session_start();
$user = $_SESSION['username'];
//See original: https://www.w3schools.com/php/php_mysql_connect.asp
$servername = "db746401298.db.1and1.com";
$username = "dbo746401298";
$password = "Tr@vel000";
$dbName = "db746401298";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $assignmentID = $_GET["assignmentID"];

    $sql = "SELECT * FROM GrammarQuestions WHERE assignmentID = '$assignmentID'";
    $statement = $conn -> query($sql);

    foreach($statement as $row){
        $numbQuestions = $row["numbQuestions"];
        break;
    }

    $sql = "SELECT * FROM GrammarAnswers WHERE assignmentID = '$assignmentID' ";
    $statement = $conn -> query($sql);

        if ($statement -> rowCount() == 0) {
            print "<b>No responses yet...</b>";
        }
        else{
            for ($x = 1; $x <= $numbQuestions; $x++) {

                if($x == 1){
                    print "<style> table, th, td {max-width: 500px; border: 1px solid black; text-align: center; margin-top: 15px;} #center { margin-left: auto; margin-right: auto;}</style>";
                    print "<div><table id='center'><tr><th style='width: 200px'>Student</th><th style='width:290px'>Answer</th></tr>";
                }
                else{
                print "<style> table, th, td {max-width: 500px; border: 1px solid black; text-align: center;} #center { margin-left: auto; margin-right: auto;}</style>";
                print "<div><table id='center'><tr><th style='width: 200px'>Student</th><th style='width:290px'>Answer</th></tr>";
                }   

                $sql1 = "SELECT * FROM GrammarAnswers WHERE assignmentID = '$assignmentID' ";
                $statement1 = $conn -> query($sql1);

                foreach($statement1 as $row){
                    $questionNumb = $row["questionNumb"];
                    $firstName = $row["firstName"];
                    $answer = $row["answer"];
                    if($questionNumb == $x){
                         print "<tr>";
                         print "<td>" . $firstName . "</td>";
                         print "<td>" . $answer . "</td>";
                         print "</tr>";
                    }
                }
                print "</table></div><br>";
            }
            
    }
    
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
