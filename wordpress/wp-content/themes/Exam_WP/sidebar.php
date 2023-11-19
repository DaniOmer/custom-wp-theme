<aside class="col-span-12 lg:col-span-4 lg:block">
  <div>
    <p class="text-p26 font-mulish text-blue">Search</p>
    <form action="/" method="get" class="relative grid w-full lg:w-2/4 bg-transparent">
      <?php get_search_form(); ?>

    </form>
  </div>

  <div class="my-24">
    <p class="text-p26 font-mulish text-blue">Recent posts</p>
    <div class="flex flex-col gap-y-6 overflow-y-auto my-12">
      <?php
      $recent_posts = wp_get_recent_posts(array('numberposts' => 3)); // Récupère les 3 derniers posts
      foreach ($recent_posts as $recent) {
        echo '<div class="flex flex-row">';
        echo '<img src="' . get_the_post_thumbnail_url($recent['ID']) . '" class="h-[70px] w-[75px] object-cover" alt="Image de l\'article">';
        echo '<div class="ml-4 flex flex-col justify-between w-auto">';
        echo '<a href="' . get_permalink($recent['ID']) . '" class="text-p26 font-mulish text-gray">' . $recent['post_title'] . '</a>';
        echo '<p class="text-p20 font-mulish text-gray">' . get_the_date('', $recent['ID']) . '</p>';
        echo '</div>';
        echo '</div>';
      }
      ?>
    </div>
  </div>

  <div class="my-24">
    <p class="text-p26 font-mulish text-blue">Archives</p>
    <ul class="list-pink-decoration relative">
      <?php
      $archives = wp_get_archives(array('type' => 'monthly', 'limit' => 3, 'echo' => false)); // Récupère les 3 dernières archives mensuelles
      echo $archives;
      ?>
    </ul>
  </div>

  <div class="my-24">
    <p class="text-p26 font-mulish text-blue">Categories</p>
    <ul class="list-pink-decoration relative">
      <?php
      $categories = get_categories(); // Récupère toutes les catégories
      foreach ($categories as $category) {
        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
      }
      ?>
    </ul>
  </div>

  <div class="my-24">
    <p class="text-p26 font-mulish text-blue">Tags</p>
    <div class="flex flex-row flex-wrap gap-5">
      <?php
      $tags = get_tags(); // Récupère tous les tags
      foreach ($tags as $tag) {
        echo '<a href="' . get_tag_link($tag->term_id) . '" class="text-gray text-p26 font-semibold font-mulish bg-[#F8F8F8] px-2 py-1">' . $tag->name . '</a>';
      }
      ?>
    </div>
  </div>
</aside>
