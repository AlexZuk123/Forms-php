<?php
if (!isset($_POST['submit'])) {
?>
<form action="index.php" method="POST">
    <p><input type="text" name="userName" placeholder="NICK-NAME"></p>
    <p><input type="text" name="userMail" placeholder="EMAIL"></p>
    <p><input type="password" name="userPass" placeholder="PASSWORD"></p>
    <p><input type="submit" name="submit" value="Login"></p>
</form>
<?php
} else {
    echo $_POST["userName"] . ' , You are welcome! Your password is ' . $_POST["userPass"] . 'Your email is ' . $_POST["userMail"] . '</br>';
}
?>