<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    사용자 수정
                </h1>
                <?php include './db/admin_update_user.php' ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="user_email">이메일</label>
                        <input type="email" class="form-control" name="user_email" value="<?php echo $user_email ?>">
                    </div>
                    <div class="form-group">
                        <label for="user_password">비밀번호</label>
                        <input type="password" class="form-control" name="user_password" value="user_password">
                    </div>
                    <div class="form-group">
                        <select name="user_role" id="">
                            <option value="일반">일반</option>
                            <option value="관리자">관리자</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="user_name">이름</label>
                        <input type="text" class="form-control" name="user_name" value="<?php echo $user_name ?>">
                    </div>
                    <div class="form-group">
                        <label for="post_image">프로필 이미지</label>
                        <input type="file" name="user_image">
                        <br>
                        <label>현재 이미지</label>
                        <br>
                        <img width="100" src="../images/<?php echo $user_image ?>" alt="">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="update_user" value="수정">
                    </div>

                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->