<?php 
//create a PHP variable
	$yourName = 'Haley';
	$number1 = '1';
	$number2 = '10';
	$total = $number1 + $number2;

?>



<!doctype html>
<html lang = "en">
<head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Basics</title>
</head>

<body>
	<h1>PHP Basics</h1>
	<br>
	<h2> Hi <em><?php echo $yourName ?></em></h2>
	<?php echo $name ?>
	<br>
	<?php echo $number1 ?>
	<br>	
	<?php echo $number2 ?>
	<br>
	
	<p><?php echo $total; ?></p>
	<br>
	
		<script>
		<?php echo "types of code include"?>
			let languages = [<?php echo "'PHP', 'HTML', 'Javascript'"?>]
	</script>
</body>
</html>