<?php
	session_start(); 
	require_once('db_connect.php');
	#print_r($_GET);
	#echo 'id = ' .$_GET['id'];
	if(count($_GET)>0){
	$id  = $_GET['id'];
	$sql = "SELECT name FROM `list_users` WHERE `id` ='$id'"; 
	$res = mysqli_query ($connection,$sql);
	if($row = mysqli_fetch_assoc($res)){
		#echo $row;
		$sql="DELETE FROM `list_users` WHERE `id` ='$id'";
		if(mysqli_query($connection,$sql)){
			echo 'Deleted';
		}
	}else{
	
		echo 'User with such id is undefind';
	}
	header("Location:forExistedUsers.php");
}
?>
