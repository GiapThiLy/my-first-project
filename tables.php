<!DOCTYPE html>
<html>
<head>
	<title>bài tập 5</title>
</head>
<body>
	<h3>GIÁP THỊ LÝ-20156013</h3>
	<h4>Table</h4>
	<?php
		$S = "<table border=1>";
		$S .="<tr><th>STT </th>";
		$S.="<th>Tên sách</th>";
		$S.="<th>Nội dung sách</th></tr>";
		for($i=1; $i<=100; $i++)
		{
			 $S .="<tr><td> " .$i ."</td>";
			 $S .="<td>Tensach" .$i ."</td>";
			 $S .="<td>Noidung" .$i."</td></tr>";
		}
		$S .= "</table>";
		echo $S;
	?>
</body>
</html>