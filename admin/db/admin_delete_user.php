<?php
if (isset($_GET['delete'])) {
    $user_id = $_GET['delete'];
    $query = "DELETE FROM users WHERE user_id = $user_id";
    $delete_query = mysqli_query($connection, $query);
    confirm($delete_query);
}
