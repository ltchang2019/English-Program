

//Copyright (c) 2014 Tan Huynh
//Permission is hereby granted, free of charge, to any person obtaining
//a copy of this software and associated documentation files (the
//"Software"), to deal in the Software without restriction, including
//without limitation the rights to use, copy, modify, merge, publish,
//distribute, sublicense, and/or sell copies of the Software, and to
//permit persons to whom the Software is furnished to do so, subject to
//the following conditions:
//The above copyright notice and this permission notice shall be
//included in all copies or substantial portions of the Software.
//THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
//EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
//MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
//NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
//LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
//OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
//WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

//Teacher Email List
var LName;
var TeacherEmailList = ["Huynh","tan.huynh@oclassrooms.com",
						"Krueger","kruegerr@cajonvalley.net",
						"Brook","brookst@cajonvalley.net",
						"Walsh","walsha@cajonvalley.net",
						"Plumb","plumbp@cajonvalley.net",
						"Quach","tquach@kingchavez.org",
						"Hammi","dhammi@guhsd.net",
						"Anker","julia.anker@sweetwaterschools.org"]

function MakeDatalist()
	{
		for (var i = 0; i < TeacherEmailList.length; i = i+2)
			{
				var Opt = document.createElement("option");
				Opt.value = TeacherEmailList[i];
				document.getElementById("TeacherList").appendChild(Opt);
			}
	}
function TeacherEmail(LName)
	{
		for (var i = 0; i <= TeacherEmailList.length; i++)
			{
				if (LName == TeacherEmailList[i])
					{
						document.getElementById("Teachers").value = TeacherEmailList[i+1];
						break;
					}
				else
					{
						document.getElementById("Teachers").setAttribute("placeholder", "Teacher not found. Enter email here.");
					}
			}
	}

//Problem Function
var Alpha = ["a","b","c","d","e","f","g","h","i","j","k","m","n","p","q","r","s","t","u","v","w","x","y","z"];
var Bet;
var Prime = [2,3,5,7,11,13];
var Ans = "";
var Ans1 = "";
var Ans2 = "";
var AnsA;
var Ans1A;
var Ans2A;
var studAns;
var Right = 0;
var Total = 0;
var Percent = 0;
var R;
var Z;
var RawAns;
var mathFieldSpan = document.getElementById('MathField');
var latexSpan = document.getElementById('Latex');
var problemSpan = document.getElementById('Problem');

function Correct(e)
	{
		if (Ans == "-Infinity" || Ans == "Infinity")
			{
				Ans = "undefined";
			}
		RawAns = Ans;
		if (String(Ans).indexOf(" ") > 0)
			{
				Ans = Ans.split(" ").join("");
				Ans1 = Ans1.split(" ").join("");
				Ans2 = Ans2.split(" ").join("");
			}
		studAns = document.getElementById("Latex").innerHTML;
		studAns = studAns.split(" ").join("");
		if (!!studAns)
			{			
				if (Ans == studAns || Ans1 == studAns || Ans2 == studAns)
					{
						document.getElementById("Feedback").innerHTML = "Correct!";
						ClearAns();
						newProb();
						AddOne();
						Stats();
						EmailReady();
					}
				else
					{
						document.getElementById("Feedback").innerHTML = "Try again!";
						ShowAnswer();
					}
				FadeOut();
			}
	}
function ShowAnswer()
	{
		document.getElementById("AnswersContainer").hidden = false;
		document.getElementById("Answer").hidden = true;
		correctSpan.innerHTML = Ans;
		MQ.StaticMath(correctSpan);
		document.getElementById("TypedAnswer").innerHTML = document.getElementById("Latex").innerHTML;
		typedSpan = document.getElementById("TypedAnswer");
		MQ.StaticMath(typedSpan);
		document.getElementById("Format").hidden = true;
		document.getElementById("NextButton").hidden = true;
		setTimeout(ButtonDelay, 2000);
	}
function ButtonDelay()
	{
		document.getElementById("NextButton").hidden = false;
	}
function NextProblem()
	{
		document.getElementById("AnswersContainer").hidden = true;
		document.getElementById("Answer").hidden = false;
		document.getElementById("Format").hidden = false;
		mathField.select();
		mathField.latex("");
		R = R - 1;
		Z = Z - 1;
		Stats();
		ClearAns();
		newProb();
	}
