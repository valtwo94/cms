<?php
$user_id = $_GET['update'];
if (isset($_GET['update'])) {

    $query = "SELECT * FROM users WHERE user_id = $user_id";
    $select_user_by_id = mysqli_query($connection, $query);


    $row = mysqli_fetch_assoc($select_user_by_id);
    $user_email = $row['user_email'];
    $user_password = $row['user_password'];
    $user_name = $row['user_name'];
    $user_image = $row['user_image'];
    $user_date = $row['user_date'];
}

if (isset($_POST['update_post'])) {

    $post_title = $_POST['post_title'];
    $post_author = $_POST['post_author'];
    $post_category_id = $_POST['post_category'];
    $post_status = $_POST['post_status'];
    $post_image = $_FILES['post_image']['name'];
    $post_image_temp = $_FILES['post_image']['tmp_name'];
    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_date = date('d-m-y');



    move_uploaded_file($post_image_temp, "../images/$post_image");
    $query = "UPDATE posts SET ";
    $query .= "post_category_id ='{$post_category_id}', ";
    $query .= "post_title = '{$post_title}', ";
    $query .= "post_author = '{$post_author}', ";
    $query .= "post_date = now(), ";
    $query .= "post_image = '{$post_image}', ";
    $query .= "post_content = '{$post_content}', ";
    $query .= "post_tags = '{$post_tags}', ";
    $query .= "post_status = '{$post_status}' ";
    $query .= "WHERE post_id = {$post_id}";
    $add_post_query = mysqli_query($connection, $query);

    confirm($add_post_query);
    header("Location: posts.php?source=all_post");
}
