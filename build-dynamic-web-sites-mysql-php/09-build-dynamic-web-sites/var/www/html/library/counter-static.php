<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <title>Counting with a static variable does not work</title>
</head>
<body>
  <FORM action="counter-static.php" method="GET">
  <INPUT type="submit" name="Count" value="Count">
  <?php
  function increment_and_display()
  {
    static $count = 0;
    $count = $count + 1;
    echo "static count is $count";
  }
  increment_and_display();
  ?>
  </FORM>
</body>
</html>