function CorrectGraph()
	{
		if (Ans == "-Infinity" || Ans == "Infinity")
			{
				Ans = "undefined";
			}
		if (!!studAns)
			{
				if (Ans == studAns || Ans1 == studAns || Ans2 == studAns)
					{
						document.getElementById("Feedback").innerHTML = "Correct!";
						ClearCanvas();
						ClearAns();
						newProb();
						AddOne();
						Stats();
						EmailReady();
					}
				else
					{
						document.getElementById("Feedback").innerHTML = "Try again!";
						PlotCorrectPoint(A,B);
						PlotLetter("!",A,B);
						document.getElementById("NextGraph").hidden = false;
						document.getElementById("Submit").hidden = true;
						R = R - 1;
						Z = Z - 1;
						Stats();
						ClearAns();
					}
				FadeOut();
			}
	}
function CorrectLinearGraph()
	{
		if (!!studAns)
			{
				if (Ans == studAns || Ans1 == studAns || Ans2 == studAns)
					{
						document.getElementById("Feedback").innerHTML = "Correct!";
						ClearCanvas();
						ClearAns();
						newProb();
						AddOne();
						Stats();
						EmailReady();
					}
				else
					{
						document.getElementById("Feedback").innerHTML = "Try again!";
						document.getElementById("NextGraph").hidden = false;
						document.getElementById("Submit").hidden = true;
						GraphCorrectLinear();
						R = R - 1;
						Z = Z - 1;
						Stats();
						ClearAns();
					}
				FadeOut();
			}
	}
var Slope;
function GraphCorrectLinear()
	{
		if (Slope == "undefined")
			{
				x1 = B;
				y1 = 0;
				x2 = B;
				y2 = 1;
				Graph2Points(x1,y1,x2,y2);
			}
		else
			{
				x1 = 0;
				x2 = 1;
				y1 = Slope*x1 + B;
				y2 = Slope*x2 + B;
				Graph2Points(x1,y1,x2,y2);
			}
	}
function CorrectQuadraticGraph()
	{
		if (!!studAns)
			{
				if (Ans == studAns || Ans1 == studAns || Ans2 == studAns)
					{
						document.getElementById("Feedback").innerHTML = "Correct!";
						ClearCanvas();
						ClearAns();
						newProb();
						AddOne();
						Stats();
						EmailReady();
					}
				else
					{
						document.getElementById("Feedback").innerHTML = "Try again!";
						document.getElementById("Submit").style.display = "none";
						document.getElementById("NextGraph").hidden = false;
						document.getElementById("Submit").hidden = true;
						GraphCorrectQuadratic();
						R = R - 1;
						Z = Z - 1;
						Stats();
						ClearAns();
					}
				FadeOut();
			}
	}
var Slope;
function GraphCorrectQuadratic()
	{
		GraphQuadEQVertex(A,H,K);
	}
function CorrectSelectGraph()
	{
		if (Ans == "-Infinity" || Ans == "Infinity")
			{
				Ans = "undefined";
			}
		studAns = document.getElementById("Selection").value;
		if (!!studAns)
			{
				if (Ans == studAns || Ans1 == studAns || Ans2 == studAns)
					{
						document.getElementById("Feedback").innerHTML = "Correct!";
						document.getElementById("Selection").selectedIndex = 0;
						ClearCanvas();
						ClearAns();
						newProb();
						AddOne();
						Stats();
						EmailReady();
					}
				else
					{
						document.getElementById("Feedback").innerHTML = "Try again!";
						document.getElementById("Selection").selectedIndex = 0;
						alert("Correct answer is: " + Ans);
						R = R - 1;
						Z = Z - 1;
						Stats();
						ClearAns();
						newProb();
					}
				FadeOut();
			}
	}
function CorrectSelect()
	{
		if (Ans == "-Infinity" || Ans == "Infinity")
			{
				Ans = "undefined";
			}
		studAns = document.getElementById("Selection").value;
		if (!!studAns)
			{
				if (Ans == studAns || Ans1 == studAns || Ans2 == studAns)
					{
						document.getElementById("Feedback").innerHTML = "Correct!";
						document.getElementById("Selection").selectedIndex = 0;
						ClearAns();
						newProb();
						AddOne();
						Stats();
						EmailReady();
					}
				else
					{
						document.getElementById("Feedback").innerHTML = "Try again!";
						document.getElementById("Selection").selectedIndex = 0;
						alert("Correct answer is: " + Ans);
						R = R - 1;
						Z = Z - 1;
						Stats();
						ClearAns();
						newProb();
					}
				FadeOut();
			}
	}
function ClearAns()
	{
		Ans = "";
		Ans1 = "";
		Ans2 = "";
		studAns = "";
		mathField.latex("");
		mathField.focus();
		TeX = "";
		document.getElementById("Format").innerHTML = "";
	}
function ProblemCode()
	{
		document.getElementById("Code").innerHTML = document.title + " " + Z;
	}
function RandomNumber(min, max)
	{
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}

//Stats Function
function AddOne()
	{
		Right = Right + 1;
	}
