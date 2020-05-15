<?php



if (isset($_POST['update_profile'])) {
    $user_id = $_SESSION['user_id'];
    $profile_email = $_POST['profile_email'];
    $profile_password = $_POST['profile_password'];
    $profile_name = $_POST['profile_name'];
    $profile_image = $_FILES['profile_image']['name'];
    $profile_image_temp = $_FILES['profile_image']['tmp_name'];

    move_uploaded_file($profile_image_temp, "../images/$profile_image");
    $query = "UPDATE users SET ";
    $query .= "user_email = '{$profile_email}', ";
    $query .= "user_password = '{$profile_password}', ";
    $query .= "user_image = '{$profile_image}', ";
    $query .= "user_name = '{$profile_name}' ";
    $query .= "WHERE user_id = {$user_id} ";
    $upadte_profile_query = mysqli_query($connection, $query);
    confirm($upadte_profile_query);
    $_SESSION['user_image'] = $profile_image;
    header("Location: profile.php?source=");
}
