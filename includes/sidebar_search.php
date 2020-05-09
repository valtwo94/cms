<?php
if (isset($_POST['search'])) {
    $search = $_POST['search'];
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