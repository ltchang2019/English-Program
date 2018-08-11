<!DOCTYPE html>
<html>
<title>Grace English Program - Student</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html{
  position: relative;
/*  overflow: hidden;
*/}
.input {
      width: 50%;
      position: relative;
      left: 10px;
      max-width: 100%;
      height: 22px;
    }
input[type=password] {
      width: 50%;
      position: relative;
      left: 10px;
//      margin-bottom: 200px;
   //   margin: 20px 0px 20px 0px;
      max-width: 100%;
      height: 22px;
    }
  /*input[type=submit]{
    height: 20px;
    text-align: center;
  }*/

    hr{
      margin-top: 15px; margin-bottom: 15px;
      border-color: silver;
    }
    p{
      margin-top: 5px; margin-bottom: 5px;
    }
    h2{
      margin-top: 5px; margin-bottom: 5px;
    }
    h6{
      margin-top: 3px; margin-bottom: 2px;
    }

    .inputElement {
      margin: 3px 0px;
    }
.w3-third{
      height: 100%;
      float: left;
}

.w3-twothird{
  height: 100%;
  float: left;
}

.sendForm{
  resize: both;
}

#body{
  max-width: 100%;
}
#reportAreaContainer{
    display: flex;
    flex-direction: column;
    min-height: 200px;
}
#questionsContainer{
    display: flex;
    flex-direction: column;
}
#reportArea{
  line-height: 1.5;
  width: 100%;
  margin-top: 20px;
  vertical-align: middle;
}

.democlass{
  color:red;
}

</style>

