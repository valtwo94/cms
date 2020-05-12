<?php
if (isset($_GET['update'])) {
    $post_id = $_GET['update'];

    $query = "SELECT * FROM posts WHERE post_id = $post_id";
    $select_post_by_id = mysqli_query($connection, $query);


    $row = mysqli_fetch_assoc($select_post_by_id);
    $post_title = $row['post_title'];
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
