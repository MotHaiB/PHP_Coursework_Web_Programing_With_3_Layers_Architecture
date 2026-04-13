<form action="" method="post">

    <label>Type your question title here:</label><br>
    <textarea name="title" rows="3" cols="40"><?= htmlspecialchars($_POST['title'] ?? '') ?></textarea><br><br>

    <label>Type your question content here:</label><br>
    <textarea name="content" rows="3" cols="40"><?= htmlspecialchars($_POST['content'] ?? '') ?></textarea><br><br>

    <select name="module">
        <option value="">Select Module</option>
        <?php foreach($modules as $m): ?>
            <option 
                value="<?= htmlspecialchars($m['module_id']) ?>"
                <?= (isset($_POST['module']) && $_POST['module'] == $m['module_id']) ? 'selected' : '' ?>
            >
                <?= htmlspecialchars($m['name']) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <br><br>
    <input type="submit" value="Add">
</form>
