<?php include './includes/header.php'; ?>
<div id="wrapper">

    <!-- Navigation -->
    <?php include './includes/navigation.php' ?>
    <!-- post page -->
    <?php
    if (isset($_GET['source'])) {
        $source = $_GET['source'];

        switch ($source) {
            case 'add_user':
                include './includes/pages/add_user_page.php';
                break;
            case 'edit_user':
                include './includes/pages/edit_user_page.php';
                break;
            default:
                include './includes/pages/view_all_users_page.php';
        }
    }

    ?>


</div>
<!-- /#wrapper -->

<?php include './includes/footer.php' ?>