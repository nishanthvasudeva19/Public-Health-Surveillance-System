<html>
<body>
<?php $username="Nishanth";$password="shambhavi!1";$database="healthcare_surveillance";
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT FirstName, LastName FROM citizen_info,alcoholics,chronic_diseases
        WHERE citizen_info.CitizenID=chronic_diseases.CitizenID
        AND chronic_diseases.DiseaseName='LiverCirrhosis'
        AND alcoholics.IfAlcoholic='Yes'
        AND alcoholics.CitizenID=citizen_info.CitizenID";
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
<?php $i=0;while ($i < $num) {$f1=mysql_result($result,$i,"FirstName");
$f2=mysql_result($result,$i,"LastName"); ?>
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