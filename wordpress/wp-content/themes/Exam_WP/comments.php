<div class="my-24">
<?php     $comments = get_comments(array('post_id' => get_the_ID(), 'status' => 'approve')); ?>
  <h2 class="text-h2 font-mulish text-blue">Comments (<span id="comment-counter"><?php echo esc_html(count($comments)); ?></span>)</h2>
  <div class="flex flex-col gap-5 my-5">
    <?php
    if ($comments) {
      foreach ($comments as $comment) {
        ?>
        <div class="p-5 bg-[#F9F9F9]">
          <h5 class="text-h4 font-mulish text-blue"><?php echo esc_html(get_comment_author($comment->comment_ID)); ?></h5>
          <p class="text-gray text-p26 font-mulish my-5"><?php echo esc_html(get_comment_text($comment->comment_ID)); ?></p>
          <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>" class="flex flex-row gap-2"><img src="<?=get_template_directory_uri()?>/assets/img/svg/Path.svg" /> Reply</a>
          <?php
          // Get comment children
          $comment_children = get_comments(array(
            'post_id' => get_the_ID(),
            'status' => 'approve',
            'parent' => $comment->comment_ID,
          ));

          if ($comment_children) {
            foreach ($comment_children as $child) {
              ?>
              <div class="ml-10 p-5 bg-[#F9F9F9]">
                <h5 class="text-h4 font-mulish text-blue"><?php echo esc_html(get_comment_author($child->comment_ID)); ?></h5>
                <p class="text-gray text-p26 font-mulish my-5"><?php echo esc_html(get_comment_text($child->comment_ID)); ?></p>
                <a href="<?php echo esc_url(get_comment_link($child->comment_ID)); ?>" class="flex flex-row gap-2"><img src="<?=get_template_directory_uri()?>/assets/img/svg/Path.svg" /> Reply</a>
              </div>
              <?php
            }
          }
          ?>
        </div>
        <?php
      }
    }
    ?>
  </div>

  <div class="my-24">
    <h2 class="text-h2 font-mulish text-blue">Leave a reply</h2>
    <div class="flex my-5">
      <form class="w-full" action="<?php echo esc_url(site_url('wp-comments-post.php')); ?>" method="post" id="commentform">
        <?php
        if (is_user_logged_in()) {
          $current_user = wp_get_current_user();
          ?>
          <input type="text" placeholder="Full name" name="author" value="<?php echo esc_attr($current_user->display_name); ?>" class="text-gray w-full border-b-2 border-[#E4E4E4] p-2 my-4" readonly>
          <input type="hidden" name="email" value="<?php echo esc_attr($current_user->user_email); ?>">
        <?php
        } else {
          ?>
          <input type="text" placeholder="Full name" name="author" class="text-gray w-full border-b-2 border-[#E4E4E4] p-2 my-4">
          <input type="email" placeholder="Email" name="email" class="text-gray w-full border-b-2 border-[#E4E4E4] p-2 my-4">
        <?php
        }
        ?>
        <textarea placeholder="Message" name="comment" class="text-gray min-h-[180px] w-full border-b-2 border-[#E4E4E4] p-2 my-4"></textarea>
        <button class="border-none text-blue text-p26 font-semibold" name="submit" type="submit" id="submit">Submit</button>
        <?php comment_id_fields(); ?>
        <?php do_action('comment_form', get_the_ID()); ?>
      </form>
    </div>
  </div>
</div>