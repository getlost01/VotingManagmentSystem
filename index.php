<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/-->
<!DOCTYPE html>
<html>
<head>
<title>Voter Id Mangement System</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body >
	<div class="row displayCon">
		<div class="col-6 left-side">
             <div class="imgcon">
				<h4>Voter Id Management System</h4>
				<img src="./images/Screenshot 2022-11-29 181238.png" alt="">
			 </div>
		</div>
		<div class="col-6 right-side">
			<div class="form">
				<h3>Please fill these details for next step. </h3>
				<form action="feedback.php" method="post" class="agile_form">
					<div class="inputCon">
						<label>Enter Your name</label>
						<input type="text" placeholder="Name" name="name"  />
					</div>
					
					<div class="inputCon">
						<label>Enter Your email</label>
						<input type="email" placeholder="email" name="email"  />
					</div>

					<div class="inputCon">
						<label>Enter Your DOB</label>
						<input type="date" placeholder="Date" name="dob"  />
					</div>

					<div class="inputCon">
						<label>Enter Your Gender</label>
						<select name="gender">
							<option value="">Select</option>
							<option value="Male">Male</option>
							<option value="Female"> Female</option>
							<option value="Other"> Other</option>
						</select>
					</div>

					<div class="inputCon">
						<label>Enter Your Aadhar Number</label>
						<input type="text" placeholder="Aadhar Number" name="aadhar"  />
					</div>

					<div class="inputCon">
						<label>Enter Your Voter ID Number</label>
						<input type="text" placeholder="Voter ID Number" name="voterid"  />
					</div>
					<center><input type="submit" value="Submit" /></center>
			  </form>
			  <p class="copyright">Copyright © Team-Akash </p>
			</div>
		</div>
	</div>
</body>
</html>

