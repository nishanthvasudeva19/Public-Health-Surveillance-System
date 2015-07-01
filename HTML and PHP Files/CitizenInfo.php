<html>
<head>
<title>Add New Record in MySQL Database</title>
</head>
<body>
<?php
if(isset($_POST['add']))
{
$dbhost = 'localhost';
$dbuser = 'Nishanth';
$dbpass = 'shambhavi!1';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $CitizenID = addslashes ($_POST['CitizenID']);
   $FirstName = addslashes ($_POST['FirstName']);
   $LastName = addslashes ($_POST['LastName']);
   $Sex = addslashes ($_POST['Sex']);
   $Age = addslashes ($_POST['Age']);
   $City = addslashes ($_POST['City']);
   $County = addslashes ($_POST['County']);
   $Occupation = addslashes ($_POST['Occupation']);
   $IfSmokes = addslashes ($_POST['IfSmokes']);
   $DurationInMonths= addslashes ($_POST['DurationInMonths']);
   $IfAlcoholic = addslashes($_POST['IfAlcoholic']);
   $HowLongAsBeenDrinking= addslashes($_POST['HowLongAsBeenDrinking']);
}
else
{
   $CitizenID = $_POST['CitizenID'];
   //$FirstName = $_POST['FirstName'];
   //$LastName =  $_POST['LastName'];
   //$Sex =  $_POST['Sex'];
   //$Age =  $_POST['Age'];
   //$City = $_POST['City'];
   //$County = $_POST['County'];
   //$Occupation = $_POST['Occupation'];
}
 $FirstName = $_POST['FirstName'];
 $LastName =  $_POST['LastName'];
 $Sex =  $_POST['Sex'];
 $Age =  $_POST['Age'];
 $City = $_POST['City'];
 $County = $_POST['County'];
 $Occupation = $_POST['Occupation'];
 $IfSmokes = $_POST['IfSmokes'];
 $DurationInMonths= $_POST['DurationInMonths'];
 $IfAlcoholic = $_POST['IfAlcoholic'];
 $HowLongAsBeenDrinking = $_POST['HowLongAsBeenDrinking'];
 
$sql = "INSERT INTO citizen_info ".
       "(CitizenID,FirstName,LastName,Sex,Age,City,County,Occupation) ".
       "VALUES('$CitizenID','$FirstName','$LastName','$Sex','$Age','$City','$County','$Occupation')";
mysql_select_db('healthcare_surveillance');
$retval = mysql_query( $sql, $conn );

$sql1 = "INSERT INTO Smokers ".
       "(CitizenID,IfSmokes,DurationInMonths) ".
       "VALUES('$CitizenID','$IfSmokes','$DurationInMonths')";
mysql_select_db('healthcare_surveillance');
$retval1 = mysql_query( $sql1, $conn );

$sql2 = "INSERT INTO alcoholics ".
       "(CitizenID,IfAlcoholic,DurationInMonths) ".
       "VALUES('$CitizenID','$IfAlcoholic','$HowLongAsBeenDrinking')";
mysql_select_db('healthcare_surveillance');
$retval2 = mysql_query( $sql2, $conn );

if(! $retval )
{
  die('Could not enter data: citizen' . mysql_error());
}

if(! $retval1 )
{
  die('Could not enter data: smokes' . mysql_error());
}

if(! $retval2 )
{
  die('Could not enter data: drinks' . mysql_error());
}

echo "Entered data successfully\n";
mysql_close($conn);
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">Citizen ID</td>
<td><input name="CitizenID" type="text" id="CitizenID"></td>
</tr>
<tr>
<td width="100">FirstName</td>
<td><input name="FirstName" type="text" id="FirstName"></td>
</tr>
<tr>
<td width="100">LastName</td>
<td><input name="LastName" type="text" id="LastName"></td>
</tr>
<tr>
<tr>
<td width="100">Sex</td>
<td><input name="Sex" type="text" id="Sex"></td>
</tr>
<tr>
<td width="100">Age</td>
<td><input name="Age" type="text" id="Age"></td>
</tr>
<tr>
<td width="100">City</td>
<td><input name="City" type="text" id="City"></td>
</tr>
<tr>
<td width="100">County</td>
<td><input name="County" type="text" id="County"></td>
</tr>
<tr>
<td width="100">Occupation</td>
<td><input name="Occupation" type="text" id="Occupation"></td>
</tr>
<tr>
<td width="100">IfSmokes</td>
<td><input name="IfSmokes" type="text" id="IfSmokes"></td>
</tr>
<tr>
<td width="100">DurationInMonths</td>
<td><input name="DurationInMonths" type="text" id="DurationInMonths"></td>
</tr>
<tr>
<td width="100">IfAlcoholic</td>
<td><input name="IfAlcoholic" type="text" id="IfAlcoholic"></td>
</tr>
<tr>
<td width="100">HowLongAsBeenDrinking</td>
<td><input name="HowLongAsBeenDrinking" type="text" id="HowLongAsBeenDrinking"></td>
</tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="add" type="submit" id="add" value="Add Citizen">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>
