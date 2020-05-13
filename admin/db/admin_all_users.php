<?php
$query = "SELECT * FROM users";
$select_all_users_query = mysqli_query($connection, $query);


while ($row = mysqli_fetch_assoc($select_all_users_query)) {
    $user_id = $row['user_id'];
    $user_email = $row['user_email'];
    $user_password = $row['user_password'];
    $user_name = $row['user_name'];
    $user_role = $row['user_role'];
    $user_date = $row['user_date'];
    $user_image = $row['user_image'];
    $user_randSalt = $row['randSalt'];




?>



    <!-- user 정보표 -->
    <tr>
        <td><?php echo $user_id ?></td>
        <td><?php echo $user_email ?></td>
        <td><?php echo $user_password ?></td>
        <td><?php echo $user_name ?></td>
        <td><?php echo $user_role ?></td>
        <td><img width="100" src="../images/<?php echo $user_image ?>" alt="image"></td>
        <td><a href="users.php?source=update_user&update=<?php echo $user_id; ?>">수정</a></td>
        <td><a href="users.php?source=all_user&delete=<?php echo $user_id; ?>">삭제</a></td>
    </tr>

<?php
}
?>