<!DOCTYPE html>
<html>
<head>
	<title>Pano Estamos</title>
</head>
<body>
	<div class="cottage" style="padding: 1%;">
		<?php
			//$num = $_POST['picked'];
			if(isset($_POST['picked'])){
				$select_ch = "select * from rooms where name = '".$_POST['picked']."' ";
				$result = mysqli_query($mysqli,$select_ch);
				if($result){
					while($row = mysqli_fetch_assoc($result)){
						echo "<h1>".$row['name']."</h1><br> ";
						echo "<img width="."200"." height="."200"." src=admin/".$row['avatar'].">";
						echo "<h3>".$row['price']."</h3><br> ";
						echo "<p>".$row['description']."</p><br> ";
					}
				}else{
					echo "ERROR: Could not able to execute" ;
				}
			}
		?>
	</div>
	<br><br>
</body>	