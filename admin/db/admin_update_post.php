<?php
$post_id = $_GET['update'];
if (isset($_GET['update'])) {

    $query = "SELECT * FROM posts WHERE post_id = $post_id";
    $select_post_by_id = mysqli_query($connection, $query);


    $row = mysqli_fetch_assoc($select_post_by_id);
    $post_category_id = $row['post_category_id'];
    $post_title = $row['post_title'];
    $post_author = $row['post_author'];
    $post_date = $row['post_date'];
    $post_image = $row['post_image'];
    $post_content = $row['post_content'];
    $post_tags = $row['post_tags'];
    $post_comment_count = $row['post_comment_count'];
    $post_status = $row['post_status'];
    $post_views_count = $row['post_views_count'];

    $query2 = "SELECT cat_title FROM categories WHERE cat_id = $post_category_id";
    $select_category_by_id = mysqli_query($connection, $query2);
    $row2 = mysqli_fetch_assoc($select_category_by_id);

    $cat_title = $row2['cat_title'];
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
