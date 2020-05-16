<?php
if (isset($_POST['create_user'])) {

    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_name = $_POST['user_name'];
    $user_image = $_FILES['user_image']['name'];
    $user_image_temp = $_FILES['user_image']['tmp_name'];
    $user_role = $_POST['user_role'];
    $user_date = date('d-m-y');

    move_uploaded_file($user_image_temp, "../images/$user_image");
    $query = "INSERT INTO users(user_email, user_password, user_name, user_date, user_image, user_role ) ";
    $query .= "VALUES('{$user_email}', '{$user_password}', '{$user_name}', now(), '{$user_image}', '{$user_role}' ) ";
    $add_user_query = mysqli_query($connection, $query);
    confirm($add_user_query);
    header("Location: ./users.php?source=all_users");
}
