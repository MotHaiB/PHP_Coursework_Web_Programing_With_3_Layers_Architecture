<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="1841_cw.css">
    <title><?= $title ?></title>
</head>
    <body>
        <header><h1>Ask your Question DB</h1></header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="questions.php">Question list</a></li>
                <!--<li><a href="addquestion.php">Add a new Question</a></li>-->
                <!--<li><a href="users.php">User list</a></li>-->
                <!--<li><a href="adduser.php">Add a new User</a></li>-->
                <!--<li><a href="modules.php">Module list</a></li>-->
                <!--<li><a href="addmodule.php">Add a new Module</a></li>-->
                <li><a href="PDO_login/index.php">Loggin</a></li>
            </ul>
        </nav>
        <main>
            <?= $output ?>
        </main>
        <footer>Enjoy our website!</footer>
    </body>
</html>
