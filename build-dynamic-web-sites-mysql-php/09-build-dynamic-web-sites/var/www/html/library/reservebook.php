<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>Book Reservation Confirmation</title>
</head>
<body>
<?php
  // Get the title of the book we're reserving (from the URL)
  $booktoreserve = urldecode($_GET['reservation']);
  session_start();
    if (! isset($_SESSION['reservedbooklist']))
      $reservedbooklist = "";
   else
      $reservedbooklist = $_SESSION['reservedbooklist'];
   // The list is maintained as a single string
   // with the titles separated by slashes
   $reservedbooklist = $reservedbooklist . "/" . $booktoreserve;
   $_SESSION['reservedbooklist'] = $reservedbooklist;
   echo "Thankyou.  $booktoreserve has been added to your reservation list";
   echo "<br><a href=index.php>Return to home page</a>";
?>
</body>
</html>