function Stats()
	{
		Total = Total + 1;
		Percent = Math.floor(Right/Total * 100);
		document.getElementById("OutOf").innerHTML = Right + "  out of  " + Total + "   -   " + Percent + "%";
		if (Right >= 20)
			{
				document.getElementById("StatsTitle").style.background = "green";
			}
		else 
			{
				document.getElementById("StatsTitle").style.background = "white";
			}
	}
var statElement;
var StopTime;
function EmailReady()
	{
		statElement = document.getElementById("Ready");
		if (Right >= 20)
			{
				statElement.innerHTML = "Ready - Click Me";
				statElement.style.color = "green";
				statElement.style.fontWeight = "900";
				statElement.style.textDecoration = "blink";
				StopTime = document.getElementById("minutes").innerHTML + ":" + document.getElementById("seconds").innerHTML;
				document.getElementById("Container").hidden = true;
				document.getElementById("KeyPadArea").hidden = true;
				document.getElementById("ActionKeys").hidden = true;
				document.getElementById("TimeComplete").innerHTML = "COMPLETE! Time = " + StopTime;
			}
		else
			{
				statElement.innerHTML = "Not Ready";
				statElement.style.color = "white";
				statElement.style.fontWeight = "900";
				statElement.style.textDecoration = "none";
			}
	}
function DisplayContact()
	{
		if (Right >= 20)
			{
				document.getElementById("ProblemArea").hidden = true;
				document.getElementById("Time").value = StopTime;
				document.getElementById("Stats").value = Percent + "%";
				document.getElementById("Email").style.display = "block";
				document.getElementById("StatsArea").hidden = true;
			}
		else
			{
				document.getElementById("Ready").innerHTML = "Please meet your goals!";
			}
	}
function showEmail()
	{
		document.getElementById("OtherEmail").style.display = "block";
	}


//Feedback Function
var element;
function SetOpa(Opa) 
	{
		element.style.opacity = Opa;
		element.style.MozOpacity = Opa;
		element.style.KhtmlOpacity = Opa;
		element.style.filter = 'alpha(opacity=' + (Opa * 100) + ');';
	}

function FadeOut() 
	{
		element = document.getElementById("Feedback");
		var duration = 1000;
		for (i = 0; i <= 1; i += 0.01) 
			{
				setTimeout("SetOpa(" + (1 - i) +")", i * duration);
			}
	}

function RemBut()
	{
		document.getElementById("Submit").hidden = true;
	}
//Keyboard Functions/Listeners
document.onkeypress = EnterKey;
function EnterKey(e)
	{
		var q = e.keyCode;
		var r = e.which;
		if (document.getElementById("Answer").hidden == false)
			{
				if (q === 13)
					{
						Correct();
					}
			}
		if (document.getElementById("NextButton").hidden == false && document.getElementById("AnswersContainer").hidden == false)
			{
				if (q === 13)
					{
						NextProblem();
					}
			}
		if (q === 8)
			{
				if (document.activeElement.tagName == "SPAN" || document.activeElement.tagName == "INPUT")
					{
						return true;
					}
				else
					{
						return false;
					}
			}
	}
function DollarCorrect(e)
	{
		var q = e.keyCode;
		var r = e.which;
		if (r == 52 && e.shiftKey)
			{
				document.getElementById("buttonDollar").click();
				document.getElementById("buttonDollar").click();
			}
	}
function Symbol(e)
	{
		if (e == "$")
			{
				mathField.latex("\\$");
			}
		else
			{
				mathField.cmd(e);
				mathField.focus();
			}
	}
	
//Input Functions
function Clear()
	{
		mathField.latex("");
	}
function Delete()
	{
		mathField.keystroke("Backspace");
	}
function InputFocus()
	{
		mathField.focus();
	}
function showProblem()
	{
		document.getElementById("MathInput").onchange();
	}

//Timer Function
function Timer()
	{
        var minutesLabel = document.getElementById("minutes");
        var secondsLabel = document.getElementById("seconds");
        var totalSeconds = 0;
        setInterval(setTime, 1000);

        function setTime()
        {
            ++totalSeconds;
            secondsLabel.innerHTML = pad(totalSeconds%60);
            minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
        }

        function pad(val)
        {
            var valString = val + "";
            if(valString.length < 2)
            {
                return "0" + valString;
            }
            else
            {
                return valString;
            }
        }
	}

//Reduce Fraction Function
var Top;
var Bottom;
var NumF;
var Whole;
var Den;
var AnswerF;
var a;
var wholeNum;
var Fraction;

function ReduceF(Top,Bottom)
	{
		if (Bottom == 0)
			{
				Fraction = "undefined";
			}
		else
			{
				AnswerF = Top / Bottom;
				SimplifyF(Top,Bottom);
			}
	}
