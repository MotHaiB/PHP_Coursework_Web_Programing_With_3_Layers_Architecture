<form action="" method="post">
    <input type="hidden" name="user_id" value="<?= $user['user_id']; ?>">

    <label for="username">Edit your username here</label>
    <textarea name="username" rows="3" cols="40">
<?= $user['username'] ?>
    </textarea>

    <label for='password'>Edit your password here</label>
    <textarea name="password" rows="3" cols="40">
<?= $user['password'] ?>
    </textarea>
    <input type="submit" name="submit" value="Save">
</form>
