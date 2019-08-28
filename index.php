<?php
session_start();

?>

<style type="text/css">
.main{
	margin:0px auto;
	background:#ddd;
	border:1px solid black;
	width:25%
}

</style>

<form method="POST">
<div class="main">
<table>
	<tr>
		<td>User Name</td>
		<td><input type="text" name="fname"/></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="pass"/></td>
	</tr>
	<tr>
		<td colspan="2"><center><input type="submit" name="login" value="login"/></center></td>
		
	</tr>
</table>
</div>
</form>
<?php

if(isset($_POST["login"])){
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
	$msg.="<p style='color:red'>wrong Firstname & password</p>";
	$status="NOTOK";
}

if($status=="OK" && $fname==$user_name && $pass==$password){
$_SESSION['fname']=$fname;
	header('Location:abcd.php');
}
else{
echo $msg;
}
}
?>


