<?php
	session_start();
	error_reporting(1);
	if(isset($_SESSION['fbuser']))
	{
		$v_user_id=$_GET['id'];
		$user=$_SESSION['fbuser'];
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"dor");
		$query1=mysqli_query($con,"select * from users where Email='$user'");
		$rec1=mysqli_fetch_array($query1);
    $query2=mysqli_query($con,"select * from user_profile_pic where user_id=$userid");
		$rec2=mysqli_fetch_array($query2);

		$userid=$rec1[0];
    $name=$rec1[1];
		$gender=$rec1[4];
		$img=$rec2[2];

		if($userid!=$v_user_id)
		{
			include("background.php");
      if(isset($_POST['Donate'])){
        $amount=$_POST['amount'];
        $doner=$_POST['user_id'];
        $taker=$_POST['user_id2'];
        $donate=mysqli_query($con,"insert into donations (user_id,user_id2,amount) values('$doner','$taker','$amount');");
      }
?>
<html>
<head>
</head>
<body bgcolor="#E9EAED">
  <form method="post">
  Ammount<br>
  <INPUT TYPE="hidden" name="user_id" value="<?php echo $userid ?>"><br>
  <INPUT TYPE="hidden" name="user_id2" value="<?php echo $v_user_id ?>"><br>
  <INPUT TYPE="text" name="amount" value="100"><br>
  <INPUT TYPE="submit" name="Donate" value="DONATE">


  </form>

</body>
</html>



<?php
  }
  else
  {
	   header("location:../dor_profile/Profile.php");
  }
?>
<?php
 	}
 	else
 	{
 		header("location:../../index.php");
 	}
?>
