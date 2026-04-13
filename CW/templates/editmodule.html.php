<form action="" method="post">
    <input type="hidden" name="module_id" value="<?= $module['module_id']; ?>">

    <label for="name">Edit your name here</label>
    <textarea name="name" rows="3" cols="40">
<?= $module['name'] ?>
    </textarea>

    <label for='description'>Edit your description here</label>
    <textarea name="description" rows="3" cols="40">
<?= $module['description'] ?>
    </textarea>
    <input type="submit" name="submit" value="Save">
</form>
