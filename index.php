<?php include "./includes/header.php" ?>

<!-- Navigation -->
<?php include "./includes/navigation.php" ?>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <?php include './db/all_post.php' ?>
        </div>
        <!-- Blog Sidebar Widgets Column -->
        <?php include './includes/sidebar.php' ?>
    </div>
    <hr>
    <ul class="pager">
        <?php include './db/pagination.php'; ?>
    </ul>
    <?php include './includes/footer.php' ?>