<?php
$query = "SELECT * FROM posts";
$all_posts = mysqli_query($connection, $query);
confirm($all_posts);
$num_rows = mysqli_num_rows($all_posts);
echo $num_rows;