function SimplifyF(Top,Bottom)
	{
		if (Math.floor(AnswerF) == AnswerF)
			{
				Fraction = AnswerF;
				TexFraction = Fraction;
				NumF = AnswerF;
				Den = 1;
				return;
			}
		else
			{
				if (Top < 0)
					{
						Top = Math.abs(Top);
						for (a = Top; a > 1; a--)
							{
								NumF = Top/a;
								Den = Bottom/a;
								if (Math.floor(NumF) == NumF && Math.floor(Den) == Den)
									{
										NumF = -NumF;
										showFrac();
										return;
									}
							}
						Top = -Top;
					}
				else 
					{
						for (a = Top; a > 1; a--)
							{
								NumF = Top/a;
								Den = Bottom/a;
								if (Math.floor(NumF) == NumF && Math.floor(Den) == Den)
									{
										showFrac();
										return;
									}
							}
					}
				NumF = Top;
				Den = Bottom;
				showFrac();
				return;
			}
	}
var TexFraction;
function showFrac()
	{
		if (Den == 0)
			{
				Fraction = "undefined";
			}
		else if (Den < 0 && NumF < 0)
			{
				Den = -Den;
				NumF = -NumF;
				Fraction = "\\frac{" + NumF + "}{" + Den + "}";
				TexFraction = "\\frac" + NumF + "}{" + Den + "}";
			}
		else if(Den < 0 && NumF > 0)
			{
				Den = -Den;
				Fraction = "-\\frac{" + NumF + "}{" + Den + "}";
				NumF = -NumF;
				TexFraction = "\\frac" + NumF + "}{" + Den + "}";
			}
		else if (Den == 1)
			{
				Den = "";
				Fraction = NumF;
				TexFraction = NumF;
			}
		else if (Den == 0 && NumF == 0)
			{
				Fraction = "undefined";
			}
		else if (NumF < 0 && Den > 0)
			{
				NumF = -NumF;
				Fraction = "-\\frac{" + NumF + "}{" + Den + "}";
				TexFraction = "\\frac" + NumF + "}{" + Den + "}";
			}
		else
			{
				Fraction = "\\frac{" + NumF + "}{" + Den + "}";
				TexFraction = "\\frac" + NumF + "}{" + Den + "}";
			}
	}


//Common Number Functions
var a;
var b;
var i;
var j = 1;
var hold;
var rem1;
var rem2;
function LCM(a,b)
	{
		if (a == b)
			{
				Multiple = a;
			}
		else if (a == 1)
			{
				Multiple = b;
			}
		else if (b == 1)
			{
				Multiple = a;
			}
		else if (a == 0 || b == 0)
			{
				Multiple = 0;
			}
		else
			{
				if (a > b)
					{
						hold = a;
						a = b;
						b = hold;
					}
				for (i = 1; (b*i) > a; i++)
					{
						hold = b*i % a;
						if (hold == 0)
							{
								Multiple = b*i;
								break;
							}
					}
			}
	}
function GCF(a,b)
	{
		if (a == 1 || b == 1)
			{
				Factor = 1;
				stop;
			}
		else if (a > b)
			{
				hold = a;
				a = b;
				b = hold;
			}
		hold = b % a;
		if (hold == 0)
			{
				Factor = a;
			}
		else 
			{
				for (i = a; i >=1; i--)
					{
						rem1 = b % i;
						rem2 = a % i;
						if (rem1 == 0 && rem2 == 0)
							{
								Factor = i;
								break;
							}
					}
			}
	}
//Square Root Functions
var Rad1;
var RedRad;
var Radicand;
var r;
function ReduceR(Rad)
	{
		if (Math.sqrt(Rad) == Math.floor(Math.sqrt(Rad)))
			{
				RedRad = Math.sqrt(Rad);
				r = RedRad;
			}
		else
			{
				Rad1 = parseInt(Math.sqrt(Rad));
				for (r = Rad1; r > 0; r--)
					{
						if ((Rad/(r*r)) == parseInt(Rad/(r*r)))
							{
								if (r == 1)
									{
										RedRad = "\\sqrt{" + parseInt(Rad/(r*r)) + "}";
										Radicand = parseInt(Rad/(r*r));
									}
								else
									{
										RedRad = r + "\\sqrt{" + parseInt(Rad/(r*r)) + "}";
										Radicand = parseInt(Rad/(r*r));
										break;
									}
							}
					}
				
			}
	}
//Statistics and Probability Functions
var Set = [];
var n;
function GenerateSet(N,Low,Hi)
	{
		Set = [];
		for (var i = 1; i <= N; i++)
			{
				n = RandomNumber(Low,Hi);
				Set.push(n);
			}
	}
