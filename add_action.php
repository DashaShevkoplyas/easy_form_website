<?php 
   session_start();
   require_once('db_connect.php');
		if(!empty($_POST)){
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
		$sql = "SELECT * FROM `list_users` WHERE login = '$login'";
		$result = mysqli_query($connection, $sql);
		if(mysqli_num_rows($result) == 1){
			echo "Account '".$login."' is already exist";
			return;
		}

		$sql = "INSERT INTO list_users(name, fname, role, login,  password, img) VALUES ('" . $name ."', '". $fname ."', ''". $role ."'','". $login."', '" .  $password . "', '". $imgForDB ."')";
		$result = mysqli_query($connection, $sql);
		if($result){
			echo "Registration of account '".$login."' is successful with role = '".$role."' ";
			echo "<br><form action = 'forExistedUsers.php' method = 'post'>
		      <input class='butADD' type='Submit' name='Submit' value='Main Page' ></form><br>";
		}
		else{
			echo "!!!!!!!ERROR!!!!!!!";
			while ($row = mysqli_fetch_array(mysqli_query($connection, $sql))) {
				echo print_r($row);
			}
		}
} 
?>