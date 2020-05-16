<?php
$query = 'SELECT * FROM users';
$count_users_query = mysqli_query($connection, $query);
confirm($count_users_query);
$user_count = mysqli_num_rows($count_users_query);
echo $user_count;
