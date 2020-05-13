<?php
if (isset($_GET['p_id'])) {
    $post_id = $_GET['p_id'];
    $query = "SELECT * FROM posts WHERE post_id = $post_id";
    $select_individual_post_query = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($select_individual_post_query);
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
                <hr>
                <!-- Blog Comments -->
                <!-- Comments Form -->
                <?php include 'db/create_comment.php' ?>
                <?php include 'includes/comment_form.php' ?>
                <hr>
                <!-- Posted Comments -->
                <!-- Comment -->
                <?php include 'db/show_comments.php' ?>
                <br>

            </div>

        <?php } ?>