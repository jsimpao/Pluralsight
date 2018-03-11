<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>Book Search Results</title>
</head>
<body>
<h3>Book Search Results</h3>
<hr>
<?php

# This is the mysqli version

# Get data from form
$searchtitle = trim($_POST['searchtitle']);
$searchauthor = trim($_POST['searchauthor']);

if (!$searchtitle && !$searchauthor) {
  echo "You must specify either a title or an author";
  exit();
}

$searchtitle  = addslashes($searchtitle);
$searchauthor = addslashes($searchauthor);

# Open the database
@ $db = new mysqli('localhost', 'root', 'rootpw', 'library');
if ($db->connect_error) {
	echo "could not connect: " . $db->connect_error;
	exit();
}

# Build the query. Users are allowed to search on title, author, or both

$query = " select * from books";
if ($searchtitle && !$searchauthor) { // Title search only
  $query = $query . " where title like '%" . $searchtitle . "%'"; 
}
if (!$searchtitle && $searchauthor) { // Author search only
  $query = $query . " where author like '%" . $searchauthor . "%'";
}
if ($searchtitle && $searchauthor) { // Title and Author search
  $query = $query . " where title like '%" . $searchtitle . "%' and author like '%" . $searchauthor . "%'"; // unfinished
}

echo "Running the query: $query <br/>"; # For debugging

/*
# Here's the query using an associative array for the results
$result = $db->query($query);
echo "<p> $result->num_rows matching books found </p>";
echo "<table border=1>";
while($row = $result->fetch_assoc()) {
  echo "<tr><td>" . $row['bookid'] . "</td> <td>" . $row['title'] . "</td><td>" . $row['author'] . "</td></tr>";
}
echo "</table>";
*/ 

# Here's the query using bound result parameters
echo "we are now using bound result parameters <br/>";
$stmt = $db->prepare($query);
$stmt->bind_result($bookid, $title, $author, $onloan, $duedate, $borrowerid);
$stmt->execute();
echo '<table bgcolor="#bdc0ff" cellpadding="6">';
echo '<tr><b><td>Title</td> <td>Author</td> </b> </tr>';
while ($stmt->fetch()) {
  echo "<tr> <td> $title </td><td> $author </td></tr>";
}
echo "</table>";

?>
</body>
</html>
