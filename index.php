<?php
	include("Login.php");
	include("dor_files/dor_index_file/dor_SignUp_file/SignUp.php");
?>
<html>
<head>
	<title> Do.org </title>
<?php
include("dor_files/dor_index_file/dor_background_file/index_background.php");
?>
    <link href="dor_files/dor_font/font.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="dor_files/dor_index_file/dor_js_file/Registration_validation.js"> </script>
</head>
<script>
	function time_get()
	{
		d = new Date();
		mon = d.getMonth()+1;
		time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
		Reg.fb_join_time.value=time;
		}
</script>
<body>
	<!--login form-->
	<form  method="post">
		<div style="position:absolute; left:57.7%; top:2.2%; font-size:12px; color:#FFFFFF;">   Email </div>
		<div style="position:absolute; left:57.7%; top:5.18%; font-size:11px; "> <input type="text" name="username" style="width:149.5;"/> </div>
		<div style="position:absolute; left:57.4%; top:8.8%; font-size:12; color:#CCCCCC;">  <input type="checkbox" checked="checked">   Keep me logged in </div>
		<div style="position:absolute;left:69.6%; top:2.2%; font-size:13px; color:#FFFFFF"> Password </div>
		<div style="position:absolute;left:69.6%; top:5.18%; font-size:13px; "> <input type="password" name="password" style="width:149.5;"> </div>
		<div style="position:absolute;left:81.8%;top:5.2%; ">   <input type="submit" name="Login" value="Log In" id="login_button"
		style="font-size:10px;
		height:25;
		width:60;
		padding:2;
		background-color:#E98074; color:#ffffff;
		border-top:#e6615c;
		border-right-color:#e6615c;
		border-bottom-color:#e6615c;
		border-left-color:#e6615c;
		font-weight:bold;" />
		</div>
	</form>

	<!-- Faceback left part -->

		<!--Left part-->
		<!--Mobile Image-->
	<div style="position:absolute; left:5%; top:35%;"> <img src="dor_files/dor_index_file/dor_image_file/hand.jpg" width="500" height="500"> </div>
    <div style="position:absolute; left:7%; top:24%; color:#E98074; font-size:28px;"> <font face="myFbFont"> DOR is a gateway to let people help </font> </div>
    <div style="position:absolute; left:7%; top:30%; color:#E98074; font-size:28px;"> <font face="myFbFont"> the less fortunate in the best way possible.</font></div>



	<!-- Registration -->
	<form  method="post" onSubmit="return check();" name="Reg">
		<div style="position:absolute;left:58%; top:14.5%; color:#E98074; font-size:25"> <h5> Sign Up </h5> </div>
		<div style="position:absolute;left:59.4%; top:34%; font-size:16px; color:#000000">  First Name: </div>
		<div style="position:absolute;left:65.2%;   top:32.8%; "> <input type="text" name="first_name" class="inputbox" maxlength="10"/> </div>
		<div style="position:absolute;left:59.4%; top:41%; font-size:16px; color:#000000">  Last Name: </div>
		<div style="position:absolute;left:65.2%;  top:39.8%;  "> <input type="text" name="last_name"  size="25" class="inputbox" maxlength="10" /> </div>
		<div style="position:absolute;left:59.2%; top:48%; font-size:16px; color:#000000">  Your Email:  </div>
		<div style="position:absolute;left:65.2%;  top:46.8%; "> <input type="text" name="email"  size="25" class="inputbox" /> </div>
		<div style="position:absolute;left:57.4%; top:55%; font-size:16px; color:#000000">  Re-enter Email:  </div>
		<div style="position:absolute;left:65.2%; top:53.8%; "> <input type="text" name="remail"  size="25" class="inputbox" /> </div>
		<div style="position:absolute;left:57.4%; top:62%; font-size:16px; color:#000000"> New Password:  </div>
		<div style="position:absolute;left:65.2%; top:60.8%; "> <input type="password" name="password" size="25" class="inputbox" /> </div>
		<div style="position:absolute;left:62.2%; top:68.5%; font-size:16px; color:#000000"> I am:  </div>
		<div style="position:absolute;left:65.2% ;top:67.8%;">
		<select name="sex" style="width:130;height:35;font-size:18px;padding:3;">
			<option value="Select Sex:"> Select Sex: </option>
			<option value="Female"> Female </option>
			<option value="Male"> Male </option>
		</select>
		</div>

		<div style="position:absolute;left:60.28%; top:74.8%; font-size:16px; color:#000000"> Type of user:  </div>
		<div style="position:absolute;left:65.2% ;top:74%;">
		<select name="usertype" style="width:130;height:35;font-size:18px;padding:3;">
			<option value="Select Sex:"> Select User: </option>
			<option value="Non-NGO"> Non-NGO </option>
			<option value="NGO"> NGO </option>
		</select>
		</div>

<div style="position:absolute;left:61%; top:82.5%; font-size:16px; color:#000000">  Birthday:  </div>


	<div style="position:absolute;left:65.2%; top:82%;">
	<select name="month" style="width:80;font-size:18px;height:32;padding:3;">
	<option value="Month:"> Month: </option>

	<script type="text/javascript">

		var m=new Array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		for(i=1;i<=m.length-1;i++)
		{
			document.write("<option value='"+i+"'>" + m[i] + "</option>");
		}
	</script>

	</select>
	</div>



	<div style="position:absolute; left:72%; top:82%;">
	<select name="day" style="width:63;font-size:18px;height:32;padding:3;">
	<option value="Day:"> Day: </option>

	<script type="text/javascript">

		for(i=1;i<=31;i++)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}

	</script>

	</select>
	</div>

	<div style='position:absolute;left:77.5%;top:82%;'>
	<select name="year" style="width:70; font-size:18px; height:32; padding:3;">
	<option value="Year:"> Year: </option>

	<script type="text/javascript">

		for(i=2001;i>=1960;i--)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}

	</script>

	</select>
	</div>
		<input type="hidden" name="fb_join_time">
		<div style="position:absolute;left:65.2%; top:88%; ">  <input type="submit" name="signup" value="Sign Up" id="sign_button" / onClick="time_get()" style="background:#E98074;
		color:#FFFFFF;
		border-top-color:#e6615c;
		border-right-color:#e6615c;
		border-left-color:#e6615c;
		font-size:18px;
		height:40;
		width:112;
		font-weight:bold;
		box-shadow:5px 0px 10px 1px rgb(0,0,0);"> </div>
		</form>

<?php
	include("dor_files/dor_index_file/dor_erorr_file/dor_erorr.php");
?>
</body>
</html>
