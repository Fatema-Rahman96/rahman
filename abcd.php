<?php
session_start();
if(isset($_SESSION['fname'])){
	echo "";
}
else{
header("Location:index.php");	
	
}
?>

<center><h1>WELCOME TO SEIP</h1></center>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
	*{margin:0px auto;}
	.main{
		width:960px;
		height:500px;
		background:skyblue;
		
	}
	
	
	ul{
		list-style:none;
		margin:0px;
		padding:0px;
		overflow:hidden;
		background:blue;
	}
	
	li{
		float:left;
	}
	li a{
		display:block;
		color:red;
		padding: 28px 72px;
		text-align:center;
		text-decoration:none;
		
	}
	
	</style>
</head>
<body>
	<div class="main">
	<div class="box">
	
	<ul>
	<li><a href="#">Home</a></li>
	<li><a href="#">About</a></li>
	<li><a href="#">Student Data</a></li>
	<li><a href="#">Logout</a></li>
	
	</ul>
	</div>
	
	</div>
</body>
</html>