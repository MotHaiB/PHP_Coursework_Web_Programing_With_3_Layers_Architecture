<?php
include '../includes/DatabaseConnection.php';
try {
    if (isset($_POST['name']) and isset($_POST['description'])) {
        $sql = 'UPDATE module SET name = :name, description = :description WHERE module_id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name', $_POST['name']);
        $stmt->bindValue(':description', $_POST['description']);
        $stmt->bindValue(':id', $_POST['module_id']);
        $stmt->execute();
        header('location: modules.php');
    } else {
        $sql = 'SELECT * FROM module WHERE module_id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->execute();
        $module = $stmt->fetch();
        $title = 'Edit module';
        ob_start();
        include '../templates/editmodule.html.php';
        $output = ob_get_clean();
    }
} catch (PDOException $e) {
    $title = 'Error has occured';
    $output = 'Error editing module: ' . $e->getMessage();
}
include '../templates/admin_layout.html.php';
