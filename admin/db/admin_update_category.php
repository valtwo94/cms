<?php
if (isset($_POST['update'])) {
    $update_category_id = $_POST['update_category_id'];
    $update_cat_title = $_POST['update_cat_title'];
    $query = "UPDATE categories SET cat_title = $update_cat_title WHERE cat_id = $update_category_id ";
    $update_categories_id = mysqli_query($connection, $query);
    if (!$update_categories_id) {
        die("쿼리 실패" .  mysqli_error($connection));
    } else {
        header("Location: categories.php");
    }
}
