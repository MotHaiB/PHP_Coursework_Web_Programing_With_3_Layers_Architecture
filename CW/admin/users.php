<?php
    try {
        include "../includes/DatabaseConnection.php";
        $sql = 'SELECT * from user';
        $users = $pdo->query($sql);

        $title = 'User list';
        ob_start();
        include '../templates/users.html.php';
        $output = ob_get_clean();
    }

    catch (PDOException $e) {
        $title = 'Error!';
        $output = 'Unable to connect to the database: ' . $e->getMessage();
    }

    include '../templates/admin_layout.html.php';
?>
