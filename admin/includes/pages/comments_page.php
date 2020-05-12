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
                            <th>댓글내용</th>
                            <th>이메일</th>
                            <th>상태</th>
                            <th>작성일자</th>
                            <th>권한</th>
                            <th>승인</th>
                            <th>거절</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php include 'db/admin_delete_comment.php'; ?>
                        <?php include 'db/admin_view_all_comments.php' ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->