<?php
if (isset($_POST['checkBoxArray'])) {
    foreach ($_POST['checkBoxArray'] as $postValueId) {
        $bulk_options = $_POST['bulk_options'];

        switch ($_POST['bulk_options']) {
            case '게시중':
                $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id = $postValueId";
                $update_to_publsh = mysqli_query($connection, $query);
                confirm($update_to_publsh);
                break;
            case '수정중':
                $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id = $postValueId";
                $update_to_fix = mysqli_query($connection, $query);
                confirm($update_to_fix);
                break;
            case '삭제':
                $query = "DELETE FROM posts WHERE post_id = $postValueId";
                $update_to_delete = mysqli_query($connection, $query);
                confirm($update_to_delete);
                break;
        }
    }
}
