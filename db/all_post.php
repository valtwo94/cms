<?php
$page_num = $_GET['page'];
$page_start_num = 0 + ($page_num - 1) * 3;
$per_page = 3;
$post_query_count = "SELECT * FROM posts";
$find_count = mysqli_query($connection, $post_query_count);
$count = mysqli_num_rows($find_count);
$count = ceil($count / 5);
$query = "SELECT * FROM posts WHERE post_status = '게시중' LIMIT $page_start_num, $per_page";
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
    <h2>
        <a href="post_page.php?p_id=<?php echo $post_id ?>"><?php echo $post_title ?></a>
    </h2>
    <p class="lead">
        작성자 : <a href="index.php"><?php echo $post_author ?></a>
    </p>
    <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
    <hr>
    <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
    <hr>
    <p><?php echo $post_content ?></p>
    <a class="btn btn-primary" href="post_page.php?p_id=<?php echo $post_id ?>">자세히<span class="glyphicon glyphicon-chevron-right"></span></a>

    <hr>

<?php
}
?>