<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Braintech Technologies</title>
	<link rel="icon" href="../admin_area/assets/img/icon.png" sizes="32x32" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="../admin_area/assets/style/style.css" rel="stylesheet">
	<style>
	    .kera .tooltiptext {
          visibility: hidden;
          width: 50vw;
          height:auto;
          background-color: black;
          color: #fff;
          text-align: center;
          border-radius: 6px;
          padding: 5px 0;
          /* Position the tooltip */
          position: absolute;
          z-index: 1;
          top: 100%;
          left: 50%;
          margin-left: -60px;
          cursor:pointer;
        }
        
        .kera:hover .tooltiptext {
          visibility: visible;
          cursor:pointer;
        }
        .mela .tooltiptext2 {
          visibility: hidden;
          width: 50vw;
          height:auto;
          background-color: black;
          color: #fff;
          text-align: center;
          border-radius: 6px;
          padding: 5px 0;
        
          /* Position the tooltip */
          position: absolute;
          z-index: 1;
          top: 100%;
          left: 50%;
          margin-left: -60px;
          cursor:pointer;
        }
        
        .mela:hover .tooltiptext2 {
          visibility: visible;
          cursor:pointer;
        }
        .dropdown .dropbtn {
            border: none;
            font-size: 17.6px;
            outline: none;
            color: #00000080;
            padding: 9px 16px 10px 0px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
            }


            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }

            .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            }

            .dropdown-content a:hover {
            background-color: #ddd;
            }

            .dropdown:hover .dropdown-content {
            display: block;
            }
        .quiz-page
        {
            background-image: url('img1/quiz.jpg');
            background-attachment: fixed;
        }
        .quiz-page .quiz-inner ol li
        {
            list-style-type: none;
        }
        .quiz-page .quiz-inner
        {
            background-color: rgba(0,0,0,0.5);
            text-align: left;
            padding-left: 200px;
        }
        .quiz-page .quiz-inner .div-quiz-outer
        {
            animation: animate 5s infinite;
            width: 50%;
            padding-left: 0px;
            height: 7vh;
            text-align: center;
        }
        .quiz-page .quiz-inner .name-quiz-time
        {
            font-size: 24px;
            color: #f6f5f5;
            font-weight: bold;
            padding-top: 10px;
            
        }
        form{
            margin-bottom:0px;
        }
        @keyframes animate
        {
            0%
            {
                background-color: #2a3d66;
            }
            25%
            {
                background-color: #5d54a4;
            }
            50%
            {
                background-color: #9d65c9;
            }
            75%
            {
                background-color: #d291bc;
            }
            100%
            {
                background-color: #d789d7;
            }
        }
        .quiz-page .quiz-inner label
        {
            color: #fff;
        }
        .quiz-page .quiz-inner h1
        {
            color: #f6f5f5;
        }
        .quiz-page .quiz-inner h3
        {
            color: #fcdada;
        }
        .quiz-page .quiz-inner .quiz-btn
        {
            border:none;
            border-radius: 20px;
            height: 40px;
            width:150px;
            background-color: #f51167;
            color: #fff;
            font-weight: bold;
        }
    </style>
	 <script language ="javascript" >
        window.history.forward();
        function noBack() {
            window.history.forward();
        }


	var sec = 20;
	var min=Math.floor(sec/60);
var time = setInterval(myTimer, 1000);
var k=0;
function myTimer() {
    document.getElementById('timer').innerHTML = min+"."+sec%60 + "Minute left";
    sec--;
	if(sec%60==59){
		min--;
	}
    if (sec == -1) {
        clearInterval(time);
		var auto_refresh = setInterval(function() { submitform(); }, 3000);
		 

function submitform(){
if( (sec==-1) &&(k==0)) 
{ alert('Form is submitting.....');
k=1;
document.getElementById("quiz").submit();
}
}
        alert("Time out!! 😖");
		
    }
}

	 </script>
	<link rel="stylesheet" type="text/css"  />
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><img src="../admin_area/assets/img/icon.png" height="200px" width="150px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
            </ul>
            </div>
            </div>
            </nav>

	<div id="page-wrap" class="quiz-page">
        <div class="quiz-inner">

		<h1>Simple Quiz </h1>

		<form action="result.php" method="post" id="quiz">
            <div class="div-quiz-outer">
		<span class="name-quiz-time">Time:<span id="timer"></span></span></div><br>
		
            <ol>
                <li>
                    <h2 style="color:#fff">Enter your Student ID</h2><input type="text" name="sid" required="" autocomplete="off"></li><br><br>
                <li>
                
                    <h3>WordPress is a...</h3>
                    
                    <div>
                        <input type="radio"  name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Software </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Web App</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) CMS</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Other</label>
                    </div>
                
                </li>
                <br>
                <li>
                
                    <h3>SEO is Part Of...</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) Video Editing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Graphic Designing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Web Designing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) Digital Marketing</label>
                    </div>
                
                </li>
                <br>
                <li>
                
                    <h3>PHP is a....</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Server Side Script</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Programming Language</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Markup Language</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) None Of Above These</label>
                    </div>
                
                </li>
                <br>
                <li>
                
                    <h3>Localhost IP is..</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) 192.168.0.1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) 127.0.0.0</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) 1080:80</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Any Other</label>
                    </div>
                
                </li>
                <br>
                <li>
                
                    <h3>Python is a</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Web Designing language</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) app  Developer language</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Graphic Designer</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) All Above These</label>
                    </div>
                
                </li>
            
            </ol>
            <br><br>
            <button type="submit" class="quiz-btn">Submit</button>
            <br><br>
		</form>
		
	</div>
	</div>

<footer id="contact">
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <br>
                <br>
                <img src="../img/logoblack.png" height="100px" width="auto">
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Our Moto</h5>
                <hr class="light">
                <p>Learn, Grow and Bulid Career</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Contact Us</h5>
                <hr class="light">
                <p>Phone Number : 9874563210</p>
                <p>Email Address :  braintechtechno.info@gmail.com</p>
                <p>Address : The Narula Institute of Technology, Nilganj Road, Agarpara, North 24 Parganas, Kolkata-700109, WB, India</p>
            </div>
            <div class="col-12">
                <hr class="light-100">
                <h5>braintechtechno.ezyro.com</h5>
            </div>
        </div>
    </div>
</footer>
</body>

</html>