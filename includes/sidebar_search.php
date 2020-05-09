<?php
if (isset($_POST['search'])) {
    $search = trim($_POST['search']);
    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
    $search_query = mysqli_query($connection, $query);
    if (!$search_query) {
        die('Query FAILED' . mysqli_error($connection));
    }
}
$count = mysqli_num_rows($search_query);
if ($count == 0) {
    echo "<h1>no results</h1>";
} else {
    echo $count;
}


?>

<div class="well">
    <h4>Blog Search</h4>
    <form action="" method="post">
        <div class="input-group">
            <input type="text" name="search" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit" name="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </form>
    <!-- /.input-group -->
</div>