<?php
$query = "SELECT * FROM comments";
$select_all_comments_query = mysqli_query($connection, $query);


while ($row = mysqli_fetch_assoc($select_all_comments_query)) {
    $comment_id = $row['comment_id'];
    $comment_author = $row['comment_author'];
    $comment_post_id = $row['comment_post_id'];
    $comment_email = $row['comment_email'];
    $comment_content = $row['comment_content'];
    $comment_status = $row['comment_status'];
    $comment_date = $row['comment_date'];




?>



    <!-- First Blog Post -->
    <tr>
        <td><?php echo $comment_id ?></td>
        <td><?php echo $comment_author ?></td>
        <td><?php echo $comment_content ?></td>
        <td><?php echo $comment_email ?></td>
        <td><?php echo $comment_status ?></td>
        <td><?php echo $comment_date ?></td>
        <td>권한</td>
        <td><a href="posts.php?source=update_post&update=<?php echo $post_id; ?>">수정</a></td>
        <td><a href="posts.php?source=all_post&delete=<?php echo $post_id; ?>">삭제</a></td>

    </tr>

<?php
}
?>