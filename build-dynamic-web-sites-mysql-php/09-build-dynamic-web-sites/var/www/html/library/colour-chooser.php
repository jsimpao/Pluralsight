<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
  // Build the array of colour choices
  $colours = array("Pink"   => "f0d0d0",
                   "Violet" => "cda8ef",
                   "Blue"   => "a8c1ef",
                   "Green"  => "a8efab",
                   "Yellow" => "efee7b" );

  // If this is a postback, create the cookie
  if (isset($_GET['colourchosen'])) {
    setcookie('colourpreference', $colours[$_GET['colourchosen']], time() + 24*3600, "/", "library.example.org");
  }
?>
<html>
<head>
  <title>Choose Colour Preference</title>
</head>
<body>
<?php
  if (isset($_GET['colourchosen'])) {
    // This is the postback so just thank the user
    echo "Your colour preference has been recorded";
    echo "<br> <a href=index.php>Return to home page</a>";
    exit;
  }
  // Not a postback, so present the colour selection form:
?>
<form action="colour-chooser.php" method="GET">
<table>
  <tbody>
    <tr>
      <td>Choose your colour:</td>
      <td>
        <select size="1" name="colourchosen">
          <?php
          // Populate drop-down from array of colour choices
          foreach ($colours as $name => $hex)
            echo "<option> " . $name;
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td colspan = "2">
        <INPUT type="submit" name="Confirm" value="Confirm Preference"></td>
      <td></td>
    </tr>
  </tbody>
</table>
</form>
</body>
</html>
