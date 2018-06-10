<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "accounts";
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $tmp="0";
    $firstName = "SELECT email FROM users" ;

    $params = array('tmp' => $tmp);

    $firstName = $conn->prepare($firstName); 
    $firstName->execute($params) ; 
    $total = $firstName->fetchColumn(); 
      
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h6 class="w3-padding-4" style="margin-top: -20px"><b>Login Info</b></h3>
    <h6 class="w3-padding-4" style="margin-top: -10px">User: <!-- <?php echo $total ?> --> </h3>
    <h6 class="w3-padding-4" style="margin-top: -10px">Group: ...</h3>
    <h3 class="w3-padding-32"><b>Grace Girls<br><b>Tutoring</b></h3>

  </div>
  <div class="w3-bar-block">
    <a href="CSSTest.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="MathProblems.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Group 1</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Group 2</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Group 3</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Group 4</a> 
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Grace Math Tutoring</span>
</header>

<html>
<head>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercises</title>
  <script src="jquery-2.1.1.min.js"></script>
    <script src="AlgebraScripts.js"></script>
    <link rel="stylesheet" type="text/css" href="mathquill.css">
    <link href="FakeCommonCSS.css" rel="stylesheet" type="text/css">
    <script src="mathquill.js"></script>
    <script>
    var MQ = MathQuill.getInterface(2);
  </script>
</head>

<body onLoad="newProb();" id="NewProblem">
<noscript>Please enable Javascript.</noscript>
    <div id="Page">
    <div id="LeftCol">
  
                <div id="MathField"> </div>
                <div id="Problem"></div>
                <div id="MathField"></div> 
                <div hidden="true" id="Latex"></div>
                <div id="AnswersContainer" hidden="true">

                    <div id="YourAnswer" class="Answers">Your Answer: <span class="Answers" id="TypedAnswer"></span></div>
                    <div id="CorrectAnswer" class="Answers">
                        Correct Answer: <span class="Answers" id="ShowAns"></span>
                        <input type="button" id="NextButton" value="OK" onClick="NextProblem();" /> 
                    </div>
                </div>

            </div>
          
 
       

        <div id="RightCol">
        <fieldset id="StatsArea">
      
    
        </fieldset>
        <form id="KeyPadArea" name="KeyPadArea" class="KeyPadArea">
            <button type="button" class="button" id="buttonMisc" value="" onClick="Symbol(this.value);"></button>
            <button type="button" class="button" id="button7" value="7" onClick="Symbol(this.value);">7</button>
            <button type="button" class="button" id="button8" value="8" onClick="Symbol(this.value);">8</button>
            <button type="button" class="button" id="button9" value="9" onClick="Symbol(this.value);">9</button>
            
            <button type="button" class="button" id="buttonLP" value="(" onClick="Symbol(this.value);">(</button>
            <button type="button" class="button" id="buttonRP" value=")" onClick="Symbol(this.value);">)</button>
            <button type="button" class="button" id="buttonColon" value=":" onClick="Symbol(this.value);">:</button>
            <button type="button" class="button" id="buttonComma" value="," onClick="Symbol(this.value);">,</button>
            <br>
            
            <button type="button" class="button" id="buttonN" value="-" onClick="Symbol(this.value);">-</button>
            <button type="button" class="button" id="button4" value="4" onClick="Symbol(this.value);">4</button>
            <button type="button" class="button" id="button5" value="5" onClick="Symbol(this.value);">5</button>
            <button type="button" class="button" id="button6" value="6" onClick="Symbol(this.value);">6</button>
            
            <button type="button" class="button" id="buttonGE" value="≥" onClick="Symbol(this.value);">\ge</button>
            <button type="button" class="button" id="buttonLE" value="≤" onClick="Symbol(this.value);">\le</button>
            <button type="button" class="button" id="buttonG" value=">" onClick="Symbol(this.value);">></button>
            <button type="button" class="button" id="buttonL" value="<" onClick="Symbol(this.value);"><</button>
            <br>

            <button type="button" class="button" id="buttonPlus" value="+" onClick="Symbol(this.value);">+</button>
            <button type="button" class="button" id="button1" value="1" onClick="Symbol(this.value);">1</button>
            <button type="button" class="button" id="button2" value="2" onClick="Symbol(this.value);">2</button>
            <button type="button" class="button" id="button3" value="3" onClick="Symbol(this.value);">3</button>

            <button type="button" class="button" id="buttonInf" value="°" onClick="Symbol(this.value);">°</button>
            <button type="button" class="button" id="buttonPi" value="\pi" onClick="Symbol(this.value);">\pi</button>
            <button type="button" class="button" id="buttonDollar" value="$" onClick="Symbol(this.value);">$</button>
            <button type="button" class="button" id="" value="\infty" onClick="Symbol(this.value);">\infty</button>
            <br>

            <button type="button" class="button" id="" value="\pm" onClick="Symbol(this.value);">\pm</button>
            <button type="button" class="button" id="buttonD" value="." onClick="Symbol(this.value);">.</button>
            <button type="button" class="button" id="button0" value="0" onClick="Symbol(this.value);">0</button>
            <button type="button" class="button" id="buttonEqual" value="=" onClick="Symbol(this.value);">=</button>
            
            <button type="button" class="button" id="buttonD" value="^" onClick="Symbol(this.value);">x^{a}</button>
            <button type="button" class="button" id="buttonSub" value="_" onClick="Symbol(this.value);">x_a</button>
            <button type="button" class="button" id="buttonSqrt" value="\sqrt" onClick="Symbol(this.value);">\sqrt{}</button>
            <button type="button" class="button" id="buttonF" value="/" onClick="Symbol(this.value);">\frac{a}{b}</button>
            <br/>
        </form>
        <div id="ActionKeys">
            <input type="button" name="Clear" class="buttonA" id="buttonD" value="DELETE" onClick="Delete();"/>
            <input type="button" name="Clear" class="buttonA" id="buttonC" value="CLEAR" onClick="Clear();"/>
            <input type="submit" name="Submit" class="buttonA" id="buttonE" value="ENTER" onClick="Correct();"/>
        <br/>
        <br/>
        </div>
        </div>
        </div>
