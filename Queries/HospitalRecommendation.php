<html>
<body>
<?php $username="***";$password="***";$database="public_surveillance";
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT loc_name AS Location, MAX(accident_type) AS Accident, COUNT(accident_type) AS Number
        FROM accidents, location
        WHERE accidents.Loca_id = location.loc_id
        AND loc_name = 'Town A'
        GROUP BY accident_type
        ORDER BT COUNT(*) DESC";
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

</tr>
<?php $i=0;while ($i < $num) { $f3=mysql_result($result,$i,"HospitalName");
    $f1=mysql_result($result,$i,"FirstName");$f2=mysql_result($result,$i,"LastName"); ?>
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

</tr>
<?php $i++;}?>
</body>
</html>
