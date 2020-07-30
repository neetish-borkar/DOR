function searched_over(uid)
{
	document.getElementById("Photo"+uid).bgColor = "#E98074";
	document.getElementById("Photo"+uid).style.color="#FFFFFF";
	document.getElementById("Name_bg"+uid).bgColor = "#E98074";
	document.getElementById("Name_font"+uid).style.color="#FFFFFF";
}
function searched_out(uid)
{
	document.getElementById("Photo"+uid).bgColor = "#FFFFFF";
	document.getElementById("Photo"+uid).style.color="#E66C5E";
	document.getElementById("Name_bg"+uid).bgColor = "#FFFFFF";
	document.getElementById("Name_font"+uid).style.color="#E66C5E";	
}
function see_more_over()
{
	document.getElementById("see_more").bgColor = "#E98074";
	document.getElementById("see_more_text").style.color="#FFFFFF";
}

function see_more_out()
{
	document.getElementById("see_more").bgColor = "#F2F2F2";
	document.getElementById("see_more_text").style.color="#E66C5E";
}