<script>

    ShowNewProblems();
    createTextMenu();
    showWelcome();
    showGrammarAssignments();
    createGrammarMenu();

    var answer;
    var idVar;
    function submitGrammarAnswers(){
      var url = "submitGrammarAnswers.php";

      var numbSlots = document.getElementById("numbSlots").className;

      url += "?numbSlots=" + numbSlots;

      for(i=1;i<=numbSlots;i++){
        idVar = "grammarSlot" + i;
        answer = document.getElementById(idVar).value;
        url += "&" + idVar + "=" + answer;
      }

      httpGetAsync(url, submitGrammar);
    }

    function submitGrammar(responseText){
      document.getElementById("numbSlots").innerHTML = responseText;
    }

    function showGrammarSlots(){
      var url = "showGrammarSlots.php"; 
      var slotID = document.getElementById("grammarAssignmentMenu").value;

      url += "?slotID=" + slotID;

      httpGetAsync(url, grammarSlots);
    }

    function grammarSlots(responseText){
      document.getElementById("grammarSlotArea").innerHTML = responseText;
    }

    function showGrammarFrame(){
      var url = "showGrammarFrame.php";
      var assignmentID = document.getElementById("grammarAssignmentMenu").value;

       url += "?assignmentID=" + assignmentID;
       httpGetAsync(url, showTextInBox);
    }

    function createGrammarMenu(){
      var url = "createGrammarMenu.php";

      httpGetAsync(url, grammarMenu);
    }

    function grammarMenu(responseText){
      document.getElementById("grammarMenu").innerHTML = responseText; 
    }

    window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
  }

    function showGrammarAssignments(){
      var url = "showNewGrammar.php";

      httpGetAsync(url, showGrammarInBox);
    }

    function showGrammarInBox(responseText){
      document.getElementById("grammarAssignmentArea").innerHTML = responseText; 
    }

    function destroySession(){
      var url = "destroySession.php"; 
        
      httpGetAsync(url, showBlankLogout);
    }

    function showWelcome(){
      var url = "showWelcome.php"; 
        
      httpGetAsync(url, welcomeFunction);
    }


    function welcomeFunction(responseText) {
      document.getElementById("welcomeSection").innerHTML = responseText; 

      // location.reload();

    }

    function getSessionLength(){
        var url = "sessionTime.php";
        httpQuestionAsync(url, showBlankLogout);
    }
    function showBlankLogout(responseText){
      // document.getElementById("questionArea").innerHTML = ""; 
      window.location = "index.html";
    }

    function showAnswerMessage(responseText) {
      document.getElementById("answerMessageContainer").innerHTML = responseText; 
    }

    function showAssignments(responseText) {
      document.getElementById("reportArea").innerHTML = responseText; 
    }

    function showQuestionsInBox(responseText){
      document.getElementById("questionArea").innerHTML = responseText; 
    }

    function httpGetAsync(theUrl, callbackWhenPageLoaded) { 
      var xmlHttp = new XMLHttpRequest();

      xmlHttp.onreadystatechange = function() { 
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
          callbackWhenPageLoaded(xmlHttp.responseText);
      }
      xmlHttp.open("GET", theUrl, true); 
      xmlHttp.send(null);

      // resetFieldStyles();
    }

    var numberOfAnswers;
    function submitAnswer(){
      var missingData = false;
      var url = "SubmitAnswer.php";
      numberOfAnswers = document.getElementById("numbAnswers").className;

      var answers = [];
      var answerID = [];
      for(i=1;i<numberOfAnswers;i++){
        if(missingData==false){
        answers[i] =  document.getElementById("question" + i).value;
        answerID[i] = document.getElementById("question" + i).className;
        if(answers[i]==""){
          missingData=true;
          url += "?missingMessage=" + "Please answer all questions..." + "&missing=" + "true";
        }
        else{
        if(i==1)
          url += "?answer1=" + answers[i] + "&answerID1=" + answerID[i];
        else
          url += "&answer" + i + "=" + answers[i] + "&answerID" + i + "=" + answerID[i];
      
        url += "&numberOfAnswers=" + numberOfAnswers + "&missing=" + "false";
      }
    }
  }
      if(missingData==false){
        document.getElementById("questionArea").innerHTML = "";
        var answerMessageDiv = document.createElement("div");
        answerMessageDiv.setAttribute("id", "answerMessageContainer");
        document.getElementById("questionArea").appendChild(answerMessageDiv);
      }
      httpGetAsync(url, showAnswerMessage);
    }

    function httpQuestionAsync(theUrl, callbackWhenPageLoaded) { 
      var xmlHttp = new XMLHttpRequest();

      xmlHttp.onreadystatechange = function() { 
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
          callbackWhenPageLoaded(xmlHttp.responseText);
      }
      xmlHttp.open("GET", theUrl, true); 
      xmlHttp.send(null);
      // resetFieldStyles();
    }


    function httpDisplayAsync(theUrl, callbackWhenPageLoaded) { 
      var xmlHttp = new XMLHttpRequest();

      xmlHttp.onreadystatechange = function() { 
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
          callbackWhenPageLoaded(xmlHttp.responseText);
      }
      xmlHttp.open("GET", theUrl, true); 
      xmlHttp.send(null);
      // resetFieldStyles();
    }

    function showTextInBox(responseText){
      document.getElementById("bookArea").innerHTML = responseText; 
    }

    function showTextMenu(responseText){
      document.getElementById("textMenu").innerHTML = responseText; 
    }

    function ShowText(){
      var url = "ShowText.php"; 
      var textName = document.getElementById("textMenuID").value;

      url += "?textName=" + textName;

      httpQuestionAsync(url, showTextInBox);
    }

    function createTextMenu(){
      var url = "createTextMenu.php";

      httpGetAsync(url, showTextMenu);
    }

    function ShowNewProblems() {
      
      var url = "ShowNewProblems.php"; 
        
      httpGetAsync(url, showAssignments);
    }

    function SendMessage(){
      var url = "SendMessage.php"; 
      var toUsername = document.getElementById("toUsername").value;
      var fromUsername = document.getElementById("fromUsername").value;
      var subject = document.getElementById("subject").value;
      var body = document.getElementById("body").value;
      
      resetFieldStyles();

      var errorMessage = "Missing data: ";
      var somethingBlank = false;
      if(fromUsername == ""){
        errorMessage += "from";
        somethingBlank = true;
        document.getElementById("fromUsername").style.background = "yellow";
      }

      if(toUsername == "" && somethingBlank == true){
        errorMessage += ", to";
        document.getElementById("toUsername").style.background = "yellow";
      }
      else if(toUsername == ""){
        errorMessage += "to";
        somethingBlank = true;
        document.getElementById("toUsername").style.background = "yellow";
      }

      if(subject == "" && somethingBlank == true){
        errorMessage += ", subject";
        document.getElementById("subject").style.background = "yellow";
      }
      else if(subject == ""){
        errorMessage += "subject";
        somethingBlank = true;
        document.getElementById("subject").style.background = "yellow";
      }

      if(body == "" && somethingBlank == true){
        errorMessage += ", body";
        document.getElementById("body").style.background = "yellow";
      }
      else if(body == ""){
        errorMessage += "body";
        somethingBlank = true;
        document.getElementById("body").style.background = "yellow";
      }

      url += "?fromWho=" + fromUsername + "&toWhom=" + toUsername + "&subject=" + subject + "&body=" + body;

    
      if(errorMessage == "Missing data: ")
        httpGetAsync(url, showResults);
      else{
        alert(errorMessage);
        somethingBlank = false;
        errorMessage = "Missing data: "
      }
    }

    function ShowQuestions(){

      var url = "ShowQuestions.php"; 
      var textName = document.getElementById("textMenuID").value;

      url += "?textName=" + textName;

      httpQuestionAsync(url, showQuestionsInBox);
    }

  </script>


