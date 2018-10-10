
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Registration </title>
		<link rel="shortcut icon" href="img/bug.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/registr.css">
	</head>
<body> 
	<div class = "header">Registration Page</div>
   <div class = "container">
		<form action="/add_action.php" enctype="multipart/form-data" method="POST">

			<div class = "inputs">
				<label for = "name"> Name: </label>
				<input type = "text" 
					name = "name"
					placeholder="Enter your name!" />
			</div>
			<div class = "inputs">
				<label for = "fname"> Family Name: </label>
				<input type = "text" 
					name = "fname"
					placeholder="Enter your family name!" />
			</div>
			<div class = "checkBox">
			<label for = "role"> Role: </label>
			 	<input type="text" name="role"  />
   			</div>
			<div class = "inputs">
				<label for = "login"> Login: </label>
				<input type = "text" 
					name = "login"
					placeholder="Enter your login!" 
					required="Can not be empty!"/>
			</div>

			<div class = "inputs">
				<label for = "password"> Password: </label>
				<input type = "password" 
					name = "password"
					placeholder="Enter your password!" 
					required="Can not be empty!"/>
			</div>

		<p>	
			<div class = "imageLoader">
   					<input type="file" name="photo"  multiple accept="image/*,image/jpeg"></br>	
			</div>
		</p> 



		<p>
				<div class = "button">
				<input class = "buttonSave"  type="submit"  value="Save" >
			</div>
		</p>
				<a href="/forExistedUsers.php">Back to the main page</a><p>		
			</p>
		</form>
	</div>

</body>
</html>

