<!DOCTYPE html>
<html>
<head>
	<title>bài tập 11</title>
</head>
<body>
	<h3>GIÁP THỊ LÝ-20156013</h3>
	<h6>In ra dãy số từ 1 đến 200</h6>
	<?php
		for($j=1;$j<=200;$j++){
			if($j%2==0){
				echo "<font color='red'> <b>".$j."</b> </font> <br>";
			}
			else
				echo "<font color='blue'><i>".$j."</i></font><br>";
		}
	?>

</body>
</html>