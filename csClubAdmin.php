<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CS Club Contact Requests</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="..\_css\hkbFinalPrj.css"  type="text/css">
		<link rel="stylesheet" href="..\_css\w3-local.css" type="text/css">
		<link rel="stylesheet" href="..\_css\hkbAdmin.css" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Open+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
		<div class="w3-bar w3-card cs-purple cs-title">
  			<h1>Contact Requests</h1>
		</div>
    	<div id="wrapper"> 
  <!-- Build Info Array and display each line as one person's message -->
  			<?php
			  $filename = "contact.txt";
			  $infoArray = array();
			  $info = fopen($filename, "r");
			  if ( !$info ) {
				die("Unable to open $info");
			  };
			  while (!feof($info)) {
				$line = fgets($info);
				$parts = explode("--", $line);
				$contact = explode(", ", $parts[0]);
				$boardArray[$parts[0]] = $parts[1];
				echo "<main>";
				echo "<img src='_img/line.svg'>";
				echo "<h3>$contact[0]<br>$contact[1]</h3>";
				echo "<p>$parts[1]</p>";
				echo "</main>";
			  };
			  fclose( $info );
			?>
		</div>
	</body>
</html>