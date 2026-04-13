<?php foreach ($questions as $question): ?>
    <blockquote>
        <strong><?= htmlspecialchars($question['title']) ?></strong>
        <br><br>
        <?= (htmlspecialchars($question['content'])) ?>
        <br><br>
        
        <a> Upload by:  </a><?= htmlspecialchars($question['username']) ?>
        <br>
        <a> Module: </a><?= htmlspecialchars($question['module_name']) ?>
        <br>
        <a href="editquestion.php?id=<?= $question['question_id'] ?>"> Edit</a>
        <form action="deletequestion.php" method="post">
            <input type="hidden" name="id" value="<?= ($question['question_id']) ?>">
            <input type="submit" value="Delete">
        </form>
    </blockquote>
<?php endforeach; ?>
