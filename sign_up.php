<!DOCTYPE html>
<html>
	<head>
		<title>Online Voting System</title>
		<link rel="stylesheet" type="text/css" href="css/headerfooter.css">
		<link rel="stylesheet" type="text/css" href="css/signup1.css">
	</head>
	
	<body bgcolor="black" >


		
		<ul id="b1">
			<li class="a2"><img src="images/LOGO.png" width="30px" height="30px" class="a19"></li>
			<li class="a1">THE VOICE 2020</li>
			<li><a href="home.html" class="a0">HOME</a></li>
			<li><a href="log_in.php" class="a0">LOG IN</a></li>
			<li><a href="sign_up.php" class="a0">SIGN UP</a></li>
			<li><a href="01.html" class="a0">ABOUT US</a></li>
		
		</ul>
		<div>
		
		
		<form id="h1" action="process.php" method="post">
		<img src="images/LOGO.png" width="200px" height="200px" class="g1" ></br>
		<label class="g3">Sign Up</label></br>
		<label class="g8"> Your Voice 2020 Account !</label></br>
		</br>
		</br>
		<label class="g9">Choose Account Type :</label>

		<select class="g10" name="user" required>
		<option value="voter" class="g11">Voter</option>
		<option value="Contestant" class="g11">Contestant</option>
	
		</select>
		<input type="text" name="firstname" placeholder="First Name" class="g2" size="20" required><br>
		<input type="text" name="lastname" placeholder="Last Name" class="g2"  size="20" required><br>
		<input type="text" name="email" placeholder="E-mail"  class="g4" size="30" required><br>
		<input type="text" name="nic" placeholder="NIC" class="g0"  size="12" required><br>
		<input type="password" name="password" placeholder="Password" class="g5"  maxlength="8" required id="c1"><br>
		<input type="password" name="repassword" placeholder="Re-Password" class="g5" maxlength="8" required id="c2"><br>
		<?php
			if(@$_GET['Invalid']==true)
			{
		?>
			<label class="a32"> <?php echo $_GET['Invalid']?> </label></br>
		<?php
			}
		?>
		
			
		<a href="sign_in.htm"><input type="submit" name="submit" value="Sign Up" class="g6"></a><br>
		
		</form>
		
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<hr class="a4">
		<ul id="b3">
		<li class="a7"><img src="images/LOGO.png" width="50px" height="50px" ></li>
		<li class="a8">GOLD TV</li>
		</ul>
		<br>
		<br>
		
		<ul id="b4">
		<li class="a9">SHERE THE MOMENT</li>
		<li class="a10">QUICK LINKS</li>
		</ul>
		<ul id="b7">
		<li><a href="#" class="a14"><img src="images/fb.png" width="30px" height="30px" ></a></li>
		<li><a href="#"class="a15"><img src="images/twt.png" width="30px" height="30px"></a></li>
		<li><a href="#"class="a16"><img src="images/insta.png" width="30px" height="30px"></i></a></li>
		<li><a href="#"class="a17"><img src="images/youtube.png" width="30px" height="30px"></i></a></li>
		<li><a href="#"class="a18"><img src="images/in.png" width="30px" height="30px"></a></li>
		</ul>
		<ul id="b5">
		<li><a href="#">FAQ</a></li>
		<li><a href="#">Contact Us</a></li>
		<li><a href="#">Privacy & Policy</a></li>
		<li><a href="#">Terms & Condition</a></li>
		<li><a href="#">Technical support</a></li>
		</ul>

		<ul id="b6">
		<li class="a11">All right Reserved</li>
		<li class="a12">Copyright 2020 Gold Tv PVT LTD</li>
		</ul>
	</body>	
</html>