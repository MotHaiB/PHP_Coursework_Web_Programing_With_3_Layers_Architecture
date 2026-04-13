<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    try {
        include '../includes/DatabaseConnection.php';

        $sql = 'INSERT INTO user SET
                username = :username,
                `password` = :password';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':username', $_POST['username']);
        $stmt->bindValue(':password', $_POST['password']);
        $stmt->execute();

        header('location: users.php');
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    $title = 'Add a new user';
    ob_start();
    include '../templates/adduser.html.php';
    $output = ob_get_clean();
}

include '../templates/admin_layout.html.php';
