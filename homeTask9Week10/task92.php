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
	
	<form action="task92Submit.php" method="post">
		<table border="1px">
			<tr>
				<td>Maker:</td>
				<td> 
					<select name="carMaker">
						<option selected="selected">Toyota</option>
						<option>Volkswagen</option>
						<option>Opel</option>
						<option>BMW</option>
						<option>Fiat</option>
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
									<option> <?= $i; ?> </option>
								<?php 
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Model: </td>
				<td><input type="text" name="model"></td>
			</tr>

			<tr>
				<td>Engine: </td>
				<td>
					<label><input type="radio" name="en" value="Petroleum" checked="checked">Petroleum</label>
					<label><input type="radio" name="en" value="Gas">Gas</label>
					<label><input type="radio" name="en" value="Diesel">Diesel</label>
				</td>
			</tr>
			
			<tr>
				<td>Price: </td>
			<td><input type="text" name="price"></td>	
			</tr>
			
			<tr>
				<td>Additional: </td>
				<td>
					<div id="checks">
						<label><input type="checkbox" name="taxP" checked="checked">tax payed</label>
						<label><input type="checkbox" name="technical_check_passed">technical check passed</label>
						<label><input type="checkbox" name="dRequire">Diesel</label>
					</div>
				</td>
			</tr>
			

			
		
		</table>

	<input type="submit" name="">
		
	</form>

</body>
</html>