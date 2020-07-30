<?php
if(isset($_POST['Login']))
{error_reporting(1);
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"dor");

	$user=$_POST['username'];
	$pass=$_POST['password'];

	$que1=mysqli_query($con,"select * from users where Email='$user' and Password='$pass'");
	$count1= mysqli_num_rows ($que1);

	if($count1>0)
	{
		session_start();
		$_SESSION['tempfbuser']=$user;
		$que6=mysqli_query($con,"select * from users where Email='$user'");
		$rec6=mysqli_fetch_array($que6);
		$userid=$rec6[0];

		$que2=mysqli_query($con,"select * from user_profile_pic where user_id=$userid");
		$count2=mysqli_num_rows($que2);

		if($count2>0)
		{
			session_start();
			$_SESSION['fbuser']=$user;
			$query1=mysqli_query($con,"select * from users where Email='$user'");
			$rec1=mysqli_fetch_array($query1);
			$userid=$rec1[0];
			mysqli_query($con,"update user_status set status='Online' where user_id='$userid'");
			header("location:dor_files/dor_home/Home.php");
		}
		else
		{
			while($rec=mysqli_fetch_array($que1))
			{
				$Gender=$rec[4];
			}
			if($Gender=="Male")
			{
				header("location:dor_files/dor_step/dor_step1/Step1_Male.php");
			}
			else
			{
				header("location:dor_files/dor_step/dor_step1/Step1_Female.php");
			}
		}
	}
	else
	{
		$que5=mysqli_query($con,"select * from users where Email='$user'");
		$count5=mysqli_num_rows($que5);

		if($count5>0)
		{
			header("location:Invalid_Password.php");
		}
		else
		{
			header("location:Invalid_Username.php");
		}
	}
}
?>
