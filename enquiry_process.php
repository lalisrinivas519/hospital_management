<?php
include("php_include/connect.php");
if(isset($_POST['submit'])){
	$userid=$_POST['userid'];
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	
	
	$query_username_check=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
	if(mysqli_num_rows($query_username_check)==0){
		$query=mysqli_query($con,"INSERT INTO `user`( `userid`, `username`, `mobile`, `password`, `message`) VALUES ('$userid','$username','$mobile','$password','$message')");
		
		if($query){
			echo"<script>alert('register is successful');window.location.assign('login.php');</script>";
		}
		else{
			echo"<script>alert('register failed');window.location.assign('enquiry.php');</script>";
		}
			
		
	}
	else{
	echo"<script>alert('username already exists');window.location.assign('enquiry.php');</script>";	
	}
}else{
	
}
?>