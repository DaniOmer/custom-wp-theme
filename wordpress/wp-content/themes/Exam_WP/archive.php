<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

<section class="grid mt-28">
  <div class="w-11/12 mx-auto">
    <h1 class="text-h1 font-mulish text-blue">Blog.</h1>
    <div class="grid grid-cols-12 mt-12">
      <?php get_sidebar(); ?>
      <div class="col-span-12 lg:col-span-8 grid">
        <div class="grid grid-cols-6 gap-5">
          <?php
          if (have_posts()) {

            while (have_posts()) {
              the_post();
              ?>
              <div class="col-span-6 lg:col-span-3">
                <div class="w-[500px] max-w-full h-[330px] relative">
                  <p class="absolute text-white text-xl font-mulish font-bold top-2 left-2"><?php the_category(', '); ?></p>
                  <?php
                  if (has_post_thumbnail()) 
                    the_post_thumbnail('medium', array('class' => 'object-cover w-full h-full'));
                  else
                    echo '<img src="' . get_template_directory_uri() . '/assets/img/jpg/default-post.jpg" class="object-cover w-full h-full">';
                  ?>
                </div>
                <div>
                  <h3 class="text-h3 font-mulish mt-5 text-blue"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <p class="text-p26 text-gray mt-5"><?php the_excerpt(); ?></p>
                </div>
              </div>
              <?php
            }
          } else {
            echo 'Aucun article trouvé.';
          }
          ?>
        </div>

        <?php

        $big = 999999999; // need an unlikely integer
        $pages = paginate_links( array(
            'base'      => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
            'format'    => '?paged=%#%',
            'current'   => max( 1, get_query_var('paged') ),
            'total'     => $wp_query->max_num_pages,
            'type'      => 'array',
            'prev_next' => true,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;',
        ) );

        if( is_array( $pages ) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
            echo '<ul class="flex flex-row self-end my-24">';
            foreach ( $pages as $page ) {
                $class = ( strpos( $page, 'current' ) !== false ) ? 'bg-blue text-white py-2 px-4' : 'text-blue py-2 transition-all hover:bg-blue hover:text-white px-4';
                
                if( strpos( $page, 'current' ) !== false ) 
                  echo "<li class='$class'>$page</li>";
                else
                  echo "<a href='$page'><li class='$class'>$page</li></a>";

            }
          echo '</ul>';
        }

?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
