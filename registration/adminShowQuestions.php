<script>
    function adjustHeightQuestions(){
      var newHeight = document.getElementById("questionsContainer").offsetHeight;
      alert(newHeight);
      var addedHeight = newHeight - 200;
      var currBoxHeight = document.getElementById("bookFrame").offsetHeight;
      var heightToSet = currBoxHeight + addedHeight;
      alert(heightToSet);

      document.getElementById("bookFrame").setAttribute("height", heightToSet);
    }
</script>

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

    $varNumb = 1;
    foreach($statement as $row){
    	$question = $row["question"];
        $questionID = $row["questionID"];

        print "<p>" . $varNumb . ". " . $question;


        $sql1 = "SELECT * FROM Answers WHERE questionID = '$questionID' ";
        $statement1 = $conn -> query($sql1);

        if ($statement1 -> rowCount() == 0) {
            print "<br><b>No responses yet...</b><br>";
        }
        else{
            print "<style> table, th, td {max-width: 500px; border: 1px solid black; text-align: center;} #center { margin-left: auto; margin-right: auto;}</style>";
            print "<div><table id='center'><tr><th style='width: 200px'>Student</th><th style='width:290px'>Answer</th></tr>";

        foreach($statement1 as $row){
            $firstName = $row["firstName"];
            $answer = $row["answer"];
    
            print "<tr>";
            print "<td>" . $firstName . "</td>";
            print "<td>" . $answer . "</td>";
            print "</tr>";
        }
        }
        print "</table></div><br>";
        $varNumb++;
    }
    }
}

}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
