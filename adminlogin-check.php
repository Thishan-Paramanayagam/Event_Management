<?php
include "./db/connection.php";
if (isset($_POST['uname']) && isset($_POST['pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['pass']);

	if (empty($uname)) {
		header("Location: adminlogin.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: adminlogin.php?error=Password is required");
	    exit();
	}else{
    
        
		$sql = "SELECT * FROM admin WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: editmain.php");
		        exit();
            }else{
                header("Location: adminlogin.php?error=The username is taken try another");
                echo("Incorrect Password");
		        exit();
			}
		}else{
            header("Location: adminlogin.php?error=Incorrect Username or passowrd");
	        exit();
		}
	}
	
}else{
	header("Location: adminlogin.php");
	exit();
}
?>
