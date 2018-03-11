<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>Contact Us</title>
  <meta name="GENERATOR" content="Quanta Plus">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php

// Get the data from the form
// This version has no error checking
$customeremail = $_POST["customeremail"];
$message = $_POST["message"];
$replywanted = false;
if (isset($_POST["replywanted"])) $replywanted = true;

// Build the text of the email
$t = "You have received a message from " . $customeremail . " :\n";
$t = $t . $message . "\n";
if ($replywanted)
  $t = $t . "A reply was requested";
else
  $t = $t . "No reply was requested";

// Send an email to the librarian
mail("chris@localhost", "Customer Message", $t);

// Give the user a nice warm fuzzy feeling
echo "Thank you. Your message has been sent";

?>
</body>
</html>
