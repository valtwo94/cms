<?php
if (isset($_GET['update'])) {
    $post_id = $_GET['update'];
}

?>

<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="./index.php"><i class="fa fa-fw fa-dashboard"></i> 대시보드</a>
        </li>
        <li>
            <a href="./categories.php"><i class="fa fa-fw fa-file"></i> 카테고리</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown">
                <i class="fa fa-fw fa-pencil"></i> 글 <i class="fa fa-fw fa-caret-down"></i>
            </a>
            <ul id="posts_dropdown" class="collapse">
                <li>
                    <a href="./posts.php?source=all_post">전체보기</a>
                </li>
                <li>
                    <a href="./posts.php?source=add_post">글 추가</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="./comments.php?source=all_comments"><i class="fa fa-fw fa-comment"></i> 댓글</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#users_dropdown">
                <i class="fa fa-fw fa-users"></i> 회원관리 <i class="fa fa-fw fa-caret-down"></i>
            </a>
            <ul id="users_dropdown" class="collapse">
                <li>
                    <a href="./users.php?source=view_all_users">전체보기</a>
                </li>
                <li>
                    <a href="./users.php?source=add_user">회원추가</a>
                </li>
                <li>
                    <a href="./users.php?source=edit_user">회원수정</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="index-rtl.html"><i class="fa fa-fw fa-user"></i> 프로필</a>
        </li>
    </ul>
</div>