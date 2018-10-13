<?php wp_list_comments(); ?> 
<?php     
    ob_start();
    comment_form($args);
    //form表单添加样式
    echo str_replace('class="comment-form"','class="comment-form your-form-class"',ob_get_clean()); 
    //提交按钮添加样式
    echo str_replace('id="submit"','id="submit" class="comment-btn"',ob_get_clean()); 
<!-- ?>评论框 -->