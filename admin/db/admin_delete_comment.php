<?php
//게시물 관리자페이지 삭제 기능
if (isset($_GET['delete'])) {
    $the_comment_id = $_GET['delete'];
    $query2 = "SELECT comment_post_id FROM comments WHERE comment_id = $the_comment_id";
    $find_postid_query = mysqli_query($connection, $query2);
    confirm($find_postid_query);
    $row = mysqli_fetch_assoc($find_postid_query);
    $the_post_id = $row['comment_post_id'];
    // 댓글 갯수 수 추가
    $query3 = "SELECT post_comment_count FROM posts WHERE post_id = $the_post_id";
    $find_post_comment_count = mysqli_query($connection, $query3);
    confirm($find_post_comment_count);
    $row2 = mysqli_fetch_assoc($find_post_comment_count);
    $the_post_comment_count = $row2['post_comment_count'] - 1;
    $query4 = "UPDATE posts SET post_comment_count = $the_post_comment_count WHERE post_id = $the_post_id";
    $decrease_post_comment_count = mysqli_query($connection, $query4);
    confirm($decrease_post_comment_count);

    $query = "DELETE FROM comments WHERE comment_id = {$the_comment_id}";
    $delete_query = mysqli_query($connection, $query);
    confirm($delete_query);
}
