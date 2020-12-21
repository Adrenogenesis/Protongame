<?php 
        $servername = "xxxxxxx";
        $username = "xxxxxxxxxx";
        $password = "xxxxxxxxxxxx";
        $dbname = "xxxxxxxxx";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $ip=$_SERVER['REMOTE_ADDR'];
        $sql = "DELETE FROM prtg WHERE ip = '$ip'";
            if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $conn->error;
                }

        $conn->close();
      
?>
<script>
 window.location="https://xxxxxxxxxxxx/";
            </script>