<form action="../proc/login_proc.php" method="post">
    <input type="text" name=<?php echo LOGIN_FORM['USER'];?> required>
    <input type="password" name=<?php echo LOGIN_FORM['PASSWORD'];?> required>
    <input type="submit" value=<?php echo LOGIN_FORM['SEND'];?>>
</form>