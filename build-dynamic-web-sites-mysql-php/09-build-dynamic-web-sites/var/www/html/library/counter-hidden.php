<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <title>Counting with a hidden field</title>
</head>
<body>
  <FORM action="counter-hidden.php" method="GET">
  <INPUT type="submit" name="Count" value="Count">
  <?php
   if (! isset($_GET['hiddencounter']))
      $count = 0;
   else
      $count = $_GET['hiddencounter'];
   $count = $count + 1;
   echo '<INPUT type="hidden" value=' . $count . ' name="hiddencounter">';
   echo "count is $count";
  ?>
  </FORM>
</body>
</html>
