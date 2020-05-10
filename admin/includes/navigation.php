<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/cms/admin">관리자 페이지</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <!-- To User page -->
        <li><a href="/cms">유저화면</a></li>
        <!-- Message -->
        <?php include './messages.php'; ?>
        <!-- alert -->
        <?php include './alerts.php'; ?>
        <!-- profile menu -->
        <?php include './profile_menu.php'; ?>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <?php include './toggle_navigation.php'; ?>
    <!-- /.navbar-collapse -->
</nav>