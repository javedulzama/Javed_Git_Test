Handles database connection and queries
<?php
$conn = new mysqli("localhost", "root", "", "test_db");
echo $conn->connect_error ? "DB Connection Failed" : "DB Connected!";
?>

