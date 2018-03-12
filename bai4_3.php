<!DOCTYPE html>
<html>
<head>
	<title>bài tập 4</title>
	<style type="text/css">
		body{
			background-color: lightpink;
		}

	</style>
</head>
<body>
	<h3>GIÁP THỊ LÝ-20156013</h3>
	<H4>Bảng cửu chương từ 2 đến 5</H4>
	<div class="content">
	<?php
		$n = 2;
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
		</div>
		<div class="content1">
		<?php
		$n = 3;
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
		</div>
		<div class="content2">
		<?php
		$n = 4;
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
		</div>
		<div class="content3">
		<?php
		$n = 5;
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
		<style type="text/css">
		.content{
			 float:left;     
		     
			}
		    .content1{
			float:left;   
		     
			}
		    .content2{
			float:left;   
		     
			}
		    .content3{
			 float:left; } 
			 .content4{
				 clear:left;}  
			</style>

</body>
</html>