<div class="well">
    <form role="form" method="post">
        <div class="form-group">
            <label for="comment_author">작성자</label>
            <input type="text" class="form-control" name="comment_author">
        </div>
        <div class="form-group">
            <label for="comment_email">이메일</label>
            <input type="email" class="form-control" name="comment_email">
        </div>
        <div class="form-group">
            <label for="comment_content">내용</label>
            <textarea class="form-control" rows="3" name="comment_content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="create_comment">추가</button>
    </form>
</div>