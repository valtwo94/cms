<?php
$query = 'SELECT user_name FROM users ';
$user_option_query = mysqli_query($connection, $query);
confirm($user_option_query);
while ($row = mysqli_fetch_assoc($user_option_query)) {
    echo "<option value={$row['user_name']}>{$row['user_name']}</option>";
}
