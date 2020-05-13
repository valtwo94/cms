<?php
if (isset($_GET['unapprove'])) {
    $comment_id = $_GET['unapprove'];
    $comment_status = '거절';
    $query = "UPDATE comments  SET comment_status = '$comment_status' WHERE comment_id = $comment_id";
    $unapprove_comment_query = mysqli_query($connection, $query);
    confirm($unapprove_comment_query);
}
