<?php

	require '../xampp/wdv341/database/dbConnect.php';

	$sql = "SELECT events_name, events_description, events_presenter, events_date FROM wdv341_events";

	$stmt = $conn->prepare($sql);

	$stmt ->execute();

	$stmt ->setFetchMode(PDO::FETCH_ASSOC);


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document</title>
</head>

<body>
	<h1>Event Listing</h1>
	
	<?php
		
		while($row = $stmt->fetch()){
			
			echo "<p>";
			
			echo $row['events_name'];
			
			echo "</p>";
			
			echo "<p>";
			
			echo $row['events_description'];
						
			echo "</p>";
			
		}
	
	?>
</body>
</html>