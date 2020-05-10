<?php
if (isset($_POST['submit'])) {
    $cat_title = trim($_POST['cat_title']);
    if ($cat_title == "" || empty($cat_title)) {
        echo "추가할 카테고리를 입력해주세요";
    } else {
        $query = "INSERT INTO categories(cat_title) VALUE ('{$cat_title}') ";
        $create_category_query = mysqli_query($connection, $query);
        if (!$create_category_query) {
            die('쿼리실행 실패' . mysqli_error($connection));
        }
    }
}