var Total;
var Avg;
function Average(Set)
	{
		Total = 0;
		for (var i = 0; i < Set.length; i++)
			{
				Total = (Total+Set[i]);
			}
		Avg = Math.round(Total/(Set.length)*10)/10;
	}
var Sum;
function SumSet(Set)
	{
		Sum = 0;
		for (var i = 0; i < Set.length; i++)
			{
				Sum = (Sum+Set[i]);
			}
	}
function ArithmeticSet(a1,D,N)
	{
		Set = [];
		for (var i = 0; i < N; i++)
			{
				Set.push(a1+i*D);
			}
	}
function GeometricSet(a1,r,N)
	{
		Set = [];
		for (var i = 1; i <= N; i++)
			{
				Set.push(a1*Math.pow(r,i-1));
			}
	}
//Counting and Probability Functions
var Top;
var Bottom;
var C;
function Combination(A,B)
	{
		Top = A;
		Bottom = B;
		for (var i = 1; i < B; i++)
			{
				Top = Top*(A-i);
			}
		for (var i = B-1; i > 1; i--)
			{
				Bottom = Bottom*i;
			}
		C = Math.round((Top/Bottom)*1)/1;
	}
var P;
function Permutation(A,B)
	{
		P = A;
		for (var i = 1; i < B; i++)
			{
				P = P*(A-i);
			}
		
	}
var F;
function Factorial(N)
	{
		for (var i = N-1; i > 1; i--)
			{
				N = N * i;
			}
		F = N;
	}
var Count;
function MultiplesOf(M,Set)
	{
		Count = 0;
		for (var i = 1; i <= Set.length; i++)
			{
				if ((i % M) == 0)
					{
						Count = Count + 1;
					}
			}
	}
//Prime Function
var Prime;
function IfPrime(N)
	{
		Prime = "";
		var N = N;
		if (N == 1)
			{
				Prime = "no";
			}
		else if (N == 2)
			{
				Prime = "yes";
			}
		else
			{
				for (i = 2; i < N; i++)
					{
						if (N % i == 0)
							{
								Prime = "no";
								break;
							}
						else 
							{
								Prime = "yes";
							}
					}
			}
	}
//Converting Equations and Displaying Equations
var a;
var b;
var c;
var h;
var k;
var H;
var K
var A;
function DisplayQuadEQVertexForm(A,H,K)
	{
		if (H === 0)
			{
				h = "";
			}
		else if (H < 0)
			{
				h = "+" + -H;
			}
		else
			{
				h = -H;
			}
		if (K === 0)
			{
				k = "";
			}
		else if (K > 0)
			{
				k = "+" + K;
			}
		else
			{
				k = K;
			}
		if (A === 1)
			{
				a = "";
			}
		else if (A === -1)
			{
				a = "-";
			}
		else if (A > 1 || A < -1)
			{
				a = A;
			}
		else if (A ==! Math.floor(A) && A < 0)
			{
				ReduceF(1,1/A);
				a = "-" + Fraction;
			}
		else
			{
				ReduceF(1,1/A);
				a = Fraction;
			}
		if (H === 0)
			{
				TeX = "f(x)=" + a + "x^2" + k;
			}
		else
			{
				TeX = "f(x)=" + a + "(x" + h + ")^2" + k;
			}
	}
function DisplayQuadEQVertexToStandardForm(A,H,K)
	{
		b = -2*H*A;
		c = A*H*H + K;
		if (A === 1)
			{
				a = "";
			}
		else if (A === -1)
			{
				a = "-";
			}
		else if (A > 1 || A < -1)
			{
				a = A;
			}
		else if (A ==! Math.floor(A) && A < 0)
			{
				ReduceF(1,1/A);
				a = "-" + Fraction;
			}
		else
			{
				ReduceF(1,1/A);
				a = Fraction;
			}
		if (b === 1)
			{
				b = "";
			}
		else if (b === -1)
			{
				b = "-";
			}
		else if (b > 0)
			{
				b = "+" + b;
			}
		else
			{
				b = b;
			}
		if (c === 0)
			{
				c = "";
			}
		else if (c > 0)
			{
				c = "+" + c;
			}
		else 
			{
				c = c;
			}
		if (b == "" && c == "")
			{
				TeX = "f(x) = " + a + "x^2";
			}
		else if (b == "" && c ==! "")
			{
				TeX = "f(x) = " + a + "x^2 " + c;
			}
		else if (b ==! "" && c == "")
			{
				TeX = "f(x) = " + a + "x^2" + b + "x";
			}
		else
			{
				TeX = "f(x) = " + a + "x^2" + b + "x" + c;
			}
	}



//Graph Elements and Functions
var Graph;
var Grid;
var yInt;
function ClearCanvas()
	{
		Graph = document.getElementById("Graph");
		Grid = Graph.getContext("2d");
		Grid.clearRect(0,0,Graph.width,Graph.height);
	}
		
