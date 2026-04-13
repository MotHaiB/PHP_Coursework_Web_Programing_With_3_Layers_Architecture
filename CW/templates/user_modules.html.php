<?php foreach ($modules as $module): ?>
    <blockquote>
        <strong><?= htmlspecialchars($module['name']) ?></strong>
        <br><br>
        <?= (htmlspecialchars($module['description'])) ?>
        <br><br>

        </form>
    </blockquote>
<?php endforeach; ?>
