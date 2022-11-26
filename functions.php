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
	

	<p>
	<?php
		$str = "DMACC  ";
		
		echo rtrim($str);
		
	?>
	</p>
	
	<p>
	<?php
		$str = "DMACC  ";
		echo strtolower($str);
	?>
	</p>
	
	<p>
	
	<?php
echo strlen($str);
?>
	</p>
	
	<p>
	
	<?php 
		
		echo "str is " . is_string($str) . "<br>";
		
		?>
	
	</p>
	
	<p>
			<!--I did this as well, followed an example found here: https://www.geeksforgeeks.org/php-ctype_upper-function/ -->

		Is it Lowercase or upper case: <?php 
	
	if (ctype_upper($str)){
		
		echo "Yes/n";
	}
		else {
			
			echo "No\n";
				
		}
	
	?></p>

	
	<br>
	
		<p>phone number: <!-- followed a code example on this here on geek for geeks:https://www.geeksforgeeks.org/how-to-format-phone-numbers-in-php/  --> <?php function formatting($phone){
      
    // Pass phone number in preg_match function
    if(preg_match(
        '/^\+[0-9]([0-9]{3})([0-9]{3})([0-9]{4})$/', 
    $phone, $value)) {
      
        // Store value in format variable
        $format = $value[1] . '-' . 
            $value[2] . '-' . $value[3];
    }
    else {
         
        // If given number is invalid
        echo "Invalid phone number <br>";
    }
      
    // Print the given format
    echo("$format" . "<br>");
	
	
}
	formatting("+1234567890");		
			
?></p>
	
	<br>
	
	<p>
		<?php 
	$number = "123456";
	setlocale(LC_MONETARY, 'en_US');
echo money_format('%i', $number) . "\n";?>
	</p>
	
	
	
</body>
</html>