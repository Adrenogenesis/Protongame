<?php 
$servername = "xxxxxxxx";
$username = "xxxxxxxx";
$password = "xxxxxxxxxx";
$dbname = "xxxxxx";        
    $conn = mysqli_connect($servername, $username, $password, $dbname);       
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
     }
 $ip=$_SERVER['REMOTE_ADDR']; 
 $sql =  "SELECT COUNT(*) FROM xxxx WHERE ip = '$ip'";
 foreach  ($conn->query($sql) as $row) {
    echo "<tr>";
    echo "<td>" . $row['COUNT(*)'] . "</td>";
    echo "</tr>";
    $count = $row['COUNT(*)'];  
    if($count > 40) {
        header("Location: https://xxxxxxxxxxxx");
        die();
    }else{
        $dbname2 = "xxxxxxx";  
        $conn2 = mysqli_connect($servername, $username, $password, $dbname2);     
        if (!$conn2) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sqlb = "DELETE FROM xxx WHERE ip = '$ip'";
            if ($conn2->query($sqlb) === TRUE) {
                echo "ok";
            } else {
                echo "Error deleting record: " . $conn2->error;
                }
        $conn2->close();  
        header("Location: protongame.php");
        die();
    }
 }   
?>
