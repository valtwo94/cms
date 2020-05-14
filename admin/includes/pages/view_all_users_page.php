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
                            <th>이메일</th>
                            <th>비밀번호</th>
                            <th>이름</th>
                            <th>계정</th>
                            <th>프로필 이미지</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php include 'db/admin_normal_user.php'; ?>
                        <?php include 'db/admin_admin_user.php'; ?>
                        <?php include 'db/admin_all_users.php'; ?>
                        <?php include 'db/admin_delete_user.php'; ?>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->