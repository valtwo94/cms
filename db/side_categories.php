<?php
$query = "SELECT * FROM categories";
$select_side_categories_query = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($select_side_categories_query)) {
    $cat_title = $row['cat_title'];
    echo "<li><a href='#'>{$cat_title}</a></li>";
}
