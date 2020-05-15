<?php
$query = 'SELECT * FROM users';
$count_users_query = mysqli_query($connection, $query);
confirm($count_users_query);
$users_rows = mysqli_num_rows($count_users_query);
echo $users_rows;
