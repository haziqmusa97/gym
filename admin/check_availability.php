<?php 
session_start();
$aid=$_SESSION['id'];
require_once("includes/config.php");
if(!empty($_POST["roomno"])) 
{
$roomno=$_POST["roomno"];
$result ="SELECT count(*) FROM booking WHERE sescode=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('i',$roomno);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
echo "<span style='color:red'>$count. Session already full.</span>";
else
	echo "<span style='color:red'>Session are Available</span>";
}

if(!empty($_POST["oldpassword"])) 
{
$pass=$_POST["oldpassword"];
$result ="SELECT password FROM userregistration WHERE password=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('s',$pass);
$stmt->execute();
$stmt -> bind_result($result);
$stmt -> fetch();
$opass=$result;
if($opass==$pass) 
echo "<span style='color:green'> Password  matched .</span>";
else echo "<span style='color:red'> Password Not matched</span>";
}
?>
