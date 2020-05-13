<?php
if (isset($_GET['category'])) {
    $category_id = $_GET['category'];
    $query = "SELECT * FROM posts WHERE post_category_id = $category_id";
    $select_category_post_query = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_category_post_query)) {
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
        $post_views_count = $row['post_views_count'];
        $query2 = "SELECT * FROM comments WHERE comment_post_id = $post_id";
        $show_category_comments = mysqli_query($connection, $query2);
        confirm($show_category_comments);
?>
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <!-- Individual Post -->
                <div class="col-lg-8">
                    <!-- Blog Post -->
                    <!-- Title -->
                    <h1><?php echo $post_title ?></h1>
                    <!-- Author -->
                    <p class="lead">
                        by <a href="#"><?php echo $post_author ?></a>
                    </p>
                    <hr>
                    <!-- Date/Time -->
                    <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
                    <hr>
                    <!-- Preview Image -->
                    <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                    <hr>
                    <!-- Post Content -->
                    <p class="lead"><?php echo $post_content ?></p>
                    <a class="btn btn-primary" href="post_page.php?p_id=<?php echo $post_id ?>">자세히<span class="glyphicon glyphicon-chevron-right"></span></a>
                    <hr>



                </div>



        <?php

    }
} ?>