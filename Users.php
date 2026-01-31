<?php
include 'db_connect.php'; 

$users = [];

try {
    $stmt = $conn->query("SELECT * FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Gabim: " . $e->getMessage();
}
?>
