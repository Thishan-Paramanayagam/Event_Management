<html>
    <head>
	    <link rel="stylesheet" href="style.css">
    </head>
    <body>
	    <marquee behavior="scroll" direction="right" scrollamount="12">
			        <img src="4.jpg" width="300px" height="130px"><img src="logo.png" width="400px" height="130px"><img src="7.jpg" width="300px" height="130px"><img src="logo.png" width="400px" height="130px"><img src="8.jpg" width="300px" height="130px">
		</marquee>
		<center>
        <div class="container">
            <h1 class="sign" align="center" style="color:#7E15A2">Change Details</h1>
			<h2 align="center" style="color:#F71EB5"><i>Fill Your Details</i></h2>
			<div class="menu">
            <form  method="POST" action="edit.php" >
			   <div class="op">
			    <label class="lable1"><b> Full Name : </b> </label>
                <input class="inp" type="text" name="fname" align="center"></br><br/>
			   </div>
			   <div class="op">
				<label class="label1"><b> NIC : </b> </label>
                <input class="inp" type="text" name="nic" align="center"></br></br>
			   <div>
			   <div class="op">
				<label class="label1"><b> Event : </b> </label> 
						   
				<select class="inp" name="event">
						        <option value="Birthday">Birthday Party</option>
								<option value="Wedding">Wedding Party</option>
								<option value="Gettogether">Gettogether Party</option>
								
				</select>
				<div>
				 		 <?php 
						 SESSION_start();
					if (isset($_POST['edit']))
					{
						$conn = mysqli_connect("localhost","root" ,"","1109_party");
						$_SESSION['fname']= $_POST['fname'];
						$_SESSION['nic']= $_POST['nic'];
						$_SESSION['event']= $_POST['event'];						
					}	
					
	    ?> 
			  <br/> <br/>
	          <input type="submit" value="Enter" name="enter">
			  </div>
	
            </form>
        </div>
		</center>			
    </body>
</html>



