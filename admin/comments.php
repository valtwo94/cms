<?php include './includes/header.php'; ?>
<div id="wrapper">

    <!-- Navigation -->
    <?php include './includes/navigation.php' ?>
    <!-- post page -->
    <?php
    if (isset($_GET['source'])) {
        $source = $_GET['source'];

        switch ($source) {
            case 'all_comments':
                include './includes/pages/comments_page.php';
                break;
            case 'add_comment':
                include './includes/pages/add_post_page.php';
                break;
            case 'update_post':
                include './includes/pages/update_post_page.php';
                break;
            default:
                include './includes/pages/comments_page.php';
        }
    }

    ?>


</div>
<!-- /#wrapper -->

<?php include './includes/footer.php' ?>