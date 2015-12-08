<?php
$comments_args = array(
    // change the title of send button
    'label_submit'=>'Post Comment',
    // change the title of the reply section
    'title_reply'=>'Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="#">Cancel reply</a></small>',
    // remove "Text or HTML to be displayed after the set of comment fields"
    'comment_notes_after' => '',
    // redefine your own textarea (the comment body)
    'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);

comment_form($comments_args);
?>