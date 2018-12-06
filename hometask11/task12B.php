<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$cars = [["id"=>1,"maker"=>"Toyota","model"=>"Camry 50","price"=>30000],["id"=>2,"maker"=>"Mercedes","model"=>"C 100","price"=>20000],["id"=>3,"maker"=>"Daewoo","model"=>"Nexia","price"=>15000],["id"=>4,"maker"=>"Mercedes","model"=>"S 500","price"=>27000]];
	$basket = null;
	$id = null;
	if (isset($_COOKIE["basket"])){
		$basket = json_decode($_COOKIE["basket"]);
	}
	else{
		$basket = [];
	}
	if (isset($_REQUEST['id'])) {
		array_push($basket, $_REQUEST['id']);
		$data = json_encode($basket);
		setcookie('basket',$data, time()+3600*24);
		?>
		<a href="task12B.php">Back</a>
		<?php
	}else{
		for ($i=0; $i < count($cars) ; $i++) { 
			if (in_array($cars[$i]['id'], $basket)) {
				?>
				<span><?= $cars[$i]['maker']." ".$cars[$i]['model'] ?>  
					Already in bakset
				</span>
				<br>
			<?php 
			}else{
		?>
			<span><?= $cars[$i]['maker']." ".$cars[$i]['model'] ?>  
			<a href="task12B.php?id=<?= $cars[$i]['id'] ?>">Add to basket</a>
			</span><br>
		<?php 
		}
	}
	?>
	<h1>In basket</h1>
	<span>Items with id: </span>
	<?php
	$len = count($basket);
	if ($len > 0) {
		for ($i=0; $i < $len; $i++) { 
			echo $basket[$i]." ";
		}
	}
	
}																										
?>
</body>
</html>