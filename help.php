<?php include "./db/connection.php"; ?>
<html>
<head>
<title>
Purple Fox Party Arrangment System
</title>
<link rel="stylesheet" type="text/css" href="./css/helpstyle.css">
</head>
<body style="background-image:  url('images/Back1.jpg');">
<section class="contact">
<div class="content">
<h2 style = "color:white"> <b>Contact Us</b></h2>
<p style = "color:black"><b>
Whether You have a question about packages , services , pricing or anything else, our team is ready answer all your questions. Fill out the form below with all of your details and
we will get back to you within 48 hours or feel free to call us at 011 4413340 . We are available to take your call between 9a.m to 5p.m.
</b></p>
</div>
<div class= "container">
<div class="contactInfo">
<div class="box">
<div class="icon"><img src="./images/map.png" width="40px" height="40"></div>
<div class="text">
<h3>Address</h3>
<p>187/F,<br>Asiri Road,<br>Colombo 05.</p>
</div>
</div>
<div class="box">
<div class="icon"><img src="./images/phone.png" width="40px" height="40"></div>
<div class="text">
<h3>Phone</h3>
<p>011 4413340</p>
</div>
</div>
<div class="box">
<div class="icon"><img src="./images/email.png" width="40px" height="40"></div>
<div class="text">
<h3>Email</h3>
<p>purplefox@info.com</p>
</div>
</div>
<div class="box">
<div class="icon"><img src="./images/clock.png" width="40px" height="40"></div>
<div class="text">
<h3>Available</h3>
<p>MON - FRI 8.00 AM TO 5.00 PM</p>
</div>
</div>
</div>

<div class="contactForm">
<form method="post" action="help.php">
	<h5 style="color: black">
	<?php 
		if (isset($_GET['msg'])) {
			echo $_GET['msg'];
		}
	?>
	</h5>
<h1><b><center>Send Message</center></b></h1>
<div class="inputBox">
<input type="text" name="fullname" placeholder="Full Name" required="required">
<span>Full Name</span>
</div>
<div class="inputBox">
<input type="text" name="email" placeholder="Email" required="required">
<span>Email</span>
</div>
<div class="inputBox">
<textarea name="msg" placeholder="Type your message here....." required="required"></textarea>
<span>Type your message here...</span>
</div>
<div class="inputBox"><br>
<input type="submit" name="submit" value="Send">
</div>
</form>
</div>
</div>
</section>

<div class="container4">
            <table class="ctable">
                <marquee behavior="scroll" direction="right" scrollamount="12">
			       <img src="images/logo.png" width="200px" height="150px"><p Style = "color:white"><b>WE ARE AVAILABLE FOR YOU !!</B></P><img src="images/logo.png" width="200px" height="150px">
				   
		</marquee>
            </table>
        </div>


</body>
</html>


<?php
	if (isset($_POST['submit'])) {
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$msg = $_POST['msg'];

		$query = "INSERT INTO contactus(fullname,email,message)VALUES('$fullname','$email','$msg')";
		if (mysqli_query($con, $query)) {
            header("Location: help.php?msg=Your Message Saved Successfully!");
        } else {
            header("Location: help.php?msg=Saving Message Failed! Try Again.");
        }
	}
?>