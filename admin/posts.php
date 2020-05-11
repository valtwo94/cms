<?php include './includes/header.php'; ?>
<div id="wrapper">

    <!-- Navigation -->
    <?php include './includes/navigation.php' ?>
    <!-- post page -->
    <?php
    if (isset($_GET['source'])) {
        $source = $_GET['source'];
    }
    switch ($source) {
        case 'all_post':
            include './includes/pages/posts_page.php';
            break;
        case 'add_post':
            include './includes/pages/add_post_page.php';
            break;
        case 'update_post':
            include './includes/pages/update_post_page.php';
            break;
        default:
            include 'includes/pages/main_page';
    }
    ?>


</div>
<!-- /#wrapper -->

<?php include './includes/footer.php' ?>