<?php
session_start();
$fname=$_POST['fname'];
$pass=$_POST['pass'];


$user_name='sadia';
$password='123456';

$status="OK";
$msg="";



if(empty($fname)){
$msg.="<p style='color:red'>please enter your Firstname</p>";
$status="NOTOK";	
}
if(empty($pass)){
$msg.="<p style='color:red'>please enter your password</p>";	
$status="NOTOK";	
}
if($fname!=$user_name && $pass!=$password){
	$msg.="wrong Firstname & password";
	$status="NOTOK";
}

if($status=="OK" && $fname==$user_name && $pass==$password){
	$_SESSION{'fname'}=$fname;
	header('Location:abcd.php');

}
else{
echo $msg;
}

?>
