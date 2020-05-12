<?php
$query2 = "SELECT cat_title FROM categories WHERE cat_id = $post_category_id";
$select_category_by_id = mysqli_query($connection, $query2);
while($row2 = mysqli_fetch_assoc($select_category_by_id)){

    $cat_title = $row2['cat_title'];
    echo "<option></option>";
}
