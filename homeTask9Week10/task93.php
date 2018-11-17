
<?php 
$carsInfo = [["maker"=>"Toyota","model"=>"Corolla","year"=>"2015","engine"=>"petroleum","price"=>"30000","additional"=>["tax payed","doesn`t require investment",""]],["maker"=>"BMW","model"=>"X5","year"=>"2012","engine"=>"gas","price"=>"25000","additional"=>["tax payed","technical check passed","doesn`t require investment"]],["maker"=>"Toyota","model"=>"Camry","year"=>"2008","engine"=>"diesel","price"=>"35000","additional"=>["","technical check passed","doesn`t require investment"]]];

$cars = ["Toyota Corolla (2015)","BMW X5 (2012)", "Toyota Camry (2008)"];

$additional = ["tax payed", "technical check passed", "doesn`t require investment"];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			border-collapse: collapse;
		}
		input[type='text']{
			border-radius: 5px;
			width: 280px;
		}
		select{
			border-radius: 5px;
			width: 300px;
		}
		#checks{
			display: flex;
			flex-direction: column;
		}
		input[type='submit']{
			border-radius: 5px;
		}

	</style>
	

</head>
<body>
	<?php 
	if (isset($_REQUEST['mainSelect'])) {
		$list = explode(" ", $_REQUEST['mainSelect']);
		$index = array_search($_REQUEST['mainSelect'], $cars);
	}
	
	?>
		
	<form action="task93.php">
		<select name="mainSelect" onchange="this.form.submit()">
			<?php 
		        for ($i = 0; $i < sizeof($cars); $i++) {?>
		    	<option value="<?= $cars[$i] ?>" <?php if(isset($_REQUEST['mainSelect']) && $_REQUEST['mainSelect'] ==  $cars[$i]) {echo"selected";}?> >  
					<?php echo $cars[$i]; ?>
		    	</option>
		        <?php } ?>

		</select>


		<table border="1px">
			<tr>
				<td>Maker:</td>
				<td> 
					<select name="carMaker">

						<?php 
							for ($i=0; $i < sizeof($cars); $i++) { 
								?>
								
								<option <?php if (isset($_REQUEST['mainSelect']) && $carsInfo[$i]["maker"] == $list[0]) {echo "selected";} ?>>  
									
									<?php echo $carsInfo[$i]["maker"]; ?>
									
								</option>

								<?php
							}
						?>

					</select> 
				</td>
			</tr>
			<tr>
				<td>Year: </td>
				<td>
					<select name = "year">
						<?php 
							for ($i=2016; $i >= 1900; $i--) { 
								?>
									<option  
											<?php if (isset($_REQUEST['mainSelect']) && $carsInfo[$index]["year"] == $i) {echo "selected";} ?>
									 >
									 <?= $i; ?> </option>


								<?php 
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Model: </td>
				<td>
					<input type="text" name="model" value="<?php if(isset($_REQUEST['mainSelect'])){ echo $carsInfo[$index]["model"];} ?> ">
				</td>
			</tr>

			<tr>
				<td>Engine: </td>
				<td>
					<label>
						<input type="radio" name="en" value="Petroleum" <?php if(isset($_REQUEST['mainSelect']) && $carsInfo[$index]["engine"] == "petroleum"){echo "checked";} ?>>Petroleum
					</label>
					
					<label><input type="radio" name="en" value="Gas" <?php if(isset($_REQUEST['mainSelect']) && $carsInfo[$index]["engine"] == "gas"){echo "checked";} ?>>Gas</label>
					
					<label><input type="radio" name="en" value="Diesel" <?php if(isset($_REQUEST['mainSelect']) && $carsInfo[$index]["engine"] == "diesel"){echo "checked";} ?>>Diesel</label>
					

			

				</td>
			</tr>
			
			<tr>
				<td>Price: </td>
			<td><input type="text" name="price" value="<?php if(isset($_REQUEST['mainSelect'])){echo $carsInfo[$index]["price"];} ?>" ></td>	
			</tr>
			
			<tr>
				<td>Additional: </td>
				<td>
					<div id="checks">
						
						<?php 
							for ($i=0; $i < sizeof($additional); $i++) { 
								?>

								<label><input type="checkbox"  
												
												<?php if(isset($_REQUEST['mainSelect']) && $carsInfo[$index]["additional"][$i] == $additional[$i]


											){echo "checked";} ?>

								  > <?= $additional[$i] ?>  </label>
								
								<?php
							}

						 ?>

						
						
					</div>
				</td>
			</tr>
			
		</table>

	<input type="submit" name="">
		
	</form>

</body>
</html>