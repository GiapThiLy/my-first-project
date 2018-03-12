<!DOCTYPE html>
<html>
<head>
	<title>bài tập 1</title>
</head>
<body>
	<h3>GIÁP THỊ LÝ-20156013</h3>
	<H4>Variable</H4>
	<?php
		$var=0;
		if(empty($var)){
			echo "<br>1.Var is either 0 or not at all set";
		}
		if (!isset($var))
		{ // evaluates false. isset($var) is true, !isset($var) is false.
		    echo "<br>2. The Var is not set at all";
		}
		$var ="";
		if (empty($var)) 
		{ //evaluates true. Length of var’s value is 0.
		    echo "<br>3.Var is either 0 or not at all set";
		}
		$var ="123";
		if (empty($var))
		{ //evaluates false
		    echo "<br>4. Var is either 0 or not at all set";
		}
		unset($var);
		if (isset($var)==false) //  !isset($var)
		    echo "<br>5. Var is not set or unset().";
		else
		    echo "<br>5. Var’value is $var";
		if (empty($var))
		echo "<br>6. Var is either 0 or not at all set";

	?>

</body>
</html>