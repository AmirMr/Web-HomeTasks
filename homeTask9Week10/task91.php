<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		input[name="lettuce"] {
			background-color: yellow;
		}
		
		#main{
			display: flex;
		}
		.parts{
			display: flex;
			flex-direction: column;
		}
		input{
			margin-bottom: 5px;
		}
		span{
			margin-bottom: 8px;
			margin-right: 5px;
		}
		.redBorder{
			border:1px solid red;
			width: 400px;
			margin-bottom: 8px;

		}
		p{
			font-weight: bold;
			margin-left: 8px;
		}
	</style>
</head>
<body>
	<?php 

		$dic = array(
			'User' => '',
			'Password' => '',
			'sPassword' => ''
		);
		if (isset($_POST['user'])) {
			
			if ($_POST['user']) {
				$dic['User'] = $_POST['user'];

				?>
					<div class="redBorder">
						<p>Username <?= $dic['User'] ?> is already reserved</p>
					</div>

				<?php
			
			}else{
			
			?>
				<div class="redBorder">
					<p>Username <?php $dic['User'] ?> should not be empty</p>
				</div>
				
			<?php 
			}
			if ($_POST['pass']) {
				$dic['Password'] = $_POST['pass'];
				
				if ($dic['Password'] == $_POST['againPass']) {
					$dic['sPassword'] = $_POST['againPass'];
				}
				else{
					?>
					<div class="redBorder">
						<p>Passwords and Confirm passwords are not equal to each other</p>
					</div>

					<?php 
				}
			}
			else{
				?>
					
					<div class="redBorder">
						<p>Passwords and Confirm passwords should not be empty</p>
					</div>
				<?php 
			}
	}
	?>


	<form method="post">

		<div id="main">
			<div class="parts">
				<span>Username:</span> 
				<span>Password:</span>
				<span>Password Confirm:</span>
				
			</div>

			<div class="parts">
				<input type="text" name="user" value="<?php echo $dic['User']; ?>">
				<input type="Password" name="pass" value="<?php echo $dic['Password']; ?>">
				<input type="Password" name="againPass" value="<?php echo $dic['sPassword']; ?>">

			</div>
					
		</div>
		
		<input type="submit" name="">
			
	</form>

	

</body>
</html>