function GenerateGrid(x,y)
	{
		ResetConstruct();
		Graph = document.getElementById("Graph");
		Grid = Graph.getContext("2d");
		Grid.fillStyle = "#FFFFFF";
		Grid.fillRect(0,0,400,400);
		
		for (var v = 1; v < 20; v++)
			{
				Vert = v*20;
				Grid.beginPath();
				Grid.moveTo(Vert,0);
				Grid.lineTo(Vert,400);
				Grid.lineWidth = "1";
				Grid.strokeStyle = "#00FFFF";
				Grid.stroke();
			}
		for (var h = 1; h < 20; h++)
			{
				Hor = h*20;
				Grid.beginPath();
				Grid.moveTo(0,Hor);
				Grid.lineTo(400,Hor);
				Grid.lineWidth = "1";
				Grid.strokeStyle = "#00FFFF";
				Grid.stroke();
			}
		for (var ty = 1; ty < 20; ty++)
			{
				Vert = ty*20;
				Grid.beginPath();
				Grid.moveTo(195,Vert);
				Grid.lineTo(205,Vert);
				Grid.lineWidth = "1";
				Grid.strokeStyle = "#000000";
				Grid.stroke();
			}
		for (var tx = 1; tx < 20; tx++)
			{
				Hor = tx*20;
				Grid.beginPath();
				Grid.moveTo(Hor,195);
				Grid.lineTo(Hor,205);
				Grid.lineWidth = "1";
				Grid.strokeStyle = "#000000";
				Grid.stroke();
			}
		Grid.beginPath();
		Grid.moveTo(200,0);
		Grid.lineTo(200,400);
		Grid.strokeStyle = "#000000";
		Grid.lineWidth = "3";
		Grid.stroke();
		
		Grid.beginPath();
		Grid.moveTo(0,200);
		Grid.lineTo(400,200);
		Grid.strokeStyle = "#000000";
		Grid.lineWidth = "3";
		Grid.stroke();
		
		Grid.font = "italic 24px Times New Roman";
		Grid.fillStyle = "#000000";
		Grid.fillText(y,205,15);
		Grid.fillText(x,390,195);
		Grid.fillText("-5",90,225);
		Grid.fillText("5",295,225);
		Grid.fillText("5",180,110);
		Grid.fillText("-5",175,310);
	}
var mx;
var my;
var b;
function GraphFunction(my,mx,b)
	{
		Graph = document.getElementById("Graph");
		Grid = Graph.getContext("2d");
		yInt = 200 - (b * 20);
		for (var LR = 1; LR < 10; LR++)
			{
				Grid.beginPath();
				Grid.moveTo(200,yInt);
				Grid.lineTo(200 + mx*LR*20, yInt - my*LR*20);
				Grid.strokeStyle = "#FF0000";
				Grid.lineWidth = "1";
				Grid.stroke();
			}
		for (var LL = 1; LL < 10; LL++)
			{
				Grid.beginPath();
				Grid.moveTo(200,yInt);
				Grid.lineTo(200 - mx*LL*20, yInt + my*LL*20);
				Grid.strokeStyle = "#FF0000";
				Grid.lineWidth = "1";
				Grid.stroke();
			}
	}
function GraphVertical(x)
	{
		Graph = document.getElementById("Graph");
		Grid = Graph.getContext("2d");
		Grid.beginPath();
		Grid.moveTo(200 + x*20,0);
		Grid.lineTo(200 + x*20,400);
		Grid.strokeStyle = "#FF0000";
		Grid.lineWidth = "3";
		Grid.stroke();
	}
function GraphHorizontal(y)
	{
		Graph = document.getElementById("Graph");
		Grid = Graph.getContext("2d");
		Grid.beginPath();
		Grid.moveTo(0,200 + y*20);
		Grid.lineTo(400,200 + y*20);
		Grid.strokeStyle = "#FF0000";
		Grid.lineWidth = "3";
		Grid.stroke();
	}
function GraphOval(x,y,r)
	{
		Graph = document.getElementById("Graph");
		Grid = Graph.getContext("2d");
		Grid.beginPath();
		Grid.arc(200 + x*20,200 + y*20,r,0,2*Math.PI);
		Grid.strokeStyle = "#FF0000";
		Grid.lineWidth = "3";
		Grid.stroke();
	}
function GraphQuadratic(h,k)
	{
		Graph = document.getElementById("Graph");
		Grid = Graph.getContext("2d");
		Grid.beginPath();
		Grid.moveTo(0,0);
		Grid.quadraticCurveTo(h + 200,400 - k*40,400,0);
		Grid.strokeStyle = "#FF0000";
		Grid.lineWidth = "3";
		Grid.stroke();
	}
