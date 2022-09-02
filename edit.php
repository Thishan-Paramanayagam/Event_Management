<?php
					$conn = mysqli_connect("localhost","root","","1109_party");
					$_SESSION['nic']= $_POST['nic'];
					$_SESSION['event']=$_POST['event'];
					$id=$_SESSION['nic'];
					$eve=$_SESSION['event'];
					$sql="select* from reservation where NIC_No='$id' and Event='$eve'";
					$execute=mysqli_query($conn,$sql);										
					while($rows=mysqli_fetch_array($execute))
					{
						 $fname= $rows['Full_Name'];					
                         $address= $rows['Address'];
                         $nic= $rows['NIC_No'];
                         $contact=$rows['Contact_No'];
						 $email=$rows['Email'];
						 $event=$rows['Event'];
						 $date= $rows['Event_Date'];
						 $stime=$rows['Start_Time'];
						 $etime=$rows['End_Time'];
					}	
					echo $fname;
?>
<html>

    <head>
	    <link rel="stylesheet" href="style.css">
	</head>
	<body>
	   <marquee behavior="scroll" scrollamount="12"  direction="right" >
            <img src="1.jpg" width="300px" height="130px"><img src="logo.png" width="400px" height="130px"><img src="2.jpg" width="300px" height="130px" ><img src="logo.png" width="400px" height="130px"><img src="3.jpg" width="300px" height="130px">
		</marquee>
	    <form  method="POST" avtio>
		    <div class="main">
	        <p style="color:#F71EB5"><b><i>You can edit the details now!!!</i></b></p>
	            <div class="edit">
				   <div class="op">
				    <label class="label1"><b> Full Name : </b> </label>
					<input type="text" class="inp" value="<?php echo $fname;?>" name="fname" ><br/><br/>
				   </div>
				   <div class="op">
					<label class="lable1"><b> Address : </b> </label>
					<input type="text" class="inp" value="<?php echo $address;?>"  name="address" required=""></br> </br>
				   </div>
				   <div class="op">
					<label class="label1"><b> NIC no : </b> </label>
					<input type="text" class="inp" value="<?php echo $nic;?>"  name="nic" required=""></br> </br>
				   </div>
				   <div class="op">
					<label class="label1"><b> Contact No : </b> </label>
					<input type="text" class="inp" value="<?php echo  $contact;?>"  name="contact" required=""><br/> <br/>
				   </div>
				   <div class="op">
					<label class="label1"><b> E-mail : </b> </label>
					<input type="email" class="inp" value="<?php echo  $email;?>"  name="email" required=""><br/> <br/>
				   </div>
					
					<fieldset class="set">
					    <legend style="color:#7E15A2"><b> Event Details</b></legend>
						  <div class="op">
						   <label class="label1"><b> Event : </b> </label> 
						   
						   <select class="inp" name="event">
						        <option value="Birthday">Birthday Party</option>
								<option value="Wedding">Wedding Party</option>
								<option value="Gettogether">Gettogether Party</option>
						   </select>
						   </div>
						   <br/>
						   <br/>
						   <div class="op">
						   <label class="label1"><b> Event Date : </b> </label>
					       <input type="date" class="inp" value="<?php echo $date;?>"  name="date" required=""></br> </br>
						   </div>
						   <div class="op">
						   <label class="label1"><b> Start Time : </b> </label>
					       <input type="time" class="inp" value="<?php echo $stime; ?>"  name="stime" required=""></br> </br>
						   </div class="op">
						   <label class="label1"><b> End Time : </b> </label>
					       <input type="time" class="inp" value="<?php echo $etime ;?>"  name="etime" required=""></br> </br>
						   </div>
				    </fieldset>
					 <center>
					
					    <input type="submit" value="Edit" name="edit">
                        <br/>						
						 <input type="submit" value="Delete" name="del">
					    
					   <h3> <a href="homee.php">Back to Main</a></h3>
					</center>
			    </div>
		    </div>
			
	</body>
</html>
		 <?php 
                   $conn = mysqli_connect("localhost","root","","1109_party");
					
                 if (isset($_POST['edit']))
                     {
                         $fname= $_POST['fname'];
                         $address= $_POST['address'];
                         $nic= $_POST['nic'];
                         $contact= $_POST['contact'];
						 $email= $_POST['email'];
						 $event= $_POST['event'];
						 $date= $_POST['date'];
						 $stime= $_POST['stime'];
						 $etime= $_POST['etime'];
         
                         $sql="UPDATE reservation SET Full_Name='$fname', Address='$address', NIC_No='$nic', Contact_No='$contact', Email='$email', Event='$event', Event_Date='$date',Start_Time='$stime', End_Time='$etime' WHERE NIC_No='$id'";
					    $result=mysqli_query($conn,$sql);
						if($result)
						{
							echo $fname;
							echo"successfully editted";
						}
					 }
				elseif(isset($_POST['del']))
				{
					$sql="DELETE FROM reservation WHERE NIC_No='$id'";	
					$result=mysqli_query($conn,$sql);					
									
					if($result)
					{
						echo"deleted";
                    }
				}
             ?>

