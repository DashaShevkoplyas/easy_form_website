<?php
session_start();
   require_once('db_connect.php');
if(isset($_POST['save'])){
		$current = $_POST['id'];
	    $name = $_POST['name'];
		$fname = $_POST['fname'];
		$role = $_POST['role'];
		$login = $_POST['login'];
		$password = md5($_POST['password']);
			if(strlen($_POST['password'])<4){
				echo 'Password should be more than 3 symbols';
				return;
			}
		
		$target_file = './img/' . basename($_FILES["photo"]["name"]);
		$imgForDB = '/img/' . basename($_FILES["photo"]["name"]);	
		move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);	

		$sql = "UPDATE `list_users` SET `name` = '$name', `fname` = '$fname', `role` = '$role', `login` = '$login',  `password` = '$password', `img` = '$imgForDB' WHERE `id` = '$current'";
		$result = mysqli_query($connection, $sql);
		if($result){
			echo "Update was successful";
			echo "<br><form action = 'forExistedUsers.php' method = 'post'>
		      <input class='butADD' type='Submit' name='Submit' value='Main Page' ></form><br>";
		}
		else{
			echo mysqli_error();
			echo "!!!!!!!ERROR!!!!!!!";
			while ($row = mysqli_fetch_array(mysqli_query($connection, $sql))) {
				echo print_r($row);
			}
		}
}