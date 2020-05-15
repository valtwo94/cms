
<?php
if (isset($_POST['login'])) {
    $useremail = $_POST['user_email'];
    $userpassword = $_POST['user_password'];

    $useremail = mysqli_real_escape_string($connection, $useremail);
    $userpassword = mysqli_real_escape_string($connection, $userpassword);

    $query = "SELECT * FROM users WHERE user_email = '{$useremail}' ";
    $select_user_query = mysqli_query($connection, $query);
    confirm($select_user_query);
    while ($row = mysqli_fetch_assoc($select_user_query)) {
        $db_user_id = $row['user_id'];
        $db_user_email  = $row['user_email'];
        $db_user_password = $row['user_password'];
        $db_user_name = $row['user_name'];
        $db_user_role = $row['user_role'];
        if ($useremail !== $db_user_email && $userpassword !== $db_user_password) {
            header("Location: ../index.php");
        } else if ($useremail == $db_user_email && $userpassword == $db_user_password && '관리자' == $db_user_role) {
            $_SESSION['user_name'] = $db_user_name;
            $_SESSION['user_email'] = $db_user_email;
            $_SESSION['user_password'] = $db_user_password;
            $_SESSION['user_role'] = $db_user_role;
            header("Location: admin");
        } else {
            header("Location: ../index.php");
        }
    }
}
