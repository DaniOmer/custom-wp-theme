<?php get_header(); ?>
    
    <section class="flex justify-center items-center h-screen bg-blue">
      <div class="w-4/5">
        <h1 class="text-white font-mulish text-h1">404</h1>
        <p class="text-white font-mulish text-p26">
          The page you were looking for couldn't be found.<br/> Maybe try a search?
        </p>

     <form action="/" method="get" class="relative grid w-full md:w-2/4 bg-blue">
      <?php get_search_form(); ?>

    </form>
    
      </div>
    </section>
<?php get_footer(); ?>
    