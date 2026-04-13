<?php foreach ($modules as $module): ?>
    <blockquote>
        <strong><?= htmlspecialchars($module['name']) ?></strong>
        <br><br>
        <?= (htmlspecialchars($module['description'])) ?>
        <br><br>
        <a href="editmodule.php?id=<?= $module['module_id'] ?>"> Edit</a>
        <form action="deletemodule.php" method="post">
            <input type="hidden" name="id" value="<?= ($module['module_id']) ?>">
            <input type="submit" value="Delete">
        </form>
    </blockquote>
<?php endforeach; ?>
