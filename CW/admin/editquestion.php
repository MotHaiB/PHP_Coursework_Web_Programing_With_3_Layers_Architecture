<?php
include '../includes/DatabaseConnection.php';
try {
    if (isset($_POST['title']) and isset($_POST['content'])) {
        $sql = 'UPDATE question SET title = :title, content = :content WHERE question_id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':title', $_POST['title']);
        $stmt->bindValue(':content', $_POST['content']);
        $stmt->bindValue(':id', $_POST['question_id']);
        $stmt->execute();
        header('location: questions.php');
    } else {
        $sql = 'SELECT * FROM question WHERE question_id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->execute();
        $question = $stmt->fetch(); //chỉ có một bản ghi còn fetch all là nhiều bản ghi
        $title = 'Edit question';
        ob_start();
        include '../templates/editquestion.html.php';
        $output = ob_get_clean();
    }
} catch (PDOException $e) {
    $title = 'Error has occured';
    $output = 'Error editing question: ' . $e->getMessage();
}
include '../templates/admin_layout.html.php';
