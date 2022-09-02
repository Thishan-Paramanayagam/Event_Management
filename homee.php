
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" />
<title>Purple Fox Event Management System</title>

<link rel="stylesheet" type="text/css" href="Homestyle.css"  >

</head>
<body>
</a>
 	
<div id="body_wrapper">
<div id="wrapper">
	<div id="header">
    	<div id="site_title"><img align ="center" src="./images/Logo.png" alt="Logo" /></div>
       
    </div>
    <div class="navbar">
  <a href="home.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Reserve
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
	  <a href="admin page.php">Main Reservation</a>
    </div>
  </div> 
     <div class="dropdown">
    <button class="dropbtn">Facilities 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="wedding.php">Wedding</a>
      <a href="gettogether.php">Get Together</a>
      <a href="birthday.php">Birthday</a>
     
    </div>
 </div> 
     <a href="help.php">Help</a>
     <p style="float: right;color: white;margin: 10px">
        <?php 
            if (isset($_GET['username'])) {
                echo "Logged as " . $_GET['username'];
            }else {
                echo "Logged as Guest";
            }
        ?>
	  <div class="logout">
        <a href="login.php"><img src="./images/Logout.png" alt="UserLogIn" width="120" height="55"></a>	        	
        </div>
 </p>
  
</div>
    <div id="middle">
    	<div class="col col_3 event event1">
        	<a href="#" class="event_btn"></a>	
        </div>
        <div class="col col_3 event event2">
        	<a href="#" class="event_btn"></a>	
        </div>
        <div class="col col_3 event event3 no_mr">
        	<a href="#" class="event_btn"></a>	
        </div>
        <div class="clear"></div>
    </div>
    <div id="main">
    	<div class="col_2 left">
        	<h2><b>Welcome to Purple Fox </b></h2>
            <img class="img_border img_nom" src="images/deco.jpg" alt="image" />
            <p><em>Here you can book party arrangemnts quickly and easily. >>>Let's Party<<< </em></p>
            <p style=background-color:black; align="justify">Purple Fox online party arrangemnt company is one of the leading company among online party arrangemnt companies. We can arrange Birthday Parties, Wedding Parties, Bachelor Parties, Get-together parties, Reunions, DJ concerts and more and more</p>
        </div>
        
        <div class="col_2 right">
        	<h2><b>Attractive Decorations</b></h2>
        	<img class="img_border img_nom" src="images/deco2.jpg" alt="image" />
            <p><em>Here you can choose plenty of decoration themes. >>>Let's Party<<< </em></p>
            <p style=background-color:black; align="justify"> We provide differnet type of party experience to you through our inovatives decorative themes. Our attractive decorations and DJ arrangements definitely make your party as an unforgetable event</p>
        </div>    
        
        <div class="clear"></div>
    </div>
    <div id="footer">
    	<div class="col_2 left">
        	" Follow us on Facebook" <a href="https://www.facebook.com/Purple-FOX-100611625373704">Purple Fox</a>
		<p><a href="#"><img src="images/facebook.png" alt="Facebook"/></a></p>
        </div>	
    	<div class="col_2 right">
            Copyright © 2021 <a href="https://www.facebook.com/Purple-FOX-100611625373704">Purple Fox Online Party Arrangement System</a>
		</div>
    </div>
</div>
</div>
</body>
</html>