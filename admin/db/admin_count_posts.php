<?php
$query = "SELECT * FROM posts";
$all_posts = mysqli_query($connection, $query);
confirm($all_posts);
$post_count = mysqli_num_rows($all_posts);
echo $post_count;
