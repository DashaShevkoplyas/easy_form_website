<?php
	session_start();
    require_once('db_connect.php');

	$login = $_POST['login'];
	$password =$_POST['password'];

	if($login && $password){
   	 $query="SELECT * FROM `list_users` WHERE `login` = '$login'";
		$res = mysqli_query($connection, $query);	
			if (mysqli_num_rows($res)>=1 && (md5($password) == $res->fetch_assoc()['password'])){
				$_SESSION['login'] = $login;
				$_SESSION['role'] = $res->fetch_assoc()['role'];

				
					echo "Your logged in as '".$login."'";
					echo "<br><form action = 'forExistedUsers.php' method = 'post'>
		      			<input class='butADD' type='Submit' name='Submit' value='Main Page' ></form><br>";

		} else 
			echo "Invalid login or password";			
}


?>