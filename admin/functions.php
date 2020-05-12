<?php
// 에러표시함수
function confirm($result)
{
    global $connection;
    if (!$result) {
        die('쿼리 실패' . mysqli_error($connection));
    }
}

// id => 카테고리 호출 함수
function categoryOptions($cat_id)
{
    global $connection;
    $query2 = "SELECT cat_title FROM categories WHERE cat_id = $cat_id";
    $select_category_by_id = mysqli_query($connection, $query2);
    $row2 = mysqli_fetch_assoc($select_category_by_id);
    $cat_title = $row2['cat_title'];
    echo $cat_title;
}
