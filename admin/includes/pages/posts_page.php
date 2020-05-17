<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    전체보기
                </h1>
                <form action="" method="post">
                    <table class="table table-border table-hover">
                        <div id="bulkOptionsContainer" class="col-xs-4">

                            <select name="bulk_options" id="" class="form-control">
                                <option value="게시중">게시중</option>
                                <option value="수정중">수정중</option>
                                <option value="삭제">삭제</option>
                            </select>
                        </div>
                        <div class="col-xs-4">
                            <input type="submit" name="submit" class="btn btn-success" value="업데이트">
                        </div>
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
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
                            <?php include 'db/admin_checkbox_control.php'; ?>
                            <?php include 'db/admin_delete_post.php'; ?>
                            <?php include 'db/admin_all_posts.php' ?>

                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->