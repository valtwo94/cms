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
    </tr>
<?php
};
?>