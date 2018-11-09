<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		div{
			width: 100%;
			background: black;
			height: 1px;
		}
	</style>
</head>
<body>
	
	<a href="task92.php?category=sport">Sport news</a> | <a href="task92.php?category=politics">Politic news</a><br/><br/>
	<a href="task92.php?category=sport&format=json">Sport news (JSON)</a> | <a href="task92.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

	<?php
	$news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],"politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];
	$category = "sport";

			if (isset($_REQUEST['category'])) {
	    		$category = $_REQUEST['category'];
			}

			if (isset($_REQUEST['format']) && ($_REQUEST['format'] == 'json')) {
				echo json_encode($news[$category]);	
			}

			else{
			
				echo $news[$category][0];
				?>
				<div></div>

				<?php echo $news[$category][1];
				?>

				<div></div>
				
			<?php  
				}
			?>
</body>
</html>
