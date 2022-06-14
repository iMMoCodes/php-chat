<?php
 $conn = mysqli_connect("localhost:3307", "root", "", "php-chat");
 if(!$conn) {
     echo "Database not connected" . mysqli_connect_error();
 }
?>