
<?php

$ip=$_SERVER['REMOTE_ADDR'];
echo ($ip);

$hostname="xxxxxxxx";
$username="xxxxxxxxx";
$password="xxxxxxxxx";
$db = "xxxxxxxxx";
$dbh = new PDO("MySQL:host=$hostname;dbname=$db", $username, $password);
foreach($dbh->query('SELECT COUNT(*) FROM prtg') as $row) {
echo "<tr>";
echo "<td>" . $row['COUNT(*)'] . "</td>";
echo "</tr>";
}
?>

    