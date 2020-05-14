<?php
if (isset($_GET['normal'])) {
    $user_id = $_GET['normal'];
    $query = "UPDATE users SET user_role = '일반' WHERE user_id = $user_id ";
    $update_user_normal_query = mysqli_query($connection, $query);
    confirm($update_user_normal_query);
}
