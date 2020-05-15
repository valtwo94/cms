<?php
if (isset($_SESSION['user_role'])) {
    if ($_SESSION['user_role'] !== '관리자') {
        header('Location: ../index.php');
    }
}
