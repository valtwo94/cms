<?php

$query = "SELECT * FROM categories";
$select_all_categories_query = mysqli_query($connection, $query);
confirm($select_all_categories_query);
while ($row = mysqli_fetch_assoc($select_all_categories_query)) {
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
    echo "<option value=$cat_id>$cat_title</option>";
}
