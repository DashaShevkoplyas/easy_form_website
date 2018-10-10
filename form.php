
<DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Users DataBase </title>
		<link rel="shortcut icon" href="img/bug.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/style2.css">
	</head>

	<body>

		<div class = "header">Authorization Page
		</div>

		<div class = "container">
			<img src = "img/user.png">
			<form  action ="/login_action.php" method = "POST">
            <div class = "inputs">
				<label for = "login"> Login: </label>
				<input type = "text" 
					name = "login"
					placeholder="Enter your login!" 
					required="Can not be empty!"/>
			</div>
			<div class = "inputs">
				<label for = "password"> Password: </label>
				<input type="password" 
					name="password"
					placeholder="Enter your password!" 
					required="Can not be empty!"/>
			</div>

			<div >

				<input class = "submit_but"  type="Submit" name  = "Submit"  value="Log In"'>
				
			</div>
			<p> <a href="/forExistedUsers.php">Main Page</a></p>
			</form>
		</div>
		<div class  = "Date">
			<?php echo ('<hr>')?>
			Today date is <?php echo date('d.m.Y') ?> </br>
		</div>

	</body>
</html>


