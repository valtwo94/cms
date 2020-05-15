<?php
$query = 'SELECT * FROM categories';
$count_categories_query = mysqli_query($connection, $query);
confirm($count_categories_query);
$categories_rows = mysqli_num_rows($count_categories_query);
echo $categories_rows;
