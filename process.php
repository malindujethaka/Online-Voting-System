<?php
	session_start();
	require_once('config.php');
	if(isset($_POST['submit']))
	{
	
		$type=$_POST['user'];
		$Firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
		$Lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
		$Email=mysqli_real_escape_string($conn,$_POST['email']);
		$NIC=mysqli_real_escape_string($conn,$_POST['nic']);
		$Password=mysqli_real_escape_string($conn,$_POST['password']);
		$REPassword=mysqli_real_escape_string($conn,$_POST['repassword']);
		
		if ((!preg_match("/^[a-zA-Z ]*$/",$Firstname)) || (!preg_match("/^[a-zA-Z ]*$/",$Lastname)))
		{
			$_SESSION['sign3']=$_POST['firstname'];
			header("location:sign_upin.php?Error1=Invalid Name Format. ");
		}
		else if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) 
		{
			$_SESSION['sign4']=$_POST['firstname'];
			header("location:sign_upin.php?Error2=Invalid Email Format. ");
		}
		else if (!preg_match("/^[0-9]*$/",$NIC))
		{
			$_SESSION['sign5']=$_POST['firstname'];
			header("location:sign_upin.php?Error3=Invalid NIC Format. ");
		}
		else if($Password!=$REPassword)
		{
			
			$_SESSION['sign2']=$_POST['firstname'];
			header("location:sign_upin.php?success1=Your Password Not Match. ");
		}
		else
		{
			
			if($type=="voter")
			{
				$query="SELECT * FROM user WHERE NIC='$NIC'";
			
				$result=mysqli_query($conn,$query);
				if(mysqli_num_rows($result)==0)
				{
				
					$sql="INSERT INTO user(NIC,Firstname,Lastname,Email,Password) VALUES('$NIC','$Firstname','$Lastname','$Email','$Password')";
				
					$resultx=mysqli_query($conn,$sql);
					if($resultx==true)
					{
						$_SESSION['sign']=$_POST['firstname'];
						header("location:sign_upin.php?success=Your Account Successfully Created. ");

			
					}
				}
				else
				{
					$_SESSION['sign1']=$_POST['firstname'];
					header("location:sign_upin.php?success2=You Are Already User. ");
				
				}
			}
			else
			{
				$query="SELECT * FROM contestant WHERE NIC='$NIC'";
			
				$result=mysqli_query($conn,$query);
				if(mysqli_num_rows($result)==0)
				{
				
					$sql="INSERT INTO contestant(NIC,Firstname,Lastname,Email,Password) VALUES('$NIC','$Firstname','$Lastname','$Email','$Password')";
				
					$resultx=mysqli_query($conn,$sql);
					if($resultx==true)
					{
						$_SESSION['con1']=$_POST['firstname'];
						header("location:sign_upin.php?con1=Your Account Successfully Created. ");

			
					}
				}
				else
				{
					$_SESSION['con2']=$_POST['firstname'];
					header("location:sign_upin.php?success5=You Are Already User. ");
				
				}
			
			}
				
		}	
		
	}
?>



