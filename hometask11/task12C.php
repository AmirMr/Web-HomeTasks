<?php 
	session_start();
	if (isset($_REQUEST['but']) && isset($_REQUEST['user']) && isset($_REQUEST['password'])) {
		$var1 = $_REQUEST['user'];
		$var2 = $_REQUEST['password'];

		$conn = mysqli_connect("localhost", "root", "", "taskdb");
		$sql = "SELECT * from users where username = '$var1' and password = '$var2'";
		$result = mysqli_query($conn,$sql);

		if (mysqli_num_rows($result)) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['name'] = $row['username'];
			$_SESSION['pass'] = $row['password'];
			$_SESSION['admin'] = $row['admin'];
			header('Location: task12Cpage.php');
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<form>
		<input type="text" name="user"><br>
		<input type="password" name="password"><br>
		<input type="submit" name="but">
	</form>
	
</body>
</html>