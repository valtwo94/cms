<?php
$query = 'SELECT * FROM comments';
$count_comments_query = mysqli_query($connection, $query);
confirm($count_comments_query);
$comment_row = mysqli_num_rows($count_comments_query);
echo $comment_row;
