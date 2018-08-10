<?php

session_start();
$user = $_SESSION['username'];
$textName = $_SESSION["textName"];
//See original: https://www.w3schools.com/php/php_mysql_connect.asp
$servername = "db746401298.db.1and1.com";
$username = "dbo746401298";
$password = "Tr@vel000";
$dbName = "db746401298";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $gradeLevel = $_GET["gradeLevel"];
    $_SESSION["gradeLevel"] = $gradeLevel;
    $numbSections = $_GET["numbSections"];
    $_SESSION["numbSections"] = $numbSections;

    print '<br>';

    for ($x = 1; $x <= $numbSections; $x++) {
    print 'Section ' . '<select id="sectionNumb' . $x .  '">
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
            </select> ' . '<b> / </b>' . 'Number of Questions
            <select id="numbGrammarQuestions' . $x .  '">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
            </select>' . '<b> / </b>' . 'Page' . '<input class = "input" style="width: 25px; margin-bottom: 2px;" type="text" name="subject"; id="grammarPage' . $x . '"><br>' ;
        }
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}
?>
