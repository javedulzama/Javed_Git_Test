Handles search functionality
<?php
$query = $_GET['q'] ?? '';
echo "Searching for: " . htmlspecialchars($query);
?>

