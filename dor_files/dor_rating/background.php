<?php
$query2=mysqli_query($con,"select * from user_profile_pic where user_id=$userid");
$rec2=mysqli_fetch_array($query2);
$img=$rec2[2];
?>
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
<div style="position:fixed;left:4.05%;top:0.8%;font-size:25;font-weight:900; z-index:2;"> <a href="../dor_home/Home.php" style="color:#FFFFFF; text-decoration:none;"> <font face="myFbFont"> DOR </font> </a> </div>
<!--Head fb text background-->
<div style="position:fixed;left:4%;top:1%; height:5%; width:8%; z-index:1; background:#4A63A5; display:none;" id="head_fb_text_backgraound">   </div>

<div style="position:fixed; left:14.7%; top:1.2%; z-index:1;" > <a href="../dor_home/Group_Message.php"> <img src="background_file/background_icons/messages.jpg" height="35" width="45"> </a> </div>

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
<form name="fb_search" action="../dor_home/Search_Display_submit.php" method="get" onSubmit="return bcheck()">
	<div style="position:fixed; left:19%; top:1.2%; z-index:2;"> <input type="text" name="search1" placeholder="Search for people" style="height:25; width:500;" onKeyUp="searching();" id="search_text1"> </div>

	<div id="searching_ID"></div>

	<div style="position:fixed; left:54.2%;top:1.6%; z-index:2;">
	<input type="submit" value=" " style="background-image:url(background_file/background_icons/search.png);">
	</div>
</form>

<div style="position:fixed; left:71.8%; top:0.6%; z-index:2;">
	<table cellspacing="0">
	<tr id="hedarname2">

		<td style="padding-left:7;" id="head_img" > <a href="Profile.php">  <img src="../../dor_users/<?php echo $gender; ?>/<?php echo $user; ?>/Profile/<?php echo $img; ?>" style="height:27; width:25;"> </a> </td>

		<td id="head_name_bg"> <a href="../dor_profile/Profile.php" id="head_name_font" style="color:#DEDEEF; font-size:12; font-weight:900;font-family:lucida Bright; text-transform:capitalize; text-decoration:none;"> &nbsp;  <?php echo $name; ?> &nbsp;</a> </td>
		<td style="color:#DEDEEF;"> | </td>
		<td id="head_home_bg" > <a href="../dor_home/Home.php" id="head_home_font" style="color:#DEDEEF; font-size:12; font-weight:900;font-family:lucida Bright; text-decoration:none;"> &nbsp; Home &nbsp; </a> </td>
        <td style="color:#DEDEEF;">|</td>

	</tr>
	</table>
</div>
<!--fb option-->
<script src="background_file/background_js/options.js"></script>

        <div style="position:fixed; left:97%; top:0.4%; z-index:2;"> <img src="background_file/background_icons/nexusae0_home_settings_icon2.png" height="35" width="35" onClick="open_option()"> </div>

<div style="display:none" id="option">

<div style="position:fixed; left:97%; top:0.4%; z-index:2;"> <img src="background_file/background_icons/nexusae0_home_settings_icon2.png" height="35" width="35" onClick="close_option()"> </div>

        <div style="position:fixed; left:85%; top:6%; z-index:3; background:#FFF; height:32%; width:14.8%; box-shadow:0px 2px 10px 1px rgb(0,0,0);"> </div>

         <div style="position:fixed; left:86%; top:8.5%; z-index:3;">
        <a href="../dor_profile/Profile.php"> <img src="img/timeline.png" width="16" height="16" onMouseOver="head_timeline_over()" onMouseOut="head_timeline_out()"></a>
        </div>
        <div style="position:fixed; left:88%; top:5%; z-index:3;">
                 <a href="../dor_profile/Profile.php" style="text-decoration:none; color:#000;" id="head_timeline" onMouseOver="head_timeline_over()" onMouseOut="head_timeline_out()" ><h4>Timeline</h4></a>
        </div>



        <div style="position:fixed; left:85.8%; top:18%; z-index:3;"> <a href="../dor_profile/photos.php"> <img src="img/photo&video.PNG" onMouseOver="head_photos_over()" onMouseOut="head_photos_out()"> </a> </div>
<div style="position:fixed; left:88.2%; top:15%; z-index:3;"><a href="../dor_profile/photos.php" style="text-decoration:none; color:#000;" id="head_photos" onMouseOver="head_photos_over()" onMouseOut="head_photos_out()"><h4>Photos</h4></a></div>

	<div style="position:fixed; left:85.8%; top:23%; z-index:3;"> <a href="../dor_home/Settings.php"> <img src="img/settings2.png" height="25" width="23" onMouseOver="head_settings_over()" onMouseOut="head_settings_out()"> </a> </div>
<div style="position:fixed; left:88.2%; top:20%; z-index:3;"><a href="../dor_home/Settings.php" style="text-decoration:none; color:#000;" id="head_settings" onMouseOver="head_settings_over()" onMouseOut="head_settings_out()"><h4> Account Settings </h4></a></div>

<div style="position:fixed; left:86.1%; top:27.5%; z-index:3;"> <a href="../dor_home/feedback.php"> <img src="background_file/background_icons/icon-feedback.png" height="20" width="20" onMouseOver="head_feedback_over()" onMouseOut="head_feedback_out()"> </a> </div>
<div style="position:fixed; left:88.3%; top:24.5%; z-index:3;"><a href="../dor_home/feedback.php" style="text-decoration:none; color:#000;" id="head_feedback" onMouseOver="head_feedback_over()" onMouseOut="head_feedback_out()"><h4> Feedback </h4></a></div>

<div style="position:fixed; left:86%; top:32.5%; z-index:3;"> <a href="../dor_logout/logout.php"> <img src="background_file/background_icons/logout.png" height="20" width="20" onMouseOver="head_logout_over()" onMouseOut="head_logout_out()"> </a> </div>
<div style="position:fixed; left:88.3%; top:29.1%; z-index:3;"><a href="../dor_logout/logout.php" style="text-decoration:none; color:#000;" id="head_logout" onMouseOver="head_logout_over()" onMouseOut="head_logout_out()"><h4> Logout </h4></a></div>
</div>


</body>
</html>
