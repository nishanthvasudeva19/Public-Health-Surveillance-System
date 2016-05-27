<html>
<body>
<?php $username="***";$password="***";$database="healthcare_surveillance";
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM citizen_info";
$result=mysql_query($query);
$num=mysql_numrows($result);
mysql_close();?>
<table border="0" cellspacing="2" cellpadding="2">
<tr>
<td>
<font face="Arial, Helvetica, sans-serif">Value1</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Value2</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Value3</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Value4</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Value5</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Value6</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Value7</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Value8</font>
</td>
</tr>
<?php $i=0;while ($i < $num) {$f1=mysql_result($result,$i,"CitizenID");
$f2=mysql_result($result,$i,"FirstName");$f3=mysql_result($result,$i,"LastName");
$f4=mysql_result($result,$i,"Sex");$f5=mysql_result($result,$i,"Age");$f6=mysql_result($result,$i,"City");
$f7=mysql_result($result,$i,"County");$f8=mysql_result($result,$i,"Occupation");?>
<tr>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f6; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f7; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f8; ?></font>
</td>
</tr>
<?php $i++;}?>
</body>
</html>
