<!DOCTYPE html>

<html>
<title>Grace English Program - Admin</title>
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
input[type=text] {
      width: 50%;
      position: relative;
      left: 10px;
      max-width: 100%;
      height: 22px;
    }
input[type=url]{
  width: 50%;
  position: relative;
  left: 10px;
  max-width: 100%;
  height: 22px;
}
input[type=password] {
      width: 15%;
      position: absolute;
      left: 150px;
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
    #transparentLayer{
      position: absolute;
      text-align: left;
      left: 0;
      top: 0;
      width: 100%;
      height: 900px;
      z-index: 6;
      opacity: 0.01;
      -moz-opacity: 0.01;
      -khtml-opacity: 0.01;
      filter: alpha(opacity=1);
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
  float: right;
}
.sendForm{
  resize: both;
}
#body{
  max-width: 100%;
}
#realLeftColumn{
  overflow: scroll;
      display: flex;
    flex-direction: column;
    margin-top: 5px;
}
#reportAreaContainer{
    display: flex;
    flex-direction: column;
    min-height: 200px;
}
#questionsContainer{
    display: flex;
    flex-direction: column;
    min-height: 200px;
}
#reportArea{
  line-height: 1.5;
  width: 100%;
  margin-top: 20px;
  vertical-align: middle;
}
.assignmentMessageContainer{
  color: green;
}
.democlass{
  color:red;
}
</style>

