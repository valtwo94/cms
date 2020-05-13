<?php
if (isset($_GET['approve'])) {
    $comment_id = $_GET['approve'];
    $comment_status = '승인';
    $query = "UPDATE comments SET comment_status = '$comment_status' WHERE comment_id = $comment_id";
    $approve_comment_query = mysqli_query($connection, $query);
    confirm($approve_comment_query);
}
