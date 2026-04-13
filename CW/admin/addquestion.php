<?php
session_start();

if (!isset($_SESSION['user'])) {
    die("Bạn phải đăng nhập trước.");
}

include '../includes/DatabaseConnection.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($_POST['module'])) {
        $error = "Please select a module.";
    } 
    else if (empty($_POST['title']) || empty($_POST['content'])) {
        $error = "Title and content cannot be empty.";
    }
    else {
        try {
            $sql = 'INSERT INTO question SET
                    title = :title,
                    content = :content,
                    user_id = :user_id,
                    module = :module';

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':title', $_POST['title']);
            $stmt->bindValue(':content', $_POST['content']);
            $stmt->bindValue(':user_id', $_SESSION['user'], PDO::PARAM_INT);
            $stmt->bindValue(':module', $_POST['module'], PDO::PARAM_INT);
            $stmt->execute();

            header('Location: questions.php');
            exit;

        } catch (PDOException $e) {
            $error = 'Database error: ' . $e->getMessage();
        }
    }
}

// load module list
$sql_m = 'SELECT * FROM module';
$modules = $pdo->query($sql_m);

ob_start();
include '../templates/addquestion.html.php';
$output = ob_get_clean();

include '../templates/admin_layout.html.php';
