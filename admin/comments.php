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
            default:
                include './includes/pages/comments_page.php';
        }
    }

    ?>


</div>
<!-- /#wrapper -->

<?php include './includes/footer.php' ?>