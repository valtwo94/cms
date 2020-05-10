<?php
$query = "SELECT * FROM categories";
$select_admin_categories_query = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($select_admin_categories_query)) {
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
?>
    <tr>
        <td><?php echo $cat_id; ?></td>
        <td><?php echo $cat_title; ?></td>
        <!-- 카테고리 삭제 버튼 -->
        <?php include 'db/admin_delete_category.php'; ?>
        <td><a href="categories.php?delete=<?php echo $cat_id; ?>">삭제</a></td>
    </tr>
<?php
};
?>