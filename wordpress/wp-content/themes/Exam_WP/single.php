<?php get_header(); ?>

<section class="grid mt-28">
  <div class="w-11/12 mx-auto">
    <h1 class="text-h1 font-mulish text-blue">Blog.</h1>
    <div class="grid grid-cols-12 mt-12">
      <?php get_sidebar(); ?>
      <div class="col-span-12 md:col-span-8">
        <?php
        if (have_posts()) {
          while (have_posts()) {
            the_post();
            $categories = get_the_category();
            $post_date = get_the_date('F j, Y');
            $post_content = get_the_content();
            $comment_count = get_comments_number();
            ?>
            <img class="md:w-[65rem] md:h-[31rem] h-[15rem] object-cover" src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
            <div class="text-blue font-mulish text-h4 mt-5">
              <?php if ($categories) { ?>
                <span class="category"><?php echo esc_html($categories[0]->name); ?></span>
              <?php } ?>
              -
              <span class="article-date"><?php echo esc_html($post_date); ?></span>
            </div>

            <div class="my-16" id="article_content">
              <?php echo $post_content; ?>
            </div>

            <div class="flex flex-row flex-wrap gap-5 my-18">
              <?php
              $post_tags = get_the_tags();
              if ($post_tags) {
                foreach ($post_tags as $tag) {
                  echo '<a href="' . get_tag_link($tag->term_id) . '" class="text-gray text-p26 font-semibold font-mulish bg-[#F8F8F8] px-2 py-1">' . esc_html($tag->name) . '</a>';
                }
              }
              ?>
            </div>

            <?php get_template_part('comments'); ?>
          <?php
          }
        } else {
          echo 'Aucun article trouvé.';
        }
        ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>