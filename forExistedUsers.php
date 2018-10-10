<?php 
    require_once('db_connect.php');
	session_start();
		if(isset($_SESSION['login'])){
			echo "You loged in as '".$_SESSION['login']."'<br>";
			echo "<br><form action = 'logout.php' method = 'post'>
		        <input class='butLogout' type='Submit' name='Submit' value='Log Out' ></form><br>";
		        echo "<br><form action = 'add.php' method = 'post'>
		        <input class='butADD' type='Submit' name='Submit' value='Add User' ></form><br>";
		}else echo "<br>You are not authorized. <br>
					<form action = 'form.php' method = 'post'>
		        	<input class = 'butADD' type='Submit' name='Submit' value='Log In' ></form>";
	
	$sql = 'SELECT * from list_users ';
	$res = mysqli_query($connection, $sql);
			
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Main Page </title>
		<link rel="shortcut icon" href="img/bug.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/table.css">
	</head>
<body> 
 <div class = "table">
	<table border=1>
		<tr><th>id</th>
			<th>Name</th>
			<th>Last Name</th>
			<th>Role</th>
			<th>Login</th>
			<th>img</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
		    
			while ($row=mysqli_fetch_array($res)) {
				echo '<tr>';
				echo '<td>'.$row['id'], '</td>';
				echo '<td>'.$row['name'], '</td>';
				echo '<td>'.$row['fname'], '</td>';
				echo '<td>'.$row['role'], '</td>';
				echo '<td>'.$row['login'], '</td>';
				#echo '<td>'."<img width='120' height='100' src='".$row['img'], '</td>';
				echo '<td>'.$row['img'], '</td>';

				if (isset($_SESSION['login'])){
				
					echo "<form action = edit.php?id=".$row['id']." method = 'post'>
					<td> <input class = 'buttonEdit'  type='Submit' name  = 'Submit'  value='Edit' > </td>
					</form>";
					echo "<form action = delete.php?id=".$row['id']." method = 'post'>
					<td> <input class = 'buttonDelete'  type='Submit' name  = 'Submit'  value='Delete' > </td>
					</form>";
				} else{
					echo "<form action = edit.php?id=".$row['id']." method = 'post'>
					<td> <input class = 'buttonEdit'  type='Submit' name  = 'Submit'  value='Edit' disabled> </td>
					</form>";
					echo "<form action = delete.php?id=".$row['id']." method = 'post'>
					<td> <input class = 'buttonDelete'  type='Submit' name  = 'Submit'  value='Delete' disabled> </td>
					</form>";

				}

				echo '</tr>';
			
			}
			echo '</tr>';

		

		?>

	</div>

</body>
</html>