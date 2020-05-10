<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    카테고리
                </h1>
                <div class="col-xs-6">
                    <?php include 'db/admin_add_category.php' ?>

                </div>
                <div class="col-xs-6">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category title</th>
                            </tr>
                        <tbody>
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