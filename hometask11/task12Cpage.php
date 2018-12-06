<?php 
	session_start();
	$usern = $_SESSION['name'];
	$password = $_SESSION['pass'];
	$admin = $_SESSION['admin']
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#card img{
			width: 75px;
			height: 75px;
		}
		#cars{
			display: flex;
		}
		#card{
			display: flex;
			border: 1px solid red;
			border-radius: 3px;
			margin-left: 10px;
			width: 300px;
		}
		#desc{
			margin-left: 5px;
			display: flex;
			flex-direction: column;
		}
	</style>
</head>
<body>
	<?php  
		$conn = mysqli_connect("localhost", "root", "", "taskdb");
		$sql = "SELECT * from cars";
		$result = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($result);
		if ($admin == 0) {
		?>
			<div id="cars">
			<?php
			for ($i=0;$i<$num;$i++){
				$row = mysqli_fetch_assoc($result);
				?>
					<div id="card">
						<img src="<?= $row["url"] ?>"> 
						<div id="desc">
							<strong><?= $row["maker"]." ".$row["model"] ?></strong>
							<span><?= $row["price"] ?></span>
							<span><?= $row["year"] ?></span>
						</div>
					</div>
				<?php
			}
			?>
			</div>
		<?php  
		}elseif ($admin == 1) {
			if (isset($_REQUEST['delete'])) {
			$d = $_REQUEST['delete'];
			$sql = "DELETE FROM cars WHERE id = '$d'";
			$result = mysqli_query($conn,$sql);
			}
			$sql = "SELECT * FROM cars";
			$result = mysqli_query($conn,$sql);
			$num = mysqli_num_rows($result);

			?>
			<div id="cars">
			<?php
			for ($i=0;$i<$num;$i++){
				$row = mysqli_fetch_assoc($result);
				?>
					<div id="card">
						<img src="<?= $row["url"] ?>"> 
						<div id="desc">
							<strong><?= $row["maker"]." ".$row["model"] ?></strong>
							<span><?= $row["price"] ?></span>
							<span><?= $row["year"] ?></span>
							<a href="task12Cpage.php?delete=<?=$row['id']?>">Delete</a>
						</div>
					</div>
				<?php
			}
			?>
			</div>

		<?php 

		}

	?>


</body>
</html>