<?php include 'db/login.php'; ?>
<?php if (!isset($_SESSION['user_name'])) {
?>
    <div class="well">
        <form action="" method="post" class="form-group">
            <div class="form-group">
                <input type="email" name=user_email class="form-control" placeholder="이메일">
            </div>
            <div class="form-group">
                <input type="password" name="user_password" class="form-control" placeholder="비밀번호">
            </div>
            <div class="form-group">
                <input type="submit" value="로그인" class="btn btn-primary" name="login">
            </div>
        </form>
    </div>
<?php
} else { ?>

    <div class="well">
        <a href="db/logout.php" class="btn btn-primary">로그아웃</a>
    </div>
<?php
}
?>