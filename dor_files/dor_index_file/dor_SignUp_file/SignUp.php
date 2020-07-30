<?php
if(isset($_POST['signup']))
{
error_reporting(1);
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"dor");

	$Email=$_POST['email'];

	$que1=mysqli_query($con,"select * from users where Email='$Email'");
	$count1=mysqli_num_rows($que1);

	if($count1>0)
	{
		echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
	}
	else
	{
		$Name=$_POST['first_name'].' '.$_POST['last_name'];
		$Password=$_POST['password'];
		$Gender=$_POST['sex'];
		$Birthday_Date=$_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
		$FB_Join_Date=$_POST['fb_join_time'];
		$type_of_user=$_POST['usertype'];

		$day=intval($_POST['day']);
		$month=intval($_POST['month']);
		$year=intval($_POST['year']);
		if(checkdate($month,$day,$year))
		{
			$que2=mysqli_query($con,"insert into users(Name,Email,Password,Gender,Birthday_Date,FB_Join_Date,type_of_user) values('$Name','$Email','$Password','$Gender','$Birthday_Date','$FB_Join_Date','$type_of_user')");

			session_start();
			$_SESSION['tempfbuser']=$Email;


			if($Gender=="Male")
			{
				header("location:dor_files/dor_step/dor_step1/Step1_Male.php");
			}
			else
			{
				header("location:dor_files/dor_step/dor_step1/Step1_Female.php");
			}
		}
		else
		{
			echo "<script>
				alert('The selected date is not valid.');
			</script>";
		}
	}
}
?>
