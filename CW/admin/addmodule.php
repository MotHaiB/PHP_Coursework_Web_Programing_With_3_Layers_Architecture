<?php
if (isset($_POST['module'])){
    try {
        include '../includes/DatabaseConnection.php';

        $sql = 'INSERT INTO module SET
                `name` = :name,
                `description` = :description';

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name', $_POST['name']);
        $stmt->bindValue(':description', $_POST['description']);
        $stmt->execute();

        header('Location: modules.php');
        exit;
    } 
    catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} 

else {
    $title = 'Add a New Module';
    ob_start();
    include '../templates/addmodule.html.php';
    $output = ob_get_clean();
}

include '../templates/admin_layout.html.php';
?>

