<?php
//게시물 관리자페이지 삭제 기능
if (isset($_GET['delete'])) {
    $the_post_id = $_GET['delete'];
    $query = "DELETE FROM posts WHERE post_id = {$the_post_id}";
    $delete_query = mysqli_query($connection, $query);
    confirm($delete_query);
}
