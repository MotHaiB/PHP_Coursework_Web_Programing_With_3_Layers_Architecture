<?php
    try {
        include "../includes/DatabaseConnection.php";
        
        $sql = 'SELECT question.*, user.username, user.role, module.name AS module_name
        FROM question
        INNER JOIN user ON question.user_id = user.user_id
        INNER JOIN module ON question.module = module.module_id';
        
        $questions = $pdo->query($sql);
        
        $title = 'Question List';
        ob_start();
        include '../templates/questions.html.php';
        $output = ob_get_clean();
    }

    catch (PDOException $e) {
        $title = 'Error!';
        $output = 'Unable to connect to the database: ' . $e->getMessage();
    }

    include '../templates/user_layout.html.php';
?>