<style>


html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>

<body class="w3-light-grey">


<!-- Page Container -->
<div style="width:100%">

  <!-- The Grid -->
  <div class="w3-row-padding" style="width: 100%">
  
    <!-- Left Column -->
    <div class="w3-third" style="width:38%;">
    
      <div class="w3-white w3-text-grey w3-card-4" style="height: 99vh; overflow: scroll; margin-top: 5px">
        <div class="w3-display-container">

          <h2 style="padding: 0px 2px 0px 10px; margin-bottom: -10px; color: teal"><div id="welcomeSection"></div>

          </h2> 
        </div>

        <div class="w3-container">
          <h6><b>Reading Assignments</b></h6>
          <p>
            <div class="w3-container w3-card w3-white" style="margin-top: 5px; padding-bottom: 15px;" id="reportAreaContainer" >
              <p id="reportArea"></p>
            </div>
          </form>
          </p>
          <hr>


          <h6><b>Reading Homework</b></h6>
          
            Text Name: <div id="textMenu" style="display: inline"></div>
            <form action="javascript:ShowQuestions(); javascript:ShowText();" method="GET">
          <input type="submit" value="View Questions" style="margin-top: 5px">
          </form>
            <div id="questionsContainer">
              <p id="questionArea" style="color: black"></p>
            </div>

          </p>
          <hr>

          <h6><b>Grammar Assignments</b></h6>
          <p>
            <div class="w3-container w3-card w3-white" style="margin-top: 5px; padding-bottom: 15px; padding-top: 15px" id="grammarAssignmentArea" >
              <p id="reportArea"></p>
            </div>
          </form>
          </p>
          <hr>

          <h6><b>Grammar Homework</b></h6>
          
            Text Name: <div id="grammarMenu" style="display: inline"></div>
            <form action="javascript:showGrammarSlots(); javascript:showGrammarFrame();" method="GET">
          <input type="submit" value="View Questions" style="margin-top: 5px">
          </form>
            <div id="grammarSlotsContainer">
              <p id="grammarSlotArea" style="color: black"></p>
            </div>

          </p>
          <hr>

          <!-- <h6><b>Grammar Homework</b></h6>
          
            Text Name: <div id="textMenu" style="display: inline"></div>
            <form action="javascript:ShowQuestions(); javascript:ShowText();" method="GET">
          <input type="submit" value="View Questions" style="margin-top: 5px">
          </form>
            <div id="questionsContainer">
              <p id="questionArea" style="color: black"></p>
            </div>

          </p>
          <hr> -->

          <h6><b>View Results (NOT FINISHED)</b></h6>
          <p>
            <div class="w3-container w3-card w3-white" style="margin-top: 5px; padding-bottom: 15px;" id="reportAreaContainer" >
              <p id="reportArea"></p>
            </div>
          </form>
          </p>
          <form action="javascript:ShowNewProblems();" method="GET">
          <input type="submit" value="View Assignments" style="margin-bottom: 10px">
          </form>
          </p>

        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird" style="width: 61%; margin: 0 auto;">
  
      <div class="w3-container w3-card w3-white" style="margin-top: 5px; height: 99vh;" id="bookContainer" >

          <p id="bookArea"></p>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center">
 
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</body>
</html>

