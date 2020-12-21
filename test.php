<?php 
 include 'connect.php';
 $ip=$_SERVER['REMOTE_ADDR']; 
 $sql =  "SELECT COUNT(*) FROM prtg WHERE ip = '$ip'";
 foreach  ($conn->query($sql) as $row) {
    echo "<tr>";
    echo "<td>" . $row['COUNT(*)'] . "</td>";
    echo "</tr>";
    $count = $row['COUNT(*)'];  
    if($count >= 4) {
        echo('fin')
        die();
    }else{
        echo('ok')
        die();
    }
 }   
?>