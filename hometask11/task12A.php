<?php
	if (isset($_GET["name"])){
		setcookie("name",$_GET["name"]);
	}
	else if (!isset($_COOKIE["name"])){
	?>
	<form action="task12A.php" method="get">
	Enter your name:<input type="text" name="name"/>
	<input type="submit"/>
	</form>
	<?php
	}
	else{
		echo "Hello ".$_COOKIE["name"];
		setcookie("name","", time() - 100);
	}
?>