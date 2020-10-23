
<?php
$servername="localhost";
$user="root";
$pass="";
$db="toys";
IF(ISSET($_POST['BTN']))
{
	$con=mysql_connect($servername,$user,$pass);
	mysql_select_db($db,$con);
	if($con)
	{
	
		da();
	}
	else
	{
		echo "<CENTER>","<font face='Lucida Calligraphy' size=50 COLOR='TEAL'>","DETAILS CANNOT BE FETCHED DUE TO SOME SERVER ERROR","</FONT>","</CENTER>","<BR/>";
	}
}
function da()
{
$NAME=$_POST['name'];
$ORDERNO=$_POST['orderno'];
$sele=mysql_query("select ORDERNO,NAME,ADDRESS,PINCODE,EMAIL,MOBILE,ITEMCODE,AMOUNT from cart where ORDERNO=$ORDERNO");
ECHO "<TABLE BORDER='0' CELLSPACING=10 CELLPADDING=5>";
	while($row=mysql_fetch_array($sele))
{	
	echo "<tr>";
	echo "<th>"."ORDERNO"."<TH/>";
	echo "<th>"."NAME"."<TH/>";
	echo "<th>"."ADDRESS"."<TH/>";
	echo "<th>"."PINCODE"."<TH/>";
	echo "<th>"."EMAIL"."<TH/>";
	echo "<th>"."MOBILE"."<TH/>";
	echo "<th>"."ITEMCODE"."<TH/>";
	echo "<th>"."AMOUNT"."<TH/>";
	ECHO "<TR/>";
	echo "<tr>";
	echo "<td>".$row["ORDERNO"]."<TD/>";
	echo "<td>".$row["NAME"]."<TD/>";
	echo "<td>".$row["ADDRESS"]."<TD/>";
		echo "<td>".$row["PINCODE"]."<TD/>";
	echo "<td>".$row["EMAIL"]."<TD/>";
	echo "<td>".$row["MOBILE"]."<TD/>";
	echo "<td>".$row["ITEMCODE"]."<TD/>";
	echo "<td>".$row["AMOUNT"]."<TD/>";
ECHO "<TR/>";
}
}
ECHO "</TABLE>";
   ?>             
<body background="rrr.jpg">
<BR/><BR/><BR/><BR/>
<A HREF="HOMEPAGE.HTML"><IMG SRC="BACK4.Gif" WIDTH="200" HEIGHT="90"></A></CENTER>
<A HREF="DELETE.HTML"><IMG SRC="DELETE.GIF" WIDTH="200" HEIGHT="90"></A>       <A HREF="UPDATE.HTML"><IMG SRC="UPDATE.GIF" WIDTH="200" HEIGHT="90"></A>      <A HREF="SHOW.HTML"><IMG SRC="SHOW.GIF" WIDTH="200" HEIGHT="90"></A>
</BODY>
</HTML>
