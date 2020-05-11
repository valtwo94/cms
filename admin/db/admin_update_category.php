<?php
if (isset($_POST['update'])) {
    $update_category_id = $_POST['update_category_id'];
    echo $update_category_id;
    $update_cat_title = $_POST['update_cat_title'];
    echo $update_cat_title;
    $query = "UPDATE categories SET cat_title = '$update_cat_title' WHERE cat_id = $update_category_id ";
    $update_categories_id_query = mysqli_query($connection, $query);
    confirm($update_categories_id_query);
    header("Location: categories.php");
}
