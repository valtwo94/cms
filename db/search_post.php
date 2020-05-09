<?php
if (isset($_POST['search'])) {
    $search = trim($_POST['search']);
    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
    $search_query = mysqli_query($connection, $query);
    if (!$search_query) {
        die('Query FAILED' . mysqli_error($connection));
    }
    $count = mysqli_num_rows($search_query);
}
if ($count == 0) {
    echo "<h3>검색 결과가 없습니다</h3>";
} else {
    echo "<h3>'$search' $count 건의 검색결과</h3>";
    while ($row = mysqli_fetch_assoc($search_query)) {

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

        <h2>
            <a href="#"><?php echo $post_title ?></a>
        </h2>
        <p class="lead">
            작성자 : <a href="index.php"><?php echo $post_author ?></a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
        <hr>
        <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
        <hr>
        <p><?php echo $post_content ?></p>
        <a class="btn btn-primary" href="#">더 보기<span class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>
<?php
    }
};
?>