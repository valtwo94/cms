<?php
if (isset($_POST['create_comment'])) {
    $the_post_id = $_GET['p_id'];
    $comment_author = $_POST['comment_author'];
    $comment_email = $_POST['comment_email'];
    $comment_content = $_POST['comment_content'];
    $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) ";
    $query .= "VALUES ($the_post_id, '{$comment_author}', '{$comment_email}', '{$comment_content}', '승인', now())";
    $create_comment_query = mysqli_query($connection, $query);
    confirm($create_comment_query);
    // 포스트 기존 댓글 개수 
    $query2 = "SELECT post_comment_count FROM posts WHERE post_id = $the_post_id";
    $before_post_comment_count = mysqli_query($connection, $query2);
    confirm($before_post_comment_count);
    $row = mysqli_fetch_assoc($before_post_comment_count);
    // 댓글 갯수 수 추가
    $after_post_comment_count = $row['post_comment_count'] + 1;
    $query3 = "UPDATE posts SET post_comment_count = $after_post_comment_count WHERE post_id = $the_post_id";
    $increase_comment_count = mysqli_query($connection, $query3);
    confirm($increase_comment_count);
}
