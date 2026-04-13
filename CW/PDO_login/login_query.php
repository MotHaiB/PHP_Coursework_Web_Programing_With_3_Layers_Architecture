<?php
session_start();
require_once 'conn.php';

if(isset($_POST['login'])){
    if($_POST['username'] != "" && $_POST['password'] != ""){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // query the user table
        $sql = "SELECT * FROM `user` WHERE `username`=? AND `password`=?";
        $query = $conn->prepare($sql);
        $query->execute(array($username, $password));
        $fetch = $query->fetch(PDO::FETCH_ASSOC);

        if($fetch){
            // store session info
            $_SESSION['user'] = $fetch['user_id'];      // adjust column name
            $_SESSION['username'] = $fetch['username'];
            $_SESSION['role'] = $fetch['role'];        // 'admin' or 'student'

            // redirect based on role
            if($fetch['role'] === 'admin'){
                header("Location: ../admin/questions.php");
                exit();
            } else if($fetch['role'] === 'student'){
                header("Location: ../user/questions.php");
                exit();
            } else {
                // fallback
                header("Location: home.php");
                exit();
            }
        } else{
            echo "
            <script>alert('Invalid username or password')</script>
            <script>window.location = 'index.php'</script>
            ";
        }
    } else{
        echo "
        <script>alert('Please complete the required field!')</script>
        <script>window.location = 'index.php'</script>
        ";
    }
}
?>
