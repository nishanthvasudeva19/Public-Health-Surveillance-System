<html>
<body>
<?php $username="***";$password="***";$database="healthcare_surveillance";
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM hospitals";
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
</tr>

<?php $i=0;while ($i < $num) {$f1=mysql_result($result,$i,"HospitalID");
$f2=mysql_result($result,$i,"HospitalName");$f3=mysql_result($result,$i,"County");
$f4=mysql_result($result,$i,"DiseaseTreated");?>
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
</tr>
<?php $i++;}?>
</body>
</html>
