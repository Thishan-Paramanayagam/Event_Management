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
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
    
        
		$sql = "SELECT * FROM user WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$user_name = $row['user_name'];
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: homee.php?username=$user_name");
		        exit();
            }else{
                header("Location: login.php?error=Incorrect Password");
		        exit();
			}
		}else{
            header("Location: login.php?error=Incorrect Username or passowrd");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}
?>
