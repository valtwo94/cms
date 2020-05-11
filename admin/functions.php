<?php
function confirm($result)
{
    global $connection;

    if (!$result) {
        die('쿼리 실패' . mysqli_error($connection));
    }
}
