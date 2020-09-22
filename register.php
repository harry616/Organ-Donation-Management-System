<!DOCTYPE html>
<html>
<head>
	<title>
		Register
	</title>
	<link rel="stylesheet" type="text/css" href="registerstyle.css">
	<link rel="stylesheet" href="css/jquery.steps.css">
</head>
<body>

	<div class="container">
		<form id="Form1" method="post">
			<h3>
				CONTACT INFO
			</h3>
			<input type="text" name="" placeholder="Name"required>
			<input type="text" name=""placeholder="Phone number" required="">
			<input type="text" name=""placeholder="Email ID">
			<div class="btn-box">
				<button type="button" id="Next1">
					Next
				</button>
				
			</div>
		</form>
		<form id="Form2" method="post">
			<h3>
				PERSONAL INFO
			</h3>
			<input type="text" name="" placeholder="Address"required>
			<input type="text" name=""placeholder="Age" required="">
			<input type="text" name=""placeholder="Gender">
			
			<div class="btn-box">
				<button type="button" id="Back1">
					Back
				</button>
				<button type="button" id="Next2">
					Next
				</button>
				
			</div>
		</form>
		<form id="Form3" method="post">
			<h3>
				ACCOUNT INFO
			</h3>
			<input type="text" name="" placeholder="Login ID"required>
			<input type="password" name=""placeholder="Password" required="">
			<input type="password" name=""placeholder="Confirm Password">
			
			<div class="btn-box">
				<button type="button" id="Back2">
					Back
				</button>
				<button type="Submit">
					Submit
				</button>
				
			</div>
		</form>
		<div class="step-row">
			<div id="progress"></div>
			<div class="step-col"><small>
				Page 1
			</small></div>
			<div class="step-col"><small>
				Page 2
			</small></div>
			<div class="step-col"><small>
				Page 3
			</small></div>
		</div>
		
	</div>
	<script>
		var Form1 = document.getElementById("Form1");
		var Form2 = document.getElementById("Form2");
		var Form3 = document.getElementById("Form3");
		var Next1 = document.getElementById("Next1");
		var Next2 = document.getElementById("Next2");
		var Back1 = document.getElementById("Back1");
		var Back2 = document.getElementById("Back2");

		var progress = document.getElementById("progress");

		Next1.onclick=function () {
			Form1.style.left="-450px";
			Form2.style.left="40px";
			progress.style.width="240px";
		}
			
		

		Back1.onclick=function(){
			Form1.style.left="40px";
			Form2.style.left="450px";
			progress.style.width="120px";
		}
		Next2.onclick=function () {
			Form2.style.left="-450px";
			Form3.style.left="40px";
			progress.style.width="360px";
		}
		Back2.onclick=function () {
			Form2.style.left="40px";
			Form3.style.left="450px";
			progress.style.width="240px";
		}
		
	
	</script>
	<script src="js/jquery.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/jquery.steps.js"></script>
    <script src="js/script.js"></script>
		
	

</body>
</html>