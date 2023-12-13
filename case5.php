<html>

<body>
	<h1>Signup Page</h1>
	<form action="case5.php" method="post">
		
		<label for="uname">Username:</label>
		<input type="text" name="uname"><br><br>
		<label for="pwd">Password:</label>
		<input type="password" name="pwd"><br><br>
		<input type="submit" value="Register">

	</form>

	<?php
		if(isset($_POST['uname']) and isset($_POST['pwd'])) {
			$uname = $_POST['uname'];
			$pwd = $_POST['pwd'];
			if($uname != null and $pwd != null) {	
				include('sql_connect_2.php');
				try {
					$db->query("INSERT INTO users VALUES (0,'$uname', '$pwd')");
				} catch (PDOException $e) {
					print("Error!" . $e->getMessage());
					die();
				} 
			} else echo "Registration failed!";
		}

	?>


</body>

</html>
