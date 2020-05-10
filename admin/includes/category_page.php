<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    카테고리
                </h1>
                <div class="col-xs-6">
                    <!--카테고리 추가 -->
                    <?php include 'db/admin_add_category.php'; ?>
                    <form action="categories.php" method="post">
                        <div class="form-group">
                            <label for="cat-title">카테고리 추가</label>
                            <input class="form-control" type="text" name="cat_title">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" value="카테고리 추가">
                        </div>
                    </form>
                    <?php include 'db/admin_update_category.php'; ?>
                    <form action="categories.php" method="post">
                        <label for="update_category_id">카테고리 수정</label><br>
                        <select name="update_category_id">
                            <option>카테고리</option>
                            <!-- 기존 카테고리 드랍다운 메뉴 호출 -->
                            <?php include 'db/admin_update_options.php'; ?>
                        </select>
                        <br>
                        <br>
                        <div class="form-group">
                            <input class="form-control" type="text" name="update_cat_title">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="update" value="카테고리 수정">
                        </div>
                    </form>
                </div>
                <div class="col-xs-6">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category title</th>
                            </tr>
                        <tbody>
                            <!-- 카테고리 추가시 데이터 추가 -->
                            <?php include 'db/admin_categories.php' ?>
                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div> <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>