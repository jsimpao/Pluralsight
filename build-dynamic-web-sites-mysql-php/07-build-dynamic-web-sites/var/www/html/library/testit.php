<?php

# Database access test

try {
  $db = new PDO("mysql:host=localhost;dbname=library", "root", "rootpw");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sth = $db->query("select * from xxbooks where author like '%Bryson'");
  while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
    printf("%-40s %-20s\n", $row["title"], $row["author"]);
  }
}
catch (PDOException $e) {
  printf("We had a problem: %s\n", $e->getMessage());
}

exit();

?>




<?php

# Quoting test

  echo addslashes("The Pilgrim's Progress") . "\n";
  echo $db->quote("The Pilgrim's Progress") . "\n";

# htmlentities test

  echo htmlentities("<tags> & stuff") . "\n";

?>

