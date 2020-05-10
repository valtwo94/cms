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
?>
<form action="categories.php" method="post">
    <div class="form-group">
        <label for="cat-title">카테고리 추가</label>
        <input class="form-control" type="text" name="cat_title">
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="submit" value="카테고리 추가">
    </div>
</form>