
<html>

<head>
    <title>Purple Fox Party Arrangment System</title>
    <link rel="stylesheet" type= "text/css" href="./css/login.css">
   
</head>

<body>
    <div class="loginbox">
        <img src="./images/logo.png" alt="" class="man">
        <h1>Login here</h1>
        <form action="./adminlogin-check.php" method="post">
            <h3 style="color: white">
                <?php 
                    if (isset($_GET['error'])) {
                        echo $_GET['error'];
                    }
                ?>
            </h3>
            <div class="username">
                <label for="username">
                    Username
                </label>
                <input type="text" name="uname" placeholder="Enter your Username">
            </div>
            <div class="password">
                <label for="password">
                    Password
                </label>
                <input type="password" name="pass" placeholder="Enter your Password">
            </div>
            <div class="login">
                <a href ="editmain.php"><input type="submit" value="Login">
            </a></div>
			
         
            <div class="links">
                <p> Don't Have an Account?? <a href = "signup.php">Sign Up</a></p>
            </div>
            <br><b><a href="login.php"><font color="red">Are You customer?</b>&nbsp&nbsp<u>back</u></font>
        </form>
    </div>
    </body>

</html>

