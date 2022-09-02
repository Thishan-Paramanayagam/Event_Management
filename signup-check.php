<?php 
include "./db/connection.php";

  if (isset($_POST['email']) && isset($_POST['password1'])
  && isset($_POST['username']) && isset($_POST['password2'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
 
     $uname = validate($_POST['username']);
     $pass = validate($_POST['password1']); 
     $re_pass = validate($_POST['password2']);
     $email= validate($_POST['email']);
     echo $uname . "<br>";
     echo $pass . "<br>";
     echo $re_pass . "<br>";
     echo $email . "<br>";
     
     if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match");
	      exit();
	   }

	    $sql = "SELECT user_name FROM user WHERE user_name ='$uname' ";
  		$result = mysqli_query($con, $sql);
      $row1 = mysqli_fetch_array($result);
      echo $row1['user_name'];
      
  		if (mysqli_num_rows($result) > 0) {
        echo "string";
  			header("Location: signup.php?error=The username is taken try another&$user_data");
  	        exit();
  		}else {
             $sql2 = "INSERT INTO user(user_name,email,password) VALUES('$uname','$email', '$pass' )";
             $result2 = mysqli_query($con, $sql2);
             if ($result2) {
                  header("Location: login.php");
                  echo("success");
                  
  	         exit();
             }else {
  	           	header("Location: signup.php?error=unknown error occurred");
  		          exit();
             }
  		}
      
    }else{
        header("Location: signup.php");
        exit();
    }
?>  