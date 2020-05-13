<?php
if (isset($_GET['p_id'])) {
    $the_comments_id = $_GET['p_id'];
    $query = "SELECT * FROM comments WHERE comment_post_id = $the_comments_id";
    $show_comments_query = mysqli_query($connection, $query);
    confirm($show_comments_query);
    while ($row = mysqli_fetch_assoc($show_comments_query)) {
        $comment_id = $row['comment_id'];
        $comment_author = $row['comment_author'];
        $comment_content = $row['comment_content'];
        $comment_email = $row['comment_email'];
        $comment_status = $row['comment_status'];
        $comment_date = $row['comment_date'];

?>


        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="http://placehold.it/64x64" alt="">
            </a>
            <div class="media-body">
                <h4 class="media-heading">
                    <?php echo $comment_author; ?>
                    <small><?php echo $comment_date; ?></small>
                </h4>
                <?php echo $comment_content; ?>
            </div>
        </div>


<?php
    }
}
?>