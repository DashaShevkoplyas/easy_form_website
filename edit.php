
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Edit Info </title>
		<link rel="shortcut icon" href="img/bug.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/registr.css">
	</head>
<body> 
	<div class = "header">Edit Page</div>
   <div class = "container">
		<form action="/edit_form.php" enctype="multipart/form-data" method="POST">
			<?php 
  			 session_start();
   				require_once('db_connect.php');
	    
	    		print_r($_GET);
				$current = $_GET['id'];
				$sql = "SELECT * FROM `list_users` WHERE `id` = '$current'";
				$result = mysqli_query($connection, $sql);
				$row = mysqli_fetch_assoc($result);
	

 
?>
			<div class = "inputs">
			<label for="id">ID:</label>
				<input type="text" name="id" value="<?= $row['id'] ?>" required readonly/>
			</div>
			<div class = "inputs">
				<label for = "name"> Name: </label>
				<input type = "text" 
					name = "name"
					value="<?php echo $row['name'];?>" />
			</div>
			<div class = "inputs">
				<label for = "fname"> Family Name: </label>
				<input type = "text" 
					name = "fname"
					value="<?php echo $row['fname'];?>"  />
			</div>
			<div class = "checkBox">
			<label for = "role"> Role: </label>
			 	<input type="text" name="role" value="<?=$row['role'] ?>"required readonly/>
   			</div>
			<div class = "inputs">
				<label for = "login"> Login: </label>
				<input type = "text" 
					name = "login"
					value="<?php echo $row['login'];?>" 
					required="Can not be empty!"/>
			</div>

			<div class = "inputs">
				<label for = "password"> Password: </label>
				<input type = "password" 
					name = "password"
					value="<?php echo $row['password'];?>" 
					required="Can not be empty!"
					/>
			</div>

		<p>	
			<div class = "imageLoader">
   					<input type="file" name="photo"  multiple accept="image/*,image/jpeg" value="<?php echo $row['img'];?>" > </br>	
			</div>
		</p> 



		<p>
				<div class = "button">
				<input class = "buttonSave"  type="submit" name = "save" value="Save" >
			</div>
		</p>
				<a href="/forExistedUsers.php">Back to the main page</a><p>	
			</p>
		</form>
	</div>

</body>
</html>

