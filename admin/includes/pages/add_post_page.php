<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    글 추가
                </h1>
                <?php include './db/admin_create_post.php' ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">글 제목</label>
                        <input type="text" class="form-control" name="post_title">
                    </div>
                    <div class="form-group">
                        <label for="post_category">카테고리</label>
                        <br>
                        <select name="post_category">
                            <?php include './db/admin_update_options.php'; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="post_author">사용자</label>
                        <br>
                        <select name="post_author" id="">
                            <option value="성현제">성현제</option>
                            <option value="아무개">아무개</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="post_status">상태</label>
                        <br>
                        <select name="post_status" id="">
                            <option value="draft">Post Status</option>
                            <option value="published">Published</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="post_image">이미지</label>
                        <input type="file" name="post_image">
                    </div>


                    <div class="form-group">
                        <label for="post_content">내용</label>
                        <textarea class="form-control " name="post_content" id="" cols="30" rows="10"></textarea>

                    </div>

                    <div class="form-group">
                        <label for="post_tags">태그</label>
                        <input type="text" class="form-control" name="post_tags">
                    </div>



                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="create_post" value="추가">
                    </div>

                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->