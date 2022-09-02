<html>
   <head>
        <title>Admin page</title>
		<link rel="stylesheet" href="style.css">
   </head>
   <body>
        <img src="wel.jpg" width="150px" height="120px" class="center">
        <marquee behavior="scroll" direction="right" scrollamount="12">
			        <img src="9.jpg" width="250px" height="100px"><img src="logo.png" width="350px" height="100px"><img src="8.jpg" width="250px" height="100px"><img src="logo.png" width="350px" height="100px"><img src="3.jpg" width="250px" height="100px">
		</marquee>
        <form  method="POST">
		    <div class="main">
			    <h1>Reservation </h1>
				<! <div class="reserve">
	              <p color="#F71EB5"><b><i>Enter the details now!!!</i></b></p>
	              <div class="ad">
				   <div class="op">
				    <label class="label1"><b> Full Name : </b> </label>
					<input type="text" class="inp" name="fname" required=""><br/><br/>
				   </div>
				   <div class="op">
					<label class="lable1"><b> Address : </b> </label>
					<input type="text" class="inp" name="address" required=""></br> </br>
				   </div>
				   <div class="op">
					<label class="label1"><b> NIC  No : </b> </label>
					<input type="text" class="inp" name="nic" required=""></br> </br>
				   </div>
				   <div class="op">
					<label class="label1"><b> Contact No : </b> </label>
					<input type="text" class="inp" name="contact" required=""><br/> <br/>
				   </div>
				   <div class="op">
					<label class="label1"><b> E-mail : </b> </label>
					<input type="email" class="inp" name="email" required=""><br/> <br/>
				   </div>
					
					<fieldset>
					    <legend color="B202AA"><b> Event Details</b></legend>
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
					       <input type="date" class="inp" name="date" required=""></br> </br>
						   </div>
						   <div class="op">
						   <label class="label1"><b> Start Time : </b> </label>
					       <input type="time" class="inp" name="stime" required=""></br> </br>
						   </div class="op">
						   <label class="label1"><b> End Time : </b> </label>
					       <input type="time" class="inp" name="etime" required=""></br> </br>
						   </div>
				    </fieldset>
						<input type="submit" value="Reserve" name="submit">
			        <h3><a href="homee.php">Back to Main</a></h3>		    
			
			</div>
		</form>
		
		 <?php 

            
                 if (isset($_POST['submit']))
                     {
						 
						 $conn = mysqli_connect("localhost","root","","1109_party");
                         $fname= $_POST['fname'];
                         $address= $_POST['address'];
                         $nic= $_POST['nic'];
                         $contact= $_POST['contact'];
						 $email= $_POST['email'];
						 $event= $_POST['event'];
						 $date= $_POST['date'];
						 $stime= $_POST['stime'];
						 $etime= $_POST['etime'];

                          $sql= "INSERT INTO reservation(Full_Name,Address,NIC_No,Contact_No,Email,Event,Event_Date,Start_Time,End_Time) VALUES('$fname', '$address', '$nic', '$contact', '$email', '$event', '$date', '$stime', '$etime')";
                          $result =mysqli_query($conn,$sql);

                         if($result)
                             {
                                echo"Reserved Successfully!!!";
                             }
                        else
                             {
                                echo"Error!";
                             }
                       }
             ?>	
   </body>
</html>