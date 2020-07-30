<html>
<head>
	<script src="background_file/background_js/event.js"></script>
	<script src="background_file/background_js/searching.js"></script>
	<script src="background_file/background_js/searched_reco_event.js">
	</script>
	<script src="background_file/background_js/submited_searched_reco_event.js"></script>
    <link href="../dor_font/font.css" rel="stylesheet" type="text/css">
</head>
<body>

<!--Head background-->
<div style="position:fixed;left:0;top:0; height:6%; width:100%; z-index:1; background:#E98074">   </div>
<!--Head fb text-->
<div style="position:fixed;left:4.05%;top:0.8%;font-size:25;font-weight:900; z-index:2;"> <a href="Home.php" style="color:#FFFFFF; text-decoration:none;"> <font face="myFbFont"> DOR </font> </a> </div>
<!--Head fb text background-->
<div style="position:fixed;left:4%;top:1%; height:5%; width:8%; z-index:1; background:#4A63A5; display:none;" id="head_fb_text_backgraound">   </div>

<div style="position:fixed; left:14.7%; top:1.2%; z-index:1;" > <a href="Group_Message.php"> <img src="background_file/background_icons/messages.jpg" height="35" width="45"> </a> </div>

<script>
	function bcheck()
	{
		s=document.fb_search.search1.value;

		if(s=="")
		{
			return false;
		}
		return true;
	}
</script>
<form name="fb_search" action="Search_Display_submit.php" method="get" onSubmit="return bcheck()">
	<div style="position:fixed; left:19%; top:1.2%; z-index:1;"> <input type="text" name="search1" style="height:25; width:500;"  onKeyUp="searching();" id="search_text1" placeholder="Search for people" > </div>

	<div id="searching_ID"></div>

	<div style="position:fixed; left:54.2%;top:1.6%; z-index:1;">
	<input type="submit" value=" " style="background-image:url(background_file/background_icons/search.png);">
	</div>
</form>


<?php
error_reporting(1);
		$user=$_SESSION['fbuser'];
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"dor");
		$query1=mysqli_query($con,"select * from users where Email='$user'");
		$rec1=mysqli_fetch_array($query1);
		$userid=$rec1[0];
		$query2=mysqli_query($con,"select * from user_profile_pic where user_id=$userid");
		$rec2=mysqli_fetch_array($query2);

		$name=$rec1[1];
		$gender=$rec1[4];
		$img=$rec2[2];
?>

<div style="position:fixed; left:71.8%; top:0.6%; z-index:1;">
	<table cellspacing="0">
	<tr id="hedarname2">

		<td style="padding-left:7;" id="head_img">  <img src="../../dor_users/<?php echo $gender; ?>/<?php echo $user; ?>/Profile/<?php echo $img; ?>" style="height:27; width:25;"> </a> </td>

		<td id="head_name_bg"> <a href="../dor_profile/Profile.php" id="head_name_font" style="color:#DEDEEF; font-size:12; font-weight:900;font-family:lucida Bright; text-transform:capitalize; text-decoration:none;"> &nbsp;  <?php echo $name; ?> &nbsp;</a> </td>
		<td style="color:#DEDEEF;"> | </td>
		<td id="head_home_bg" > <a href="Home.php" id="head_home_font" style="color:#DEDEEF; font-size:12; font-weight:900;font-family:lucida Bright; text-decoration:none;"> &nbsp; Home &nbsp; </a> </td>
        <td style="color:#DEDEEF;">|</td>
	</tr>
	</table>
</div>

<!--fb option-->
<script src="background_file/background_js/options.js"></script>

        <div style="position:fixed; left:97%; top:0.4%; z-index:1;"> <img src="background_file/background_icons/nexusae0_home_settings_icon2.png" height="35" width="35" onClick="open_option()"> </div>

<div style="display:none" id="option">

<div style="position:fixed; left:97%; top:0.4%; z-index:1;"> <img src="background_file/background_icons/nexusae0_home_settings_icon2.png" height="35" width="35" onClick="close_option()"> </div>

        <div style="position:fixed; left:85%; top:6%; z-index:3; background:#FFF; height:32%; width:14.8%; box-shadow:0px 2px 10px 1px rgb(0,0,0);"> </div>

         <div style="position:fixed; left:86%; top:8.5%; z-index:3;">
        <a href="../dor_profile/Profile.php"> <img src="img/timeline.png" width="16" height="16" onMouseOver="head_timeline_over()" onMouseOut="head_timeline_out()"></a>
        </div>
        <div style="position:fixed; left:88%; top:5%; z-index:3;">
                 <a href="../dor_profile/Profile.php" style="text-decoration:none; color:#000;" id="head_timeline" onMouseOver="head_timeline_over()" onMouseOut="head_timeline_out()" ><h4>Timeline</h4></a>
        </div>


        <div style="position:fixed; left:85.8%; top:18%; z-index:3;"> <a href="../dor_profile/photos.php"> <img src="img/photo&video.PNG" onMouseOver="head_photos_over()" onMouseOut="head_photos_out()"> </a> </div>
