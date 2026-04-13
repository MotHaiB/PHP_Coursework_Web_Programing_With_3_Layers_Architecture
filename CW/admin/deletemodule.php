<?php
try {
    include '../includes/DatabaseConnection.php';

    $sql = 'DELETE FROM module WHERE module_id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();

    header('location: modules.php');
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Unable to connect to delete question: ' . $e->getMessage();
}

include '../templates/admin_layout.html.php';
