<?php
    try {
        include "../includes/DatabaseConnection.php";
        $sql = 'SELECT * from module';
        $modules = $pdo->query($sql);
        
        $title = 'Module List';
        ob_start();
        include '../templates/user_modules.html.php';
        $output = ob_get_clean();
    }

    catch (PDOException $e) {
        $title = 'Error!';
        $output = 'Unable to connect to the database: ' . $e->getMessage();
    }

    include '../templates/user_layout.html.php';
?>
