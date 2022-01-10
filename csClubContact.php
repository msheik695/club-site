<!DOCTYPE html>
<html lang="en">
<head>
<title>HW4 Message Board</title>
<meta charset="utf-8">
<link rel="stylesheet" href="_css/hkbFinalPrj.css"  type="text/css">
<link rel="stylesheet" href="_css/w3-local.css" type="text/css">
<link rel="stylesheet" href="_css/hkbContact.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script>function close_window() {
  if (confirm("Close Window?")) {
    close();
  }
}
</script>
</head>

<body>
    <div class="w3-bar w3-card cs-purple">
  <h1>Contact Request</h1>
</div>
<div id="wrapper">
  
  <!-- Assign Board variables -->
  <?php
  $name = $_POST[ "name" ];
  $email = $_POST[ "email" ];
  $message = $_POST[ "message" ];
  $filename = "contact.txt";
  $boardArray = array();
  ?>
  
  <!-- Write to board.txt-->
  <?php
  if (isset($name)) {
    $filename = fopen( $filename, "a" )or die( "Unable to open $filename!" );
    fwrite( $filename, "\r\n" . $name . ", " );
    fwrite( $filename, $email . "--" );
    fwrite( $filename, $message );
  }

  echo "<h2>Thank you for contacting us!</h2>";
  echo "<h2>We'll be in contact with you soon!</h2>";
  ?>
  <p>You may <a href="#" onclick="close_window();return false;">close</a> this window</p>
</div>
</body>
</html>