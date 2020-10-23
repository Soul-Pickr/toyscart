<?php
$servername="localhost";
$user="root";
$pass="";
$db="toys";

	$con=mysql_connect($servername,$user,$pass);
	mysql_select_db($db,$con);
	if($con)
	{
		dat();
	}
	else
	{
		echo "<CENTER>","<font face='Lucida Calligraphy' size=50 COLOR='TEAL'>","ORDER CANNOT BE UPDATED DUE TO SOME SERVER ERROR","</FONT>","</CENTER>","<BR/>";
	}

function dat()
{
$NAME=$_POST['name'];
$MOBILE=$_POST['mobile'];
$ADDRESS=$_POST['address'];
$PINCODE=$_POST['pincode'];
$EMAIL=$_POST['email'];
$ORDERNO=$_POST['orderno'];
$send=mysql_query("update cart set NAME='$NAME',ADDRESS='$ADDRESS',PINCODE=$PINCODE,EMAIL='$EMAIL',MOBILE=$MOBILE where ORDERNO=$ORDERNO");
if($send)
{
	echo "<CENTER>","<font face='Lucida Calligraphy' size='50' COLOR='TEAL'>","YOUR ORDER HAS BEEN UPDATED NOW...","</FONT>","</CENTER>","<BR/>";
	
}
else
{
	echo "<CENTER>","<font face='Lucida Calligraphy' size=50 COLOR='TEAL'>","ORDER CANNOT BE UPDATED DUE TO SOME SERVER ERROR","</FONT>","</CENTER>","<BR/>";
}
}
?>
<body background="rrr.jpg">
<A HREF="HOMEPAGE.HTML"><IMG SRC="BACK4.Gif" WIDTH="200" HEIGHT="90"></A></CENTER>
<A HREF="DELETE.HTML"><IMG SRC="DELETE.GIF" WIDTH="200" HEIGHT="90"></A>       <A HREF="UPDATE.HTML"><IMG SRC="UPDATE.GIF" WIDTH="200" HEIGHT="90"></A>      <A HREF="SHOW.HTML"><IMG SRC="SHOW.GIF" WIDTH="200" HEIGHT="90"></A>
</BODY>
</HTML>