<script>
var mathFieldSpan = document.getElementById('MathField');
var latexSpan = document.getElementById('Latex');
var problemSpan = document.getElementById('Problem');
var correctSpan = document.getElementById("ShowAns");
var LatexButton = document.getElementsByClassName("button");
var Format = document.getElementById("Format");
var Direction = document.getElementById("Directions");
var TeX;
var LatexButton = document.getElementsByClassName("button");
for (var i = 0; i <= LatexButton.length; i++)
  {
    var Change = LatexButton[i];
    MQ.StaticMath(Change);
  }
var mathField = MQ.MathField(mathFieldSpan, {
  spaceBehavesLikeTab: true, // configurable
  handlers: {
    edit: function() { // useful event handlers
      latexSpan.textContent = mathField.latex(); // simple API
    }
  }
});

var A;
var B;
var C;
var D;
var E;
var F;
var R;
var Z;
var ExpSum;
function newProb(){
        Direction.innerHTML = "";
  }

var Value;
var Rad;
var Fn;
function TrigValuesRad(Fn,Rad)
  {
    if (Fn == 1)
      {
        Value = Math.sin(Rad);
        Value = Value.toFixed(3);
      }
    else if (Fn == 2)
      {
        Value = Math.cos(Rad);
        Value = Value.toFixed(3);
      }
    else if (Fn == 3)
      {
        Value = Math.tan(Rad);
        if (String(Fraction) == "\\frac{1}{2}" || String(Fraction) == "\\frac{3}{2}")
          {
            Ans = "y=undefined";
          }
        else
          {
            Value = Value.toFixed(3);
          }
      }
    if (Value < 0)
      {
        if (Value == -0.500)
          {
            Ans = "y=-\\frac{1}{2}";
          }
        else if (Value == -0.866)
          {
            Ans = "y=-\\frac{\\sqrt{3}}{2}";
          }
        else if (Value == -0.707)
          {
            Ans = "y=-\\frac{\\sqrt{2}}{2}";
          }
        else if (Value == -1)
          {
            Ans = "y=-1";
          }
        else if (Value == -0.577)
          {
            Ans = "y=-\\frac{\\sqrt{3}}{3}";
          }
        else if (Value == -1.732)
          {
            Ans = "y=-\\sqrt{3}";
          }
      }
    else if (Value == 0)
      {
        Ans = "y=0";
      }
    else if (Value == 1)
      {
        Ans = "y=1";
      }
    else if (Value > 0)
      {
        if (Value == 0.5)
          {
            Ans = "y=\\frac{1}{2}";
          }
        else if (Value == 0.866)
          {
            Ans = "y=\\frac{\\sqrt{3}}{2}";
          }
        else if (Value == 0.707)
          {
            Ans = "y=\\frac{\\sqrt{2}}{2}";
          }
        else if (Value == 0.577)
          {
            Ans = "y=\\frac{\\sqrt{3}}{3}";
          }
        else if (Value == 1.732)
          {
            Ans = "y=\\sqrt{3}";
          }
      }
  }
</script>

</body>
</html>


<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
c</body>
</html>