<script>
    adminShowAssignments();
    createTextMenu();
    showWelcome();

    window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
  }

     function destroySession(){
      var url = "destroySession.php"; 
        
      httpGetAsync(url, showBlankLogout);
    }
    function showBlankLogout(responseText){
      // document.getElementById("questionArea").innerHTML = ""; 
      window.location = "index.html";
    }

    function showWelcome(){
       var url = "showWelcome.php"; 
        
      httpGetAsync(url, welcomeFunction);
    }

    function welcomeFunction(responseText) {
      document.getElementById("welcomeSection").innerHTML = responseText; 
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
    function httpFieldsAsync(theUrl, callbackWhenPageLoaded) { 
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.onreadystatechange = function() { 
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
          callbackWhenPageLoaded(xmlHttp.responseText);
      }
      xmlHttp.open("GET", theUrl, true); 
      xmlHttp.send(null);
      // resetFieldStyles();
    }
    function addFields(){
          var submitTextName = document.getElementById("adminTextName").value;
          localStorage.setItem("storedTextName", submitTextName);
          var url = "storeNumbQuestions.php";
          var number = document.getElementById("numbQuestions").value;
          url += "?numbQuestions=" + number;
          localStorage.setItem("number", number);
          var container = document.getElementById("fieldContainer");
          while (container.hasChildNodes()) {
              container.removeChild(container.lastChild);
          }
          for (i=0;i<number;i++){
              if(i==0){
                container.appendChild(document.createElement("br"));
              }
              container.appendChild(document.createTextNode("Question " + (i+1)));
               var input = document.createElement("input");
              input.type = "text";
              input.setAttribute("id", ("input" + i));
               container.appendChild(input);
              container.appendChild(document.createElement("br"));
              container.appendChild(document.createElement("br"));
            }
          httpFieldsAsync(url, showBlank);
        }
        function submitQuestions(){
            var submitTextName = document.getElementById("adminTextName").value;
            localStorage.setItem("storedTextName", submitTextName);
            if(localStorage.getItem("storedTextName")!==""){
              var submitTextName = document.getElementById("adminTextName").value;
              localStorage.setItem("storedTextName", submitTextName);
              var storedTextName = localStorage.getItem("storedTextName");
              var storedNumber = localStorage.getItem("number");
              url = "submitQuestions.php";
              var link = document.getElementById("pdfLink").value;
              var blankQuestion = false;
            if(storedNumber == 1){
              for (i=0;i<storedNumber;i++){
                var question1 = document.getElementById("input" + i).value;
                url += "?storedTextName=" + storedTextName + "&numbQuestions=" + storedNumber + "&question1=" + question1 + "&link=" + link;
                if(question1 == "")
                  blankQuestion=true;
              }
            }
            else if(storedNumber == 2){
                for (i=0;i<1;i++){
                  var question1 = document.getElementById("input" + i).value;
                }
                for (i=1;i<2;i++){
                var question2 = document.getElementById("input" + i).value;
              }
              url += "?storedTextName=" + storedTextName + "&numbQuestions=" + storedNumber + "&question1=" + question1 + "&question2=" + question2 + "&link=" + link;
              if(question1 == "" || question2 == "")
                blankQuestion=true;
          }
          else if(storedNumber == 3){
                for (i=0;i<1;i++){
                var question1 = document.getElementById("input" + i).value;
                }
                for (i=1;i<2;i++){
                var question2 = document.getElementById("input" + i).value;
                }
                for (i=2;i<3;i++){
                var question3 = document.getElementById("input" + i).value;
                }
              url += "?storedTextName=" + storedTextName + "&numbQuestions=" + storedNumber + "&question1=" + question1 + "&question2=" + question2 + "&question3=" + question3 + "&link=" + link;
              if(question1 == "" || question2 == "" || question3 == "")
                blankQuestion=true;
          }
          else if(storedNumber == 4){
                for (i=0;i<1;i++){
                var question1 = document.getElementById("input" + i).value;
                }
                for (i=1;i<2;i++){
                var question2 = document.getElementById("input" + i).value;
                }
                for (i=2;i<3;i++){
                var question3 = document.getElementById("input" + i).value;
                }
                for (i=3;i<4;i++){
                var question4 = document.getElementById("input" + i).value;
                }
              url += "?storedTextName=" + storedTextName + "&numbQuestions=" + storedNumber + "&question1=" + question1 + "&question2=" + question2 + "&question3=" + question3 + "&question4=" + question4 + "&link=" + link;
              if(question1 == "" || question2 == "" || question3 == "" || question4 == "")
                blankQuestion=true;
          }
          else if(storedNumber == 5){
                for (i=0;i<1;i++){
                var question1 = document.getElementById("input" + i).value;
                }
                for (i=1;i<2;i++){
                var question2 = document.getElementById("input" + i).value;
                }
                for (i=2;i<3;i++){
                var question3 = document.getElementById("input" + i).value;
                }
                for (i=3;i<4;i++){
                var question4 = document.getElementById("input" + i).value;
                }
                for (i=4;i<5;i++){
                var question5 = document.getElementById("input" + i).value;
                }
              url += "?storedTextName=" + storedTextName + "&numbQuestions=" + storedNumber + "&question1=" + question1 + "&question2=" + question2 + "&question3=" + question3 + "&question4=" + question4 +  "&question5=" + question5 + "&link=" + link;
              if(question1 == "" || question2 == "" || question3 == "" || question4 == "" || question5 == "")
                blankQuestion=true;
            }
            // document.getElementById("adminTextName").value = "";
            // document.getElementById("pdfLink").value = "";
            httpQuestionAsync(url, showAssignmentMessage);
            if(blankQuestion==false){
              document.getElementById("fieldContainer").innerHTML = "";
              document.getElementById("assignmentMessageContainer").innerHTML = "Assignment submitted";
            }
            }
            else{
              alert("Please specify a text name and/or link...");
            }
        }
    function showBlank(responseText){
    }
    function showAssignmentMessage(responseText){
      document.getElementById("assignmentMessageContainer").innerHTML = responseText; 
    }
    function showTextInBox(responseText){
      document.getElementById("bookArea").innerHTML = responseText; 
    }
    function adminShowText(){
      var url = "adminShowText.php"; 
      var textName = document.getElementById("textMenuID").value;
      url += "?textName=" + textName + "&output=embed";
      httpQuestionAsync(url, showTextInBox);
    }
    function adminShowAssignments() {
      
      var url = "adminShowAssignments.php"; 
      var username = "mmcgrath";
        
      httpGetAsync(url, showAssignments);
    }
    // function SendMessage(){
    //   var url = "SendMessage.php"; 
    //   var toUsername = document.getElementById("toUsername").value;
    //   var fromUsername = document.getElementById("fromUsername").value;
    //   var subject = document.getElementById("subject").value;
    //   var body = document.getElementById("body").value;
      
    //   resetFieldStyles();
    //   var errorMessage = "Missing data: ";
    //   var somethingBlank = false;
    //   if(fromUsername == ""){
    //     errorMessage += "from";
    //     somethingBlank = true;
    //     document.getElementById("fromUsername").style.background = "yellow";
    //   }
    //   if(toUsername == "" && somethingBlank == true){
    //     errorMessage += ", to";
    //     document.getElementById("toUsername").style.background = "yellow";
    //   }
    //   else if(toUsername == ""){
    //     errorMessage += "to";
    //     somethingBlank = true;
    //     document.getElementById("toUsername").style.background = "yellow";
    //   }
    //   if(subject == "" && somethingBlank == true){
    //     errorMessage += ", subject";
    //     document.getElementById("subject").style.background = "yellow";
    //   }
    //   else if(subject == ""){
    //     errorMessage += "subject";
    //     somethingBlank = true;
    //     document.getElementById("subject").style.background = "yellow";
    //   }
    //   if(body == "" && somethingBlank == true){
    //     errorMessage += ", body";
    //     document.getElementById("body").style.background = "yellow";
    //   }
    //   else if(body == ""){
    //     errorMessage += "body";
    //     somethingBlank = true;
    //     document.getElementById("body").style.background = "yellow";
    //   }
    //   url += "?fromWho=" + fromUsername + "&toWhom=" + toUsername + "&subject=" + subject + "&body=" + body;
    
    //   if(errorMessage == "Missing data: ")
    //     httpGetAsync(url, showResults);
    //   else{
    //     alert(errorMessage);
    //     somethingBlank = false;
    //     errorMessage = "Missing data: "
    //   }
    // }

    function adminShowQuestions(){
      var url = "adminShowQuestions.php"; 
      var textName = document.getElementById("textMenuID").value;
      url += "?textName=" + textName;
      httpQuestionAsync(url, showQuestionsInBox);
    }

    function createTextMenu(){
      var url = "adminCreateTextMenu.php";

      httpGetAsync(url, showTextMenu);
    }

    function showTextMenu(responseText){
      document.getElementById("textMenu").innerHTML = responseText; 
    }

   function httpGrammarAsync(theUrl, callbackWhenPageLoaded){
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.onreadystatechange = function() { 
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
          callbackWhenPageLoaded(xmlHttp.responseText);
      }
      xmlHttp.open("GET", theUrl, true); 
      xmlHttp.send(null);
      // resetFieldStyles();
    }
    function specifyGrammar(){
      var url = "specifyGrammar.php";
      var numbSections = document.getElementById("numbSections").value;
      var gradeLevel = document.getElementById("gradeLevel").value;

      url += "?numbSections=" + numbSections + "&gradeLevel=" + gradeLevel; 

      httpGrammarAsync(url, createNextGrammar);
    }
    function createNextGrammar(responseText){
      document.getElementById("nextGrammar").innerHTML = responseText; 
    }

    function submitGrammarAssignment(){
      var url = "submitGrammarAssignment.php";
      var gradeLevel = document.getElementById("gradeLevel").value;
      var numbSections = document.getElementById("numbSections").value;

      if(numbSections==1){
        var numbQuestions1 = document.getElementById("numbGrammarQuestions1").value;
        var sectionNumb1 = document.getElementById("sectionNumb1").value;
        var page1 = document.getElementById("grammarPage1").value;
        url += "?numbQuestions1=" + numbQuestions1 + "&sectionNumb1=" + sectionNumb1 + "&page1=" + page1;
      }
      else if (numbSections==2){
        var numbQuestions1 = document.getElementById("numbGrammarQuestions1").value;
        var numbQuestions2 = document.getElementById("numbGrammarQuestions2").value;
        var page1 = document.getElementById("grammarPage1").value;

        var sectionNumb1 = document.getElementById("sectionNumb1").value;
        var sectionNumb2 = document.getElementById("sectionNumb2").value;
        var page2 = document.getElementById("grammarPage2").value;

        url += "?numbQuestions1=" + numbQuestions1 + "&numbQuestions2=" + numbQuestions2 + "&sectionNumb1=" + sectionNumb1 + "&sectionNumb2=" + sectionNumb2 + "&page1=" + page1 + "&page2=" + page2;
      }
      else if (numbSections==3){
        var numbQuestions1 = document.getElementById("numbGrammarQuestions1").value;
        var numbQuestions2 = document.getElementById("numbGrammarQuestions2").value;
        var numbQuestions3 = document.getElementById("numbGrammarQuestions3").value;

        var sectionNumb1 = document.getElementById("sectionNumb1").value;
        var sectionNumb2 = document.getElementById("sectionNumb2").value;
        var sectionNumb3 = document.getElementById("sectionNumb3").value;

        var page1 = document.getElementById("grammarPage1").value;
        var page2 = document.getElementById("grammarPage2").value;
        var page3 = document.getElementById("grammarPage3").value;

        url += "?numbQuestions1=" + numbQuestions1 + "&numbQuestions2=" + numbQuestions2 + "&numbQuestions3=" + numbQuestions3 + "&sectionNumb1=" + sectionNumb1 + "&sectionNumb2=" + sectionNumb2 + "&sectionNumb3=" + sectionNumb3 + "&page1=" + page1 + "&page2=" + page2 + "&page3=" + page3;
      }
      else if (numbSections==4){
        var numbQuestions1 = document.getElementById("numbGrammarQuestions1").value;
        var numbQuestions2 = document.getElementById("numbGrammarQuestions2").value;
        var numbQuestions3 = document.getElementById("numbGrammarQuestions3").value;
        var numbQuestions4 = document.getElementById("numbGrammarQuestions4").value;

        var sectionNumb1 = document.getElementById("sectionNumb1").value;
        var sectionNumb2 = document.getElementById("sectionNumb2").value;
        var sectionNumb3 = document.getElementById("sectionNumb3").value;
        var sectionNumb4 = document.getElementById("sectionNumb4").value;

        var page1 = document.getElementById("grammarPage1").value;
        var page2 = document.getElementById("grammarPage2").value;
        var page3 = document.getElementById("grammarPage3").value;
        var page4 = document.getElementById("grammarPage4").value;


        url += "?numbQuestions1=" + numbQuestions1 + "&numbQuestions2=" + numbQuestions2 + "&numbQuestions3=" + numbQuestions3 + "&numbQuestions4=" + numbQuestions4 + "&sectionNumb1=" + sectionNumb1 + "&sectionNumb2=" + sectionNumb2 + "&sectionNumb3=" + sectionNumb3 + "&sectionNumb4=" + sectionNumb4 + "&page1=" + page1 + "&page2=" + page2 + "&page3=" + page3 + "&page4=" + page4;
      }
      else if (numbSections==5){
        var numbQuestions1 = document.getElementById("numbGrammarQuestions1").value;
        var numbQuestions2 = document.getElementById("numbGrammarQuestions2").value;
        var numbQuestions3 = document.getElementById("numbGrammarQuestions3").value;
        var numbQuestions4 = document.getElementById("numbGrammarQuestions4").value;
        var numbQuestions5 = document.getElementById("numbGrammarQuestions5").value;

        var sectionNumb1 = document.getElementById("sectionNumb1").value;
        var sectionNumb2 = document.getElementById("sectionNumb2").value;
        var sectionNumb3 = document.getElementById("sectionNumb3").value;
        var sectionNumb4 = document.getElementById("sectionNumb4").value;
        var sectionNumb5 = document.getElementById("sectionNumb5").value;

        var page1 = document.getElementById("grammarPage1").value;
        var page2 = document.getElementById("grammarPage2").value;
        var page3 = document.getElementById("grammarPage3").value;
        var page4 = document.getElementById("grammarPage4").value;
        var page5 = document.getElementById("grammarPage4").value;

        url += "?numbQuestions1=" + numbQuestions1 + "&numbQuestions2=" + numbQuestions2 + "&numbQuestions3=" + numbQuestions3 + "&numbQuestions4=" + numbQuestions4 + "&numbQuestions5=" + numbQuestions5 + "&sectionNumb1=" + sectionNumb1 + "&sectionNumb2=" + sectionNumb2 + "&sectionNumb3=" + sectionNumb3 + "&sectionNumb4=" + sectionNumb4 + "&sectionNumb5=" + sectionNumb5 + "&page1=" + page1 + "&page2=" + page2 + "&page3=" + page3 + "&page4=" + page4 + "&page5=" + page5;
      }

      url += "&numbSections=" + numbSections + "&gradeLevel=" + gradeLevel;
 
      httpGrammarAsync(url, submitGrammar);
    }
    function submitGrammar(responseText){
      document.getElementById("grammarMessage").innerHTML = responseText; 
    }

    // function submitGrammarQuestions(){
    //   var url = "submitGrammarQuestions.php";

  </script>



<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div style="width:100%;">


  <!-- The Grid -->
  <div class="w3-row-padding" style="width: 100%">
  
    <!-- Left Column -->
    <div class="w3-third" style="width:38%" id="leftColumn">
    
      <div class="w3-white w3-text-grey w3-card-4" style="height: 99vh" id="realLeftColumn">
        <div class="w3-display-container">

          <h2 style="padding: 0px 2px 0px 10px; margin-bottom: -10px; color: teal"><b>
          <div id="welcomeSection">
          </b> <a href="index.html"><img src="logout.png" style="float: right; margin-right: 15px; margin-top: 10px; width:40px; height:35px;"></a> </h2>
        </div>

        <div class="w3-container">
          <h6><b>Pending Assignments</b></h6>
          <p>
            <div class="w3-container w3-card w3-white" style="margin-top: 5px; padding-bottom: 15px;" id="reportAreaContainer" >
              <p id="reportArea"></p>
            </div>
          </form>
          </p>

          <hr>

          <h6><b>View Readings, Questions, and Answers</b></h6>
          
          Text Name: <div id="textMenu" style="display: inline"></div>
            <div class="w3-container w3-card w3-white" style="padding-bottom: 10px; margin-top: 10px" id="questionsContainer">
              <p id="questionArea" style="margin-top: 10px"></p>
            </div>
          </form>
          </p>

          <form action="javascript:adminShowQuestions(); javascript:adminShowText();" method="GET">
          <input type="submit" value="View Responses" style="margin-top: 5px">
          </form>
          </p>
          <hr>

          <h6><b>Assign Reading Homework</b></h6>
            
            <div class="inputElement">Text Name: <input class = "input" type="text" name="subject"; id="adminTextName"></div>
            <div class="inputElement">PDF Link: <input class = "input" type="url" name="subject"; id="pdfLink"></div>
            
            Number of Questions
            <select id="numbQuestions">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <form action="javascript:addFields();" method="GET">
            <input type="submit" value="Choose Number of Questions" style="margin-top: 4px; margin-bottom: 3px;">
    
            </form>

            <form action="javascript:submitQuestions();" method="GET">
              <div id="fieldContainer"/></div>
            
            <input type="submit" value="Submit Assignment" onclick="document.getElementsByClassName('inputElement').value = '' "><div id="assignmentMessageContainer"></div>
            <hr style="margin-top: 15px; margin-bottom: 10px">
          </form>

            <h6><b>Assign Grammar Homework (NOT FINISHED)</b></h6>
            
            Grammar Grade Level  
            <select id="gradeLevel">
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <br>

            Number of Sections
            <select id="numbSections">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>

            <!-- <div class="inputElement">Instructions: <br><textarea class = "input" rows="2" cols="34" name="body" placeholder="Page numbers, questions, etc... "; style="margin-bottom: -5px" id="body"></textarea></div> -->
            
            <form action="javascript:specifyGrammar();" method="GET">
            <input type="submit" value="Specify Instructions" style="margin-top: 3px" id="grammarAssignButton">
            </form>

            <div id="nextGrammar"></div>

            <form action="javascript:submitGrammarAssignment();" method="GET">
            <input type="submit" value="Submit Assignment" style="margin-top: 3px">
            </form>

            <div id="grammarMessage"></div>
          


          <!-- DUNNO WHAT THIS IS BUT IT STAYS -->
          </div> 
          </p>
          

          <!-- <h6><b>Ask Tutors Questions</b></h6>
          <p><form action="javascript:SendMessage();" method="GET">  -->
          <!--   <div class="inputElement">Subject: <input class = "input" type="text" name="subject" placeholder="subject: "; id="subject"></div>  -->
            <!-- <div class="inputElement"></div> -->

            <!-- <textarea class = "input" rows="2" cols="34" name="body" placeholder="Message... "; style="margin-bottom: -5px" id="body"></textarea> -->
        
         <!-- THIS NEEDS TO STAY -->
          </div> 


    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird" style="width: 61%; margin: 0 auto;">
  
      <div class="w3-container w3-card w3-white" style="margin-top: 5px; height: 99vh;" id="bookContainer" >
        <div class="transparentLayer"></div>

          <p id="bookArea"></p>
      </div>
    

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
 
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</body>
</html>
