<?php
include 'db_connect.php'; // lidhja me databazën

$users = [];

try {
    // Merr të gjithë përdoruesit nga tabela users
    $stmt = $conn->query("SELECT * FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Gabim: " . $e->getMessage();
}
?>
