<?php
	session_start();
	error_reporting(1);
	if(isset($_SESSION['tempfbuser']))
	{
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"dor");
		$user=$_SESSION['tempfbuser'];
		$que1=mysqli_query($con,"select * from users where Email='$user' ");
		$rec=mysqli_fetch_array($que1);
		$userid=$rec[0];
		$gender=$rec[4];
		if($gender=="Male")
		{
			$que2=mysqli_query($con,"select * from user_profile_pic where user_id=$userid");
			$count1=mysqli_num_rows($que2);
			if($count1==0)
			{
?>
<?php

	if(isset($_POST['file']) && ($_POST['file']=='Upload'))
	{
		$path = "../../../dor_users/Male/".$user."/Profile/";
		$path2 = "../../../dor_users/Male/".$user."/Post/";
		$path3 = "../../../dor_users/Male/".$user."/Cover/";
		mkdir($path, 0, true);
		mkdir($path2, 0, true);
		mkdir($path3, 0, true);

		$img_name=$_FILES['file']['name'];
    	$img_tmp_name=$_FILES['file']['tmp_name'];
    	$prod_img_path=$img_name;
    	move_uploaded_file($img_tmp_name,"../../../dor_users/Male/".$user."/Profile/".$prod_img_path);

		mysqli_query($con,"insert into user_profile_pic(user_id,image) values('$userid','$img_name')");
		session_start();
		$_SESSION['fbuser']=$user;
		header("location:../../dor_home/Home.php");
	}
?>
<html>
<head>
	<title> Step1 </title>
	<link href="step1_css/step1.css" rel="stylesheet" type="text/css">
    <link href="../../dor_font/font.css" rel="stylesheet" type="text/css">
	<script src="step1_js/Image_check.js" language="javascript">
	</script>
</head>
<body>
<?php
	include("step1_background/background.php");
?>

<div style="position:absolute; left:35%; top:50%;">
<img src="step1_images/Male.jpg" style=" height:60; width:60;"/>
</div>

<div style="position:absolute; left:39%; top:50%;">
	<table>
		<tr>
			<td></td> <td>&nbsp;  </td> <td style="text-transform:capitalize"> <h4><?php echo $rec[1]; ?></h4></td>
		</tr>
	</table>
</div>

<form method="post" enctype="multipart/form-data" name="uimg" onSubmit="return Img_check();">
	<div style="position:absolute; left:40%; top:65%;">
		<input type="file" name="file" id="img"/>
	</div>
	<div style="position:absolute; left:57.5%; top:64.8%; " id="upload">
		<input type="submit" value="Upload" name="file" id="upload_button" style="background-color:#E98074; color:#ffffff;
		border-top:#e6615c;
		border-right-color:#e6615c;
		border-bottom-color:#e6615c;
		border-left-color:#e6615c;"/>
	</div>
</form>
	<?php
		include("step1_erorr/step1_erorr.php");
	?>
</body>
</html>
<?php
			}
			else
			{
				header("location:../../dor_home/Home.php");
			}

		}
		else
		{
			header("location:../dor_step1/Step1_Female.php");
		}
	}
	else
	{
		header("location:../../../index.php");
	}
?>
