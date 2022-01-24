<?php
	session_start();
	if(isset($_GET['signout']))
	{
		session_destroy();
		header("location:log_in.php");
	}
	elseif(isset($_GET['signout1']))
	{
		session_destroy();
		header("location:log_in.php");
	}
	elseif(isset($_GET['signout2']))
	{
		session_destroy();
		header("location:sign_up.php");
	}
	elseif(isset($_GET['signout3']))
	{
		session_destroy();
		header("location:sign_up.php");
	}
	elseif(isset($_GET['signout4']))
	{
		session_destroy();
		header("location:sign_up.php");
	}
	elseif(isset($_GET['signout5']))
	{
		session_destroy();
		header("location:sign_up.php");
	}
	elseif(isset($_GET['con1']))
	{
		session_destroy();
		header("location:sign_up.php");
	}
	elseif(isset($_GET['con2']))
	{
		session_destroy();
		header("location:sign_up.php");
	}
	
?>




