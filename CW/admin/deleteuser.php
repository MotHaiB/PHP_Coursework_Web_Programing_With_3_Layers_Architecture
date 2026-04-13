<?php
try {
    include '../includes/DatabaseConnection.php';

    $sql = 'DELETE FROM user WHERE user_id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();

    header('location: users.php');
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Unable to connect to delete user: ' . $e->getMessage();
}

include '../templates/admin_layout.html.php';
