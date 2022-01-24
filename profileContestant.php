<!DOCTYPE html>
<html>
	<head>
		<title>Online Voting System</title>
		<link rel="stylesheet" type="text/css" href="css/headerfooter03.css">
		
		
	</head>
	<body bgcolor="DarkSlateGray">
		
		<ul id="b1">
			<li class="a2"><img src="images/LOGO.png" width="30px" height="30px" class ="a19" >
			<li class="a1">THE VOICE 2020</li>
			<li><?php
					session_start();
					if(isset($_SESSION['log']))
					{
						echo '<a href="log_out.php ?logout">Logout</a>';
					}
					else
					{
						header("location:log_in.php");
					}

					
					
				?>
			</li>
			
		</ul>
		
		
		<hr class="a4">	
		<ul id="b2">
			<li><a href="01.html">CONTESTANT PROFILE</a></li>
			<li><a href="01.html">VIEW TIME SHEDULE</a></li>
			<li><a href="01.html">COMMENTS</a></li>
			<li><a href="01.html">RESULTS</a></li>
			<li class="a5"><form>
					<input type="Text" name="search" placeholder="Search.." class="a6">
				</form>
			</li>
		</ul>
		
		
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<p><font color="RED"> ##THIS CONTENT CREATE BY ANOTHER MEMBER OF GROUP</font></P>
		
		
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		
		
		
		
		<br>
		
		<br>
		<div>
		<hr class="a4">
		<ul id="b3">
		<li class="a7"><img src="images/LOGO.png" width="50px" height="50px" ></li>
		<li class="a8">GOLD TV</li>
		</ul>
		</div>
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