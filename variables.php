<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Welcome to PHP</title>
</head>
<body>
	<p>GIÁP THỊ LÝ-20156013-T4-N01-IT4408-20172.</p>
	<h4>Variable</h4>
	<?php
		$sotrang=10;
		$record=5;
		$check = true;
		$strSQL="select * from tblCustomers";
		echo "$strSQL" . "<br>";
		echo '$strSQL' . '<br>';
		$myarrs= array("first", "last", "company");
		$myarrs[0] = "Number 0";
		$myarrs[1] = "Number 1";
		$myarrs[2] = "Number 2";
		echo $myarrs[1];
		echo "<br>";
		echo $myarrs[2];
	?>
</body>
</html>
