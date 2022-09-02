<html>
<head>
    <title>Purple Fox Party Arrangment System</title>
    <link rel="stylesheet" type= "text/css" href="./css/signup.css">
   
</head>

<body>

<div class ="header">.
	<h1>Sign Up Here</h1>

</div>

<form method="post" action="signup-check.php">
	<h3 style="color: white">
	<?php 
		if (isset($_GET['error'])) {
			echo $_GET['error'];
		}
	?>
	</h3>
<div class="input">
<label>Username</label>
<input type ="text" name="username" required>
</div>

<div class="input">
<label>Email</label>
<input type ="text" name="email" required>
</div>

<div class="input">
<label>Password</label>
<input type ="text" name="password1" required>
</div>


<div class="input">
<label>Confirm Password</label>
<input type ="text" name="password2" required>
</div>
<br><br>
<div class = "input">
<button type ="Submit" name="register" class="btn">Sign Up</button>
</div>
<div>
<p> Already Sign Up ?? <a href = "login.php">Login</a></p>
</div>
</form>

</body>



</html>