function GraphInvQuadratic(h,k)
	{
		Graph = document.getElementById("Graph");
		Grid = Graph.getContext("2d");
		Grid.beginPath();
		Grid.moveTo(0,0);
		Grid.quadraticCurveTo(400 + h*40,200 + k,0,400);
		Grid.strokeStyle = "#FF0000";
		Grid.lineWidth = "3";
		Grid.stroke();
	}
function GraphQuadEQVertex(a,h,k)
	{
		if (a > 0)
			{
				PlotPoint(h,k);
				PlotPoint(h-1,k+a);
				PlotPoint(h+1,k+a);
				PlotPoint(h-2,k+a*4);
				PlotPoint(h+2,k+a*4);
				Graph = document.getElementById("Graph");
				Grid = Graph.getContext("2d");
				Grid.beginPath();
				Grid.moveTo(200+((h*20)-20*Math.sqrt((10-k)/a)),0);
				Grid.quadraticCurveTo(200+(h*20),(200-(k*20))*2,200+((h*20)+20*Math.sqrt((10-k)/a)),0);
				Grid.strokeStyle = "#FF0000";
				Grid.lineWidth = "3";
				Grid.stroke();
			}
		else
			{
				PlotPoint(h,k);
				PlotPoint(h-1,k+a);
				PlotPoint(h+1,k+a);
				PlotPoint(h-2,k+a*4);
				PlotPoint(h+2,k+a*4);
				Graph = document.getElementById("Graph");
				Grid = Graph.getContext("2d");
				Grid.beginPath();
				Grid.moveTo(200+((h*20)-20*Math.sqrt((-10-k)/a)),400);
				Grid.quadraticCurveTo(200+(h*20),400-(400-(200-(k*20)))*2,200+((h*20)+20*Math.sqrt((-10-k)/a)),400);
				Grid.strokeStyle = "#FF0000";
				Grid.lineWidth = "3";
				Grid.stroke();
			}
	}
function GraphAbsolute(h,k)
	{
		Graph = document.getElementById("Graph");
		Grid = Graph.getContext("2d");
		Grid.beginPath();
		Grid.moveTo(0,0);
		Grid.lineTo(h + 200,k*20 + 200);
		Grid.lineTo(400,0);
		Grid.strokeStyle = "#FF0000";
		Grid.lineWidth = "3";
		Grid.stroke();
	}
function GraphInvAbsolute(h,k)
	{
		Graph = document.getElementById("Graph");
		Grid = Graph.getContext("2d");
		Grid.beginPath();
		Grid.moveTo(0,0);
		Grid.lineTo(h*20 + 200,k + 200);
		Grid.lineTo(0,400);
		Grid.strokeStyle = "#FF0000";
		Grid.lineWidth = "3";
		Grid.stroke();
	}
var x1;
var y1;
var x2;
var y2;
function Graph2Points(x1,y1,x2,y2)
	{
		Graph = document.getElementById("Graph");
		Grid = Graph.getContext("2d");
		my = y1 - y2;
		mx = x1 - x2;
		for (var LR = 1; LR < 10; LR++)
			{
				Grid.beginPath();
				Grid.moveTo(200 + x1*20,200 - y1*20);
				Grid.lineTo((200 + x1*20) + mx*LR*60,(200 - y1*20) - my*LR*60);
				Grid.strokeStyle = "#FF0000";
				Grid.lineWidth = "1";
				Grid.stroke();
			}
		for (var LL = 1; LL < 10; LL++)
			{
				Grid.beginPath();
				Grid.moveTo(200 + x1*20,200 - y1*20);
				Grid.lineTo((200 + x2*20) - mx*LL*60,(200 - y2*20) + my*LL*60);
				Grid.strokeStyle = "#FF0000";
				Grid.lineWidth = "1";
				Grid.stroke();
			}
	}
function GraphSegment(x1,y1,x2,y2)
	{
		Graph = document.getElementById("Graph");
		Grid = Graph.getContext("2d");
		Grid.beginPath();
		Grid.moveTo(200 + x1*20,200 - y1*20);
		Grid.lineTo(200 + x2*20,200 - y2*20);
		Grid.strokeStyle = "#FF0000";
		Grid.lineWidth = "3";
		Grid.stroke();
	}
var pr = 4;
function PlotPoint(x,y)
	{
		Graph = document.getElementById("Graph");
		Grid = Graph.getContext("2d");
		Grid.beginPath();
		Grid.arc(200 + x*20,200 - y*20,pr,0,2*Math.PI);
		Grid.fillStyle = "#FF0000";
		Grid.fill();
	}
