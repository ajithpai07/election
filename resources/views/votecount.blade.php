<!-- <!DOCTYPE html>
<html>
<head>
	<title>Vote Percentage</title>
</head>
<body>
<form method="post" style="width: 45%">
		
<?php
$hostname="localhost";
$username="root";
$password="";
$db = "election";
$dbh = new PDO("MySQL:host=$hostname;dbname=$db", $username, $password);
$dbh->query('SELECT country,pub_city,COUNT(*)
FROM student WHERE votes="1";') as $row {
echo "<tr>";
echo "<td>" . $row['country'] . "</td>";
echo "<td>" . $row['pub_city'] . "</td>";
echo "<td>" . $row['COUNT(*)'] . "</td>";
echo "</tr>";
}
?>
		<a href="http://localhost:8000/admindash">Back to Main Menu</a>
		
	</form>
</body>
</html> -->