<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    회원추가
                </h1>
                <?php include 'db/admin_add_user.php'; ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">이메일</label>
                        <input type="email" class="form-control" name="user_email">
                    </div>
                    <div class="form-group">
                        <label for="post_category">비밀번호</label>
                        <input type="password" class="form-control" name="user_password">
                    </div>
                    <div class="form-group">
                        <label for="post_author">사용자 이름</label>
                        <input type="text" class="form-control" name="user_name">
                    </div>
                    <div class="form-group">
                        <label for="user_role">계정유형</label>
                        <select name="user_role">
                            <option value="관리자">관리자</option>
                            <option value="일반">일반</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="post_image">이미지</label>
                        <input type="file" name="user_image">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="create_user" value="추가">
                    </div>

                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->