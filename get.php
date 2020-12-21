<?php
$f = fopen('counter.txt', 'r+'); // use 'r+' instead
flock($f, LOCK_EX); // avoid race conditions with concurrent requests
$total = (int) fread($f, max(1, filesize('counter.txt'))); // arg can't be 0
/*if someone has clicked submit*/
if (isset($_POST['clt'])) {
   rewind($f); // move pointer to start of file so we overwrite instead of append
   fwrite($f, ++$total);
}
fclose($f);
// time
$temps = 60*24*3600;
// send
setcookie ("ip", "fredericbrodar.com", time() + $temps);
// receive
$cookie_value = "fredericbrodar.com";  
setcookie("ip", $cookie_value, time()+3600, "/cookies/", "fredericbrodar.com", 1, 1);
date_default_timezone_set('Europe/Paris');
$date=date("Y-m-d H:i:s");
// Gestion de la connexion SQL (avec ma méthode personnalisée)
$servername = "xxxxxxxxx";
$username = "xxxxxxxxx";
$password = "xxxxxxxxxxx";
$dbname = "xxxxxxxxx";

$cookie=$_COOKIE['ip'];
$ip=$_SERVER['REMOTE_ADDR'];
$port=$_SERVER['REMOTE_PORT'];
$http_via=$_SERVER['HTTP_VIA'];
$http_x_for=$_SERVER['HTTP_X_FORWARDED_FOR'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO gmx (date, cookie, ip, port, http_via, http_x_for)
VALUES ('$date','$cookie','$ip', '$port' ,'$http_via','$http_x_for')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>