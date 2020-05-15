<?php include '../db/db.php'; ?>
<?php include '../functions.php'; ?>
<?php
if (isset($_POST['login'])) {
    $useremail = $_POST['user_email'];
    $userpassword = $_POST['user_password'];

    $useremail = mysqli_real_escape_string($connection, $useremail);
    $userpassword = mysqli_real_escape_string($connection, $userpassword);

    $query = "SELECT * FROM users WHERE user_email = '{$useremail}' ";
    $select_user_query = mysqli_query($connection, $query);
    confirm($select_user_query);
}
