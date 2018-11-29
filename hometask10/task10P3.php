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
			margin-top: 10px;
			flex-wrap: wrap;
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
		#insertPart{
			display: flex;
		}
		#textOfInput, #inputs{
			display: flex;
			flex-direction: column;
		}
		#textOfInput span{
			margin-top: 8px;
		}
		#inputs input{
			margin-top: 5px;
			margin-left: 10px; 
		}
	</style>
</head>
<body>
	<form action="task10P3.php">
		<div id="insertPart">
			<div id="textOfInput">
				<span>Maker</span>
				<span>Model</span>
				<span>Year</span>
				<span>Price</span>
				<span>Image(URL)</span>
			</div>
			<div id="inputs">
				<input type="text" name="maker">
				<input type="text" name="model">
				<input type="text" name="year">
				<input type="text" name="price">
				<input type="text" name="url">
			</div>
		</div>
		<input type="submit" name="subBut" value="Add new">
	</form>

	<?php 
		$conn = mysqli_connect("localhost", "root", "", "taskdb");
		

		if (isset($_REQUEST['subBut'])) {
			$maker = $_REQUEST['maker'];
			$model = $_REQUEST['model'];
			$year = $_REQUEST['year'];
			$price = $_REQUEST['price'];
			$url = $_REQUEST['url'];
			
			$sql = "INSERT INTO `cars`(`maker`, `model`, `price`, `year`, `url`) VALUES ('$maker','$model','$year','$price','$url')";
			$result = mysqli_query($conn,$sql);

		}
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
						<a href="task10P3.php?delete=<?=$row['id']?>">Delete</a>
						


					</div>
				</div>
			<?php
		}
		?>
		</div>
</body>
</html>