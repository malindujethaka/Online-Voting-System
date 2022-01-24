<?php
	require_once('config.php');
	session_start();
	if(isset($_POST['login']))
	{
		$NIC=$_POST['nic'];
		$pass=$_POST['password'];
		$type=$_POST['user'];
		if($type=="voter")
		{
		
			$query="SELECT * FROM user WHERE NIC='$NIC' AND Password='$pass'";
			$result=mysqli_query($conn,$query);
			if($row=mysqli_fetch_assoc($result))
			{
			
				$_SESSION['log']=$_POST['nic'];
				header("location:profile.php");
			}
			else
			{
				
				header("location:log_in.php?Invalid=Invalid username or password");
			}
		}
		else
		{
			
			
			$query="SELECT * FROM contestant WHERE NIC='$NIC' AND Password='$pass'";
			$result=mysqli_query($conn,$query);
			if($row=mysqli_fetch_assoc($result))
			{
			
				$_SESSION['log']=$_POST['nic'];
				header("location:profileContestant.php");
			}
			else
			{
				
				header("location:log_in.php?Invalid=Invalid username or password");
			}
			
		}
		
	}
		
?>		
		