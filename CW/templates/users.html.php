<?php foreach ($users as $user): ?>
    <blockquote>
        <strong><a>User ID: </a><?= htmlspecialchars($user['user_id']) ?></strong>
        <br><br>
        <a>User Name: </a><?= (htmlspecialchars($user['username'])) ?>
        <br><br>
        <a href="edituser.php?id=<?= $user['user_id'] ?>"> Edit</a>
        <form action="deleteuser.php" method="post">
            <input type="hidden" name="id" value="<?= ($user['user_id']) ?>">
            <input type="submit" value="Delete">
        </form>
    </blockquote>
<?php endforeach; ?>
