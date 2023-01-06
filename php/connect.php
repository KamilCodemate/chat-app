<?php
$conn = mysqli_connect("localhost", "root", "", "chat");
echo $conn ? "Successfully connected" : "Error";
?>