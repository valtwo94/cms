<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    전체보기
                </h1>
                <table class="table table-border table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>작성자</th>
                            <th>제목</th>
                            <th>카테고리</th>
                            <th>상태</th>
                            <th>이미지</th>
                            <th>태그</th>
                            <th>댓글</th>
                            <th>작성일자</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php include 'db/admin_delete_post.php'; ?>
                        <?php include 'db/admin_all_posts.php' ?>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->