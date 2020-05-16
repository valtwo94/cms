<?php
$query = 'SELECT * FROM categories';
$count_categories_query = mysqli_query($connection, $query);
confirm($count_categories_query);
$category_count = mysqli_num_rows($count_categories_query);
echo $category_count;
