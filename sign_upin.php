<!DOCTYPE html>
<html>
	<head>
		<title>Online Voting System</title>
		<link rel="stylesheet" type="text/css" href="css/headerfooter.css">
		<link rel="stylesheet" type="text/css" href="css/signup2.css">
	</head>
	<body bgcolor="black">


		
		<ul id="b1">
			<li class="a2"><img src="images/LOGO.png" width="30px" height="30px" class="a19"></li>
			<li class="a1">THE VOICE 2020</li>
			<li><a href="home.html" class="a0">HOME</a></li>
			<li><a href="log_in.php" class="a0">LOG IN</a></li>
			<li><a href="sign_up.php" class="a0">SIGN UP</a></li>
			<li><a href="01.html" class="a0">ABOUT US</a></li>
		
		</ul>
		<div>
		
		
		<form id="d1">
		<img src="images/LOGO.png" width="200px" height="200px" class="d1" ></br>
		<br/>
		
		<?php
			if(@$_GET['success']==true)
			{
		?>
			<label  class="d4">Congratulations !!</label></br>
			<label class="d2"> <?php echo $_GET['success']?> </label></br>
		<?php
			}
		?>
		
		<?php
			if(@$_GET['success1']==true)
			{
		?>
			<label class="d3"> <?php echo $_GET['success1']?> </label></br>
		<?php
			}
		?>
		<?php
			if(@$_GET['success2']==true)
			{
		?>
			<label class="d5"> <?php echo $_GET['success2']?> </label></br>
		<?php
			}
		?>
		<?php
			if(@$_GET['Error1']==true)
			{
		?>
			<label class="d5"> <?php echo $_GET['Error1']?> </label></br>
		<?php
			}
		?>
		<?php
			if(@$_GET['Error2']==true)
			{
		?>
			<label class="d5"> <?php echo $_GET['Error2']?> </label></br>
		<?php
			}
		?>
		<?php
			if(@$_GET['Error3']==true)
			{
		?>
			<label class="d5"> <?php echo $_GET['Error3']?> </label></br>
		<?php
			}
		?>
		<?php
			if(@$_GET['con1']==true)
			{
		?>
			<label  class="d4">Congratulations !!</label></br>
			<label class="d2"> <?php echo $_GET['con1']?> </label></br>
		<?php
			}
		?>
		<?php
			if(@$_GET['con2']==true)
			{
		?>
			<label class="d5"> <?php echo $_GET['success5']?> </label></br>
		<?php
			}
		?>
		
		<?php
			session_start();
			if((isset($_SESSION['sign'])) ||(isset($_SESSION['sign1'])))
			{
				echo '<a href="sign_out.php ?signout">sign in</a>';
			}
			else if(isset($_SESSION['sign1']))
			{
				echo'<a href="sign_out.php ?signout1">Retry</a>';
			}
			else if(isset($_SESSION['sign2']))
			{
				echo'<a href="sign_out.php ?signout2">Retry</a>';
			}
			else if(isset($_SESSION['sign3']))
			{
				echo'<a href="sign_out.php ?signout3">Retry</a>';
			}
			else if(isset($_SESSION['sign4']))
			{
				echo'<a href="sign_out.php ?signout4">Retry</a>';
			}
			else if(isset($_SESSION['sign5']))
			{
				echo'<a href="sign_out.php ?signout5">Retry</a>';
			}
			else if(isset($_SESSION['con1']))
			{
				echo'<a href="sign_out.php ?con1">sign in</a>';
			}
			else if(isset($_SESSION['con2']))
			{
				echo'<a href="sign_out.php ?con2">Retry</a>';
			}
		?>
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