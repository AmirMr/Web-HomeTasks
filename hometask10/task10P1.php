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
	
	
</body>
</html>