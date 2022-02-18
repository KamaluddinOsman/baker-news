<form class="comment-form" method="post" action="#">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <p class="comment-form-comment">
        <label for="comment">التعليق</label>
        <textarea id="comment" name="comment" rows="5" required="required"></textarea>
    </p>
    <div class="row row-20">
        <div class="col-lg-6">
            <label for="name">الاسم: *</label>
            <input name="name" id="name" type="text">
        </div>
        <div class="col-lg-6">
            <label for="comment">البريد الالكتروني: *</label>
            <input name="email" id="email" type="email">
        </div>
    </div>
    <p class="comment-form-submit">
        <input type="submit" class="btn btn-lg btn-color btn-button" value="انشر التعليق">
    </p>
</form>