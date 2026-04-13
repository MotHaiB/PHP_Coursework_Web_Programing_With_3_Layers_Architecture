<?php
session_start();
if (!isset($_SESSION['user'])) {
    die("Plese log in to access this page.");
}

if (isset($_POST['title']) && isset($_POST['content'])) {
    try {
        include '../includes/DatabaseConnection.php';

        $sql = 'INSERT INTO question SET
                title = :title,
                content = :content,
                user_id = :user_id,
                module = :module';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':title', $_POST['title']);
        $stmt->bindValue(':content', $_POST['content']);
        $stmt->bindValue(':user_id', $_SESSION['user'], PDO::PARAM_INT);
        $stmt->bindValue(':module', $_POST['module']);
        $stmt->execute();

        header('Location: questions.php');
        exit;
    } 
    catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} 

else {
    include '../includes/DatabaseConnection.php';
    
    $title = 'Add a New Question';
    $sql_m = 'SELECT * from module';
    $modules = $pdo->query($sql_m);
    ob_start();
    include '../templates/addquestion.html.php';
    $output = ob_get_clean();
}

include '../templates/user_layout.html.php';
?>

