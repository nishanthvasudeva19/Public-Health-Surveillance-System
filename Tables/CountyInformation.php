<html>
<body>
<?php $username="Nishanth";$password="shambhavi!1";$database="healthcare_surveillance";
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM county";
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
</tr>

<?php $i=0;while ($i < $num) {$f1=mysql_result($result,$i,"CountyName");
$f2=mysql_result($result,$i,"CountyPopulation");$f3=mysql_result($result,$i,"CountyPollutionDensity");
$f4=mysql_result($result,$i,"CountyPrimaryOccupation");$f5=mysql_result($result,$i,"CountyClimate");
$f6=mysql_result($result,$i,"CountyCommonDiseases");?>
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
</tr>
<?php $i++;}?>
</body>
</html>