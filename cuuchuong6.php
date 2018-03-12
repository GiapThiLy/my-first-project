<!DOCTYPE html>
<html>
<head>
	<title>bài tập 3</title>
</head>
<body>
	<h3>GIÁP THỊ LÝ-20156013</h3>
	<h4>Bảng cửu chương</h4>
	<?php
		$n = 6;
		$S = "<table border=1>";
		$S .="<tr><td colspan=3> Bảng cửu chương  $n </td></tr>";
		for($i=1; $i<=10; $i++)
		{
			 $S .="<tr><td> " .$n ."</td>";
			 $S .="<td> " .$i ."</td>";
			 $S .="<td> " .($n*$i) ."</td></tr>";
		}
		$S .= "</table>";
		echo $S;
	?>

</body>
</html>