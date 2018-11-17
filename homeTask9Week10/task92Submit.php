<?php 
	$maker = filter_input(INPUT_POST, "carMaker");
	$year = filter_input(INPUT_POST, "year");
	$model = filter_input(INPUT_POST, "model");
	$engine = filter_input(INPUT_POST, "en");
	$price = filter_input(INPUT_POST, "price");
	$TAX = filter_input(INPUT_POST, "taxP");
	$technical = filter_input(INPUT_POST, "technical_check_passed");
	$dRequire = filter_input(INPUT_POST, "dRequire");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	You added new item: <strong> <?= $maker." ".$model; ?> </strong><br>
	Produced in <?php echo $year." (".(2018-$year)." years old) with ". $engine; ?> engine <br>
	
	Tax payed: <?php 
		if (isset($TAX)) {
			?>

		 	<strong>yes</strong>

		 	<?php
		 }else{
		 	?>
		 		<strong>no</strong>
		 	<?php
		 }
	?>
	<br>
	Technical check passed: <?php  
		if (isset($technical)) {
			?>
		 	
		 	<strong>yes</strong>	
	
		 	<?php
		 }else{
		 	?>

		 	<strong>no</strong> 
		 	
		 	<?php
		 }
	 ?><br>
	Does not require investment: <?php 
		if (isset($dRequire)) {
			?>
		 	<strong>yes</strong>
		 
			<?php
		 }else{
		 	?>
		 	<strong>no</strong>
		 	<?php
		 }
	 ?><br>
	$ <?= $price ?>
</body>
</html>
