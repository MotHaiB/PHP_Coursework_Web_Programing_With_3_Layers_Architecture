<?php
include '../includes/DatabaseConnection.php';
try {
    if (isset($_POST['username']) and isset($_POST['password'])) {
        $sql = 'UPDATE user SET username = :username, password = :password WHERE user_id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':username', $_POST['username']);
        $stmt->bindValue(':password', $_POST['password']);
        $stmt->bindValue(':id', $_POST['user_id']);
        $stmt->execute();
        header('location: users.php');
    } else {
        $sql = 'SELECT * FROM user WHERE user_id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->execute();
        $user = $stmt->fetch(); //chỉ có một bản ghi còn fetch all là nhiều bản ghi
        $title = 'Edit user';
        ob_start();
        include '../templates/edituser.html.php';
        $output = ob_get_clean();
    }
} catch (PDOException $e) {
    $title = 'Error has occured';
    $output = 'Error editing user: ' . $e->getMessage();
}
include '../templates/admin_layout.html.php';
