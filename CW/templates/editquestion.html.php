<form action="" method="post">
    <input type="hidden" name="question_id" value="<?= $question['question_id']; ?>">

    <label for="title">Edit your title here</label>
    <textarea name="title" rows="3" cols="40">
<?= $question['title'] ?>
    </textarea>

    <label for='content'>Edit your content here</label>
    <textarea name="content" rows="3" cols="40">
<?= $question['content'] ?>
    </textarea>
    <input type="submit" name="submit" value="Save">
</form>