<div style="position:fixed; left:88.2%; top:15%; z-index:3;"><a href="../dor_profile/photos.php" style="text-decoration:none; color:#000;" id="head_photos" onMouseOver="head_photos_over()" onMouseOut="head_photos_out()"><h4>Photos</h4></a></div>

	<div style="position:fixed; left:85.8%; top:23%; z-index:3;"> <a href="Settings.php"> <img src="img/settings2.png" height="25" width="23" onMouseOver="head_settings_over()" onMouseOut="head_settings_out()"> </a> </div>
<div style="position:fixed; left:88.2%; top:20%; z-index:3;"><a href="Settings.php" style="text-decoration:none; color:#000;" id="head_settings" onMouseOver="head_settings_over()" onMouseOut="head_settings_out()"><h4> Account Settings </h4></a></div>

<div style="position:fixed; left:86.1%; top:27.5%; z-index:3;"> <a href="feedback.php"> <img src="background_file/background_icons/icon-feedback.png" height="20" width="20" onMouseOver="head_feedback_over()" onMouseOut="head_feedback_out()"> </a> </div>
<div style="position:fixed; left:88.3%; top:24.5%; z-index:3;"><a href="feedback.php" style="text-decoration:none; color:#000;" id="head_feedback" onMouseOver="head_feedback_over()" onMouseOut="head_feedback_out()"><h4> Feedback </h4></a></div>

<div style="position:fixed; left:86%; top:32.5%; z-index:3;"> <a href="../dor_logout/logout.php"> <img src="background_file/background_icons/logout.png" height="20" width="20"  onMouseOver="head_logout_over()" onMouseOut="head_logout_out()"> </a> </div>
<div style="position:fixed; left:88.3%; top:29.1%; z-index:3;"><a href="../dor_logout/logout.php" style="text-decoration:none; color:#000;" id="head_logout" onMouseOver="head_logout_over()" onMouseOut="head_logout_out()"><h4> Logout </h4></a></div>
</div>






<!--left part-->
<div style="position:fixed; left:1.2%; top:16.5%; z-index:1;">
	<table border="0">
	<tr>
		<td> <a href="../dor_profile/Profile.php"> <img src="../../dor_users/<?php echo $gender; ?>/<?php echo $user; ?>/Profile/<?php echo $img; ?>" style="height:70; width:70;"> </a> </td>
		<td> &nbsp; <a href="../dor_profile/Profile.php" onMouseOver="left_name_over()" onMouseOut="left_name_out()" style="color:#000000; font-size:12; font-weight:900;font-family:lucida Bright; text-transform:capitalize; text-decoration:none;" id="left_name">   <?php echo $name; ?> </a> </td>
	</tr>
	</table>
</div>

<div style="position:fixed; left:7%; top:35.7%;"> <a href="Home.php"> <img src="img/News_Feed.PNG" onMouseOver="left_news_feed_over()" onMouseOut="left_news_feed_out()"> </a> </div>
<div style="position:fixed; left:9%; top:33%;"> <a href="Home.php" style="text-decoration:none; color:#000;" id="news_feed" onMouseOver="left_news_feed_over()" onMouseOut="left_news_feed_out()"> <h4>News Feed</h4> </a></div>



<div style="position:fixed; left:7.3%; top:40.6%;"> <a href="../dor_profile/Profile.php"> <img src="img/timeline.png" width="16" height="16" onMouseOver="left_timeline_over()" onMouseOut="left_timeline_out()"> </a> </div>
<div style="position:fixed; left:9%; top:37.2%;"><a href="../dor_profile/Profile.php" style="text-decoration:none; color:#000;" id="timeline" onMouseOver="left_timeline_over()" onMouseOut="left_timeline_out()" ><h4>Timeline</h4></a></div>






<div style="position:fixed; left:7%; top:49.3%;"> <a href="../dor_profile/photos.php"> <img src="img/photo&video.PNG" onMouseOver="left_photos_over()" onMouseOut="left_photos_out()"> </a> </div>
<div style="position:fixed; left:9%; top:46%;"><a href="../dor_profile/photos.php" style="text-decoration:none; color:#000;" id="photos" onMouseOver="left_photos_over()" onMouseOut="left_photos_out()"><h4>Photos</h4></a></div>

<div style="position:fixed; left:7%; top:53.2%;"> <a href="Group_Message.php"> <img src="img/group.png" height="25" width="23" onMouseOver="left_group_message_over()" onMouseOut="left_group_message_out()"> </a> </div>
<div style="position:fixed; left:9%; top:50%;"><a href="Group_Message.php" style="text-decoration:none; color:#000;" id="group_message" onMouseOver="left_group_message_over()" onMouseOut="left_group_message_out()"><h4>Group Chat</h4></a></div>

<div style="position:fixed; left:7%; top:57.6%;"> <a href="Settings.php"> <img src="img/settings2.png" height="25" width="23" onMouseOver="left_settings_over()" onMouseOut="left_settings_out()"> </a> </div>
<div style="position:fixed; left:9%; top:54.2%;"><a href="Settings.php" style="text-decoration:none; color:#000;" id="settings" onMouseOver="left_settings_over()" onMouseOut="left_settings_out()"><h4>Settings</h4></a></div>


<!--left hr-->
<hr style="position:fixed;left:18%;top:4.8%;height:100%;width:0; border-color:#CCCCCC; box-shadow:-5px 0px 5px 0px rgb(0,0,0);">
<!--right hr-->




</body>
</html>
