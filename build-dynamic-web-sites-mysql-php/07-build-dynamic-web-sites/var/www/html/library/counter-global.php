<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>Counting with globals</title>
</head>
<body>
<form action="counter-global.php" method="GET">
<input type="submit" name="Count" value="Count">
<?php
@  $count = $count + 1;
   echo "count is $count";
?>
</form>

</body>
</html>
