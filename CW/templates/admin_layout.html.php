<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../1841_cw.css">
    <title><?= $title ?></title>
</head>
    <body>
        <header id="admin">
            <h1>Ask your Question DB - Admin Area</h1>
        </header>
        <nav>
            <ul>
                <!--<li><a href="index.php">Home</a></li>-->
                <li><a href="questions.php">Question list</a></li>
                <li><a href="addquestion.php">Add a new Question</a></li>
                <li><a href="users.php">User list</a></li>
                <li><a href="adduser.php">Add a new User</a></li>
                <li><a href="modules.php">Module list</a></li>
                <li><a href="addmodule.php">Add a new Module</a></li>
                <!--<li><a href="admin/questions.php">Admin</a></li>-->
                <li><a href="../index.php">Public Site</a></li>
            </ul>
        </nav>
        <main>
            <?= $output ?>
        </main>
        <footer>Have a nice day, admin!</footer>
    </body>
</html>
