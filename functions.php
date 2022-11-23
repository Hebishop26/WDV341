<?php


	//Convert 
	//syntax  - date(format, timestamp)
	// strtotime($Date . '+ 1 day')
	// date('Y-m-d', strtotime($Date. ' + 1 day'))

	$phone = 1234567890;

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Functions PHP</title>
</head>

<body>
	
	<h1>Functions PHP 4-1</h1>
	<br>
	
	<p><?php echo date("n/j/Y");?></p>
	<br>
	
	<p><?php echo date(mktime(0,0,0,10,23,2022));?></p>
	<br>
	
	<p>phone number: <?php function formattedNumber($phones){
		
	}
?></p>
	
	<br>
	
	<p><?php echo money_format("price is i%", $number);?></p>
</body>
</html>