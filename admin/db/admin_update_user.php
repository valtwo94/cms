<?php

if (isset($_GET['update'])) {
    $user_id = $_GET['update'];
    $query = "SELECT * FROM users WHERE user_id = $user_id";
    $select_user_by_id = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($select_user_by_id);
    $user_email = $row['user_email'];
    $user_password = $row['user_password'];
    $user_name = $row['user_name'];
    $user_image = $row['user_image'];
}

if (isset($_POST['update_user'])) {
    $user_id = $_GET['update'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_name = $_POST['user_name'];
    $user_role = $_POST['user_role'];
    $user_image = $_FILES['user_image']['name'];
    $user_image_temp = $_FILES['user_image']['tmp_name'];

    move_uploaded_file($user_image_temp, "../images/$user_image");
    $query = "UPDATE users SET ";
    $query .= "user_email = '{$user_email}', ";
    $query .= "user_password = '{$user_password}', ";
    $query .= "user_image = '{$user_image}', ";
    $query .= "user_role = '{$user_role}', ";
    $query .= "user_name = '{$user_name}' ";
    $query .= "WHERE user_id = {$user_id} ";
    $upadte_user_query = mysqli_query($connection, $query);
    confirm($upadte_user_query);
    header("Location: users.php?source=");
}
