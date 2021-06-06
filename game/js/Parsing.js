var picnum=0;
var pic=[6,7,8,9,12,15,17,20];
function nextfunction(argument) {
	if(picnum>6)
	{
	}
	else
	{
		picnum++;
	}
	document.getElementById("num").innerHTML=pic[picnum]+".";
	document.getElementById("ParPic").src="pic/"+pic[picnum]+".png";
}
function prefunction(argument) {
	if(picnum==0)
	{

	}
	else
	{
		picnum--;
	}
	document.getElementById("num").innerHTML=pic[picnum]+".";
	document.getElementById("ParPic").src="pic/"+pic[picnum]+".png";
}