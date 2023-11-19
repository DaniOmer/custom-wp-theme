<?php get_header(); ?>

<section class="flex justify-center my-28 min-h-screen">
  <div class="w-4/5">
    <h1 class="text-blue font-mulish text-h1">Search results for: <span class="relative after:absolute after:bg-default-grad after:w-full after:h-1 after:bottom-0 after:left-0"><?= the_search_query(); ?></span></h1>

    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-9 gap-24 my-24">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-span-1 md:col-span-3 gap-4 flex flex-col">
          <h4 class="text-blue font-mulish text-h3"><?php the_title(); ?></h4>
          <div class="text-blue font-mulish text-h4">
            <span id="category"><?php the_category(', '); ?></span>
            -
            <span id="article_date"><?php the_time('F j, Y'); ?></span>
          </div>
          <p class="font-mulish text-gray text-p26"><?php the_excerpt(); ?></p>
        </div>
      <?php endwhile; else : ?>
        <p>No articles found.</p>
      <?php endif; ?>
    </div>

  </div>
</section>

<?php get_footer(); ?>
