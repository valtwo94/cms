<?php
if (isset($_GET['admin'])) {
    $user_id = $_GET['admin'];
    $query = "UPDATE users SET user_role = '관리자' WHERE user_id = $user_id ";
    $update_user_admin_query = mysqli_query($connection, $query);
    confirm($update_user_admin_query);
}
