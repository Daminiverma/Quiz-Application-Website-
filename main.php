<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Quiz Application</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/lib/jquery.js"></script>
		<script src="js/lib/bootstrap.min.js"></script>

	</head>
	<body>

		<nav class="navbar navbar-fixed-top navbar-default">
			<div class="container">
	  			<div class="navbar-header">
	      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	    	    	<span class="sr-only">Toggle navigation</span>
	        		<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
	    	  		</button>
	      			<span class="navbar-brand">Quiz Application</span>
	      		</div>
	      		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a id="menu" href="#" class="header-link hide">Menu</a></li>
						<li><a id="abt" href="#about" class="header-link">About</a></li>
					</ul>
				</div>
    		</div>
		</nav>
		<div class="content">
			<div class="login-register">
				<div class="tabs">
					  <div class="white" id="div-login">Login</div>
					  <div class="black" id="div-register">Register</div>
				</div>
			  	<form action="" method="post" id="login" class="login">
		            <div class="input-group">
		            	<span class="input-group-addon">&nbsp;&nbsp;E-Mail&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-envelope"></i>&nbsp;</span>
		              	<input id="logEmail" type="email" class="form-control" name="email" placeholder="Enter E-Mail Id" required>
		            </div>
		            <div class="error hide" role="alert">
		            	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		                Enter a valid Email Address
		            </div>
		            <br/>
		            <div class="input-group">
		            	<span class="input-group-addon">Password&nbsp;<i class="glyphicon glyphicon-lock"></i></span>
		            	<input id="logPass" type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
		            </div>
		            <div class="error hide" role="alert">
		            	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		                Enter a valid Password
		            </div>
		            <div class="tabs">
		           		<div class="black butn" id="btn-login">Login</div>
					</div>
			  	</form>

				<form id="register" method="post" class="register hide">
		        	<div class="input-group">
		            	<span class="input-group-addon">First Name<i class="glyphicon glyphicon-user"></i></span>
		            	<input id="fname" type="text" class="form-control" name="fname" placeholder="Enter First Name" required>
		        	</div>
		            <div class="error hide" role="alert">
		            	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		                Enter a valid First Name
		            </div><br/>
		            <div class="input-group">
		            	<span class="input-group-addon">Last Name<i class="glyphicon glyphicon-user"></i></span>
		            	<input id="lname" type="text" class="form-control" name="lname" placeholder="Enter Last Name" required>
		            </div>
		            <div class="error hide" role="alert">
		                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		                Enter a valid Last Name
		            </div><br/>
		            <div class="input-group">
		              <span class="input-group-addon">&nbsp;&nbsp;E-Mail&nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-envelope"></i>&nbsp;</span>
		              <input id="regEmail" type="email" class="form-control" name="email" placeholder="Enter E-Mail Id" required>
		            </div>
		              <div class="error hide" role="alert">
		                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		                Enter a valid Email Address
		              </div><br>
		            <div class="input-group">
		              	<span class="input-group-addon">Password&nbsp;<i class="glyphicon glyphicon-lock"></i></span>
		              	<input id="registerPassword" type="password" class="form-control" name="password" placeholder="Enter a Password" required>
		            </div>
		              <div class="error hide" role="alert">
		                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		                Password must be atleast 5 characters long
		              </div><br>
		            <div class="input-group">
		              	<span class="input-group-addon">Password&nbsp;<i class="glyphicon glyphicon-lock"></i></span>
		              	<input id="registerReEnterPassword" type="password" class="form-control" name="password" placeholder="Re Enter Password" required>
		            </div>
		              <div class="error hide" role="alert">
		                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		                Password's must match
		              </div><br/>
		            <div class="input-group">
		              	<span class="input-group-addon">&nbsp;&nbsp;Contact&nbsp;<i class="glyphicon glyphicon-earphone"></i>&nbsp;</span>
		              	<input id="phone" type="number" class="form-control" name="phone" placeholder="Enter Mobile or Phone Number">
		            </div><br>
		            <div class="input-group">
		              	<span class="input-group-addon">&nbsp;&nbsp;Address&nbsp;<i class="glyphicon glyphicon-home"></i>&nbsp;</span>
		              	<textarea id="homeAddress" name="address" class="form-control" placeholder="Enter Your Address"></textarea>
		            </div><br/>
		            <div class="tabs">
		            	<div class="black butn" id="btn-register">Register</div>
					</div>
	      		</form>
			</div>
			<div id="identity" class="animateDiv hide"></div>

			<div id="what" class="hide">
				<div id="circle">
					<div id="upper-half">
						<img id="go-play" class="circle-img" src="images/play.png">
						<img id="go-history" class="circle-img" src="images/history.png">
					</div>
					<div>
						<div id="go-txt-play" class="go-text">PLAY</div><div id="go-txt-history" class="go-text">History</div>
					</div>
					<div id="lower-half">
						<img id="go-setting" class="circle-img" src="images/settings.png">
					</div>
					<div class="go-text">Settings</div>
				</div>
			</div>

			<div id="gk-it" class="quiz-type-div hide">
				<div id="quiz-type-text" class="text">Select the type of Quiz:</div>	
				<img id="gk" class="quiz-pics" src="images/gk.png">
				<img id="it" class="quiz-pics" src="images/it.png">
			</div>

			<div id="quiz-types" class="animateDiv hide">Quiz Type:</div>
			
			<div id="difficulty-level" class="quiz-type-div hide">
				<div id="quiz-level-text" class="text">Select the difficulty level:</div>
				<div class="rdio-level text"><input type="radio" name="diffLevel" id="easy">&nbsp;&nbsp;&nbsp; Easy</div>
				<div class="rdio-level text"><input type="radio" name="diffLevel" id="hard">&nbsp;&nbsp;&nbsp; Hard</div><br/>
		        <div id="btn-level-continue" class="black butn hide">Continue</div>
			</div>

			<div id="quiz-levels" class="animateDiv hide">Difficulty level:</div>

			<a href="#quiz-levels"><div class="black butn quiz-type-div hide" id="btn-start-quiz">You're Done. Let's Start the Quiz.</div></a><br/>

			<div id="timer" class="animateDiv hide">Timer :<span id="timer-right">10 : 00</span><i id="timer-icon" class="glyphicon glyphicon-time">&nbsp;</i></div>

			<!-- Main Quiz Begins -->

			<div class="ques-background hide" id="main-quiz">
			    <div id="table-div">
			      <table class="table table-striped" id="quesTable">
			        <thead>
			          <tr class="row r">
			            <th class="tableHead"><div id="head"></div></th>
			          </tr>
			        </thead>
			        <tbody>
				        <tr class="row">
				            <td class="options">
				            	<label for="option1"><input id="option1" class="radioButton" type="radio" name="op" value="option"><div id="id-op1"></div></label>
				            </td>
				        </tr>
				        <tr class="row">
				            <td class="options">
				            	<label for="option2"><input id="option2" class="radioButton" type="radio" name="op" value="option"><div id="id-op2"></div></label>
				            </td>
				        </tr>
				        <tr class="row">
				            <td class="options">
				            	<label for="option3"><input id="option3" class="radioButton" type="radio" name="op" value="option"><div id="id-op3"></div></label>
				            </td>
				        </tr>
				        <tr class="row">
				            <td class="options">
				            	<label for="option4"><input id="option4" class="radioButton" type="radio" name="op" value="option"><div id="id-op4"></div></label>
				            </td>
				        </tr>
			          </tbody>
			        </table>
			        <div id="btn-next" class="black butn">Next</div>
			        <div id="btn-finish" class="black butn hide">Finish</div>
			    </div>
			</div>
			<a href="#result"><div id="showResults" class="black butn quiz-type-div hide">Quiz Completed . &nbsp;Click Me for Results .</div></a><br/>
			<div id="result" class="quiz-type-div hide">
				<div id="result-text" class="text">Result :</div>
				<p class="result-p">Points You Scored  :</p><p id="result-score">10/10</p><br>
				<p class="result-p">Number of Correct Answers  :</p><p id="result-correct">10/10</p><br>
				<p class="result-p">Number of Wrong Answers  :</p><p id="result-wrong">0/10</p><br>
				<div id="result-deatils" class="black butn" data-toggle="modal" data-target="#quizModal">Show Details</div>
			</div>
			<div class="modal fade" id="quizModal" tabindex="-1" role="dialog" aria-labelledby="quizLabel">
		        <div class="modal-dialog" role="document">
		          <div class="modal-content">
		            <div class="modal-header">
		              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		              <h4 class="modal-title" id="quizLabel">Details of each Question</h4>
		            </div>
		            <div id="modalBody" class="modal-body">
		            	<table id="modal-table" class="table table-striped"><tbody></tbody></table>
		            </div>
		            <div class="modal-footer">
		              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		            </div>
		        </div>
		      </div>
		    </div>

			<div id="user-settings" class="hide">
			    <div id="settings-header" class="black">Update Your Details</div>
			    <form id="update-details" method="post" class="register">
		        	<div class="input-group">
		            	<span class="input-group-addon">&nbsp;&nbsp;&nbsp;First Name&nbsp;<i class="glyphicon glyphicon-user"></i>&nbsp;</span>
		            	<input id="newFirst" type="text" class="form-control" name="fname" placeholder="Enter First Name" required>
		        	</div>
		            <div class="error hide" role="alert">
		            	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		                Enter a valid First Name
		            </div><br/>
		            <div class="input-group">
		            	<span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;Last Name&nbsp;<i class="glyphicon glyphicon-user"></i>&nbsp;</span>
		            	<input id="newLast" type="text" class="form-control" name="lname" placeholder="Enter Last Name" required>
		            </div>
		            <div class="error hide" role="alert">
		                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		                Enter a valid Last Name
		            </div><br/>
		            <div class="input-group">
		              	<span class="input-group-addon">New Password&nbsp;<i class="glyphicon glyphicon-lock"></i></span>
		              	<input id="newPass" type="text" class="form-control" name="password" placeholder="New Password" required>
		            </div>
		              <div class="error hide" role="alert">
		                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		                Password must be ateast 5 characters long.
		              </div><br/>
		            <div class="input-group">
		              	<span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact&nbsp;<i class="glyphicon glyphicon-earphone"></i>&nbsp;</span>
		              	<input id="newPhone" type="number" class="form-control" name="phone" placeholder="Enter Mobile or Phone Number">
		            </div><br>
		            <div class="input-group">
		              	<span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address&nbsp;<i class="glyphicon glyphicon-home"></i>&nbsp;</span>
		              	<textarea id="newAddress" name="address" class="form-control" placeholder="Enter Your Address"></textarea>
		            </div><br/>
		            <div id="btn-update" class="black butn">Done</div>
	      		</form>
			</div>
		    <div id="div-history" class="hide">
		     	<table id="table-history" class="table">
		     		<tr>
		     			<th>Date and Time</th>
		     			<th>Test Type</th>
		     			<th>Test Level</th>
		     			<th>Score</th>
		     		</tr>
		     	</table>
		    </div>
    	</div>

        <!-- Main Quiz Ends -->
		<div id="about">
			<div id="about-header" class="text"><i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;About</div>
			<div id="about-content">
				<ul type="disc">
					<li>The test is not official, it's just a nice way to test your skills regarding to different categories available in our test.</li>
					<li>The test contains 2 categories:  <b>1. General Knowledge  2. Information Technology.</b></li>
					<li>Within these two categories we have two difficulty levels: <b> 1. Easy  2. Hard </b></li>
					<li>The test contains 10 questions and there is a time limit.</li>
					<li>You will get 1 point for each correct answer. At the end of the Quiz, your total score will be displayed. Maximum score is 10 points.</li>
				</ul>
			</div>
		</div>
		<div id="footer" class="navbar navbar-fixed-bottom">
			<div id="foot-text">Developed and Designed By: Damini Verma</div>
			<div id="follow" class="navbar-right">
				Follow Us:<a href="https://twitter.com/babydamini"><img id="twitter" src="images/twitter.png"></a>
				<a href="https://www.linkedin.com/in/daminiverma/"><img id="linkedin" src="images/linkedin.png"></a>
			</div>
		</div>

		<!-- Scripts -->
		<script src="js/main.js"></script>
		<script src="js/test.js"></script>
		<script src="js/result.js"></script>
	</body>
</html>