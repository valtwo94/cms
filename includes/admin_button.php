<?php

if (isset($_SESSION['user_role'])) {

    if ($_SESSION['user_role'] == '관리자') {
        echo "<li><a href='admin'>관리자 화면</a></li>";
    }
}
