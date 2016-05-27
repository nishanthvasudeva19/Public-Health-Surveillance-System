<html>
<body>
<?php $username="***";$password="***";$database="healthcare_surveillance";
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT County, PercentageOfAlcoholicss FROM statics";
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

</tr>
<?php $i=0;while ($i < $num) {$f1=mysql_result($result,$i,"County");
$f2=mysql_result($result,$i,"PercentageOfAlcoholicss"); ?>
<tr>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font>
</td>

</tr>
<?php $i++;}?>
</body>
</html>