function PlotCorrectPoint(x,y)
	{
		Graph = document.getElementById("Graph");
		Grid = Graph.getContext("2d");
		Grid.beginPath();
		Grid.arc(200 + x*20,200 - y*20,pr,0,2*Math.PI);
		Grid.fillStyle = "#0000FF";
		Grid.fill();
	}
function PlotLetter(L,x,y)
	{
		Grid.font = "20px Arial";
		Grid.fillStyle = "#FF0000";
		if (200 - y*20 == 200)
			{
				Grid.fillText(L,200 + x*20,200 - y*20-10);
			}
		else if (200 + x*20 == 180)
			{
				Grid.fillText(L,200 + x*20-20,200 - y*20+5);
			}
		else
			{
				Grid.fillText(L,200 + x*20+5,200 - y*20+5);
			}
	}
var Plot = 0;
var PointX = ["",""];
var PointY = ["",""];
function ConstructGraph(x,y)
	{
		PointX[Plot] = x;
		PointY[Plot] = y;
		if (Plot == 1)
			{
				Graph2Points(PointX[0],PointY[0],PointX[1],PointY[1]);
				Plot = 0;
			}
		else
			{
				Plot = Plot + 1;
			}
	}
function ResetConstruct()
	{
		Plot = 0;
		PointX = ["",""];
		PointY = ["",""];
	}




//THE FUNCTIONS
function closeModal(){
	
	$('#Mask').fadeOut(500);
	$('Input').val("");
	location.reload();
}
function showModal()
	{
		$('#Mask').css({'display' : 'block', opacity : 0}).appendTo('html');
		$('#Mask').fadeTo(500,0.8);
		$('#Ans').append(Ans + '<br/><br/>');
//		$('#modalWindow').append('<a id="ExplainLink" onclick="showExplanation()" href="#">Explain</a>');
		$('#modalWindow').fadeIn(500);
				
		$("input").keydown(function(evt) {
			return false;
		});
	}

//COMPLEX NUMBERS FUNCTIONS
function ComplexSimplify(E)
	{
		if (E%2 == 0)
			{
				if (E%4 == 0)
					{
						Ans = "1";
					}
				else
					{
						Ans = "-1";
					}
			}
		else
			{
				if (E%3 == 0)
					{
						Ans = "-i";
					}
				else
					{
						Ans = "i";
					}
			}
	}
	
var First;
var Second;
function ComplexMultBinomials(A,S1,C1,B,S2,C2)
	{
		if (S1 == 0)
			{
				C1 = -C1;
			}
		if (S2 == 0)
			{
				C2 = -C2;
			}
		First = A*B - C1*C2;
		Second = C1*B + C2*A;
		MultBinomialsDispAns(First,Second);
	}
function MultBinomialsDispAns(First,Second)
	{
		if (Second == 1)
			{
				Second = "";
			}
		if (Second == -1)
			{
				Second = "-";
			}
    	if (First == 0 && Second == 0)
        	{
				Ans = 0;
            }
		else if (First == 0 && Second != 0)
			{
				Ans = Second + "i";
			}
		else if (First !== 0 && Second === 0)
			{
				Ans = First;
			}
		else if (First !== 0 && (Second > 0 || Second === ""))
			{
				Ans = First + "+" + Second + "i";
			}
		else if (First !== 0 && (Second < 0 || Second === "-"))
			{
				Ans = First + "" + Second + "i";
			}		
	}
function ComplexFraction(A,S1,C1,B,S2,C2)
	{
		GCF(A,C1);
		var Denominator = Number(B*B+C2*C2);
		ReduceF(Factor,Denominator);
		if (Factor == NumF)
			{
				Ans = "\\frac{" + Ans + "}{" + Denominator + "}";
			}
		else
			{
				First = First/Factor*NumF;
				Second = Second/Factor*NumF;
				MultBinomialsDispAns(First,Second);
				if (Den == 1)
					{
						Ans = Ans;
					}
				else
					{
						Ans = "\\frac{" + Ans + "}{" + Den + "}";
					}
			}
	}
function FixExp()
	{
		if (D == 0)
			{
				D = "";
			}
		if (D == 1)
			{
				D = Alpha[Bet];
			}
		if (D > 1)
			{
				D = Alpha[Bet] + "^" + D;
			}
		if (E == 0)
			{
				E = "";
			}
		if (E == 1)
			{
				E = Alpha[Bet];
			}
		if (E > 1)
			{
				E = Alpha[Bet] + "^" + E;
			}
	}
var Coeff;
var Coefficient;
 function FixCoeff(Coefficient)
 	{
		if (Coefficient == 1)
			{
				Coeff = "";
			}
		else if (Coefficient == -1)
			{
				Coeff = "-";
			}
		else
			{
				Coeff = Coefficient;
			}
	}
