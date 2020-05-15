<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    프로필
                </h1>
                <?php include 'db/admin_update_profile.php' ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">이메일</label>
                        <input type="email" class="form-control" name="profile_email" value="<?php echo $_SESSION['user_email'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="post_category">비밀번호</label>
                        <input type="password" class="form-control" name="profile_password" value="<?php echo $_SESSION['user_password']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="post_author">사용자 이름</label>
                        <input type="text" class="form-control" name="profile_name" value="<?php echo $_SESSION['user_name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="user_role">계정유형</label>
                        <?php echo $_SESSION['user_role'] ?>
                    </div>
                    <div class="form-group">
                        <label for="post_image">이미지</label>
                        <input type="file" name="profile_image">
                    </div>
                    <img src="../images/<?php echo $_SESSION['user_image']; ?>" alt="" width="100">
                    <br>
                    <br>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="update_profile" value="수정">
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->