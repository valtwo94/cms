<?php
$query = "SELECT * FROM posts";
$select_all_posts_query = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
    $post_id = $row['post_id'];
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
    $post_views_count = $row['post_views_count']; ?>



    <!-- First Blog Post -->
    <tr>
        <td><?php echo $post_id ?></td>
        <td><?php echo $post_author ?></td>
        <td><?php echo $post_title ?></td>
        <td><?php echo $post_category_id ?></td>
        <td><?php echo $post_status ?></td>
        <td><img width="100" src="../images/<?php echo $post_image ?>" alt="image"></td>
        <td><?php echo $post_tags ?></td>
        <td><?php echo $post_comment_count ?></td>
        <td><?php echo $post_date ?></td>
        <td><a href="posts.php?source=all_post&delete=<?php echo $post_id; ?>">삭제</a></td>
    </tr>

<?php
}
?>