<?php /* Template Name: Services */
get_header();
?>

  <section class="w-full grid gap-y-9 my-28">
        <h1 class="text-h1 font-mulish w-11/12 mx-auto text-blue">Our Services</h1>
        <div class="grid grid-cols-12 w-full">
          <div class="col-span-6 flex flex-row-reverse">
            <img class="object-cover w-2/4" src="<?=get_template_directory_uri()?>/assets/img/png/11.png" alt="Chaise dans un endroit sombre">
            <img class="object-cover w-2/4" src="<?=get_template_directory_uri()?>/assets/img/png/12.png" alt="Femme avec des lunettes">
          </div>
          <div class = "col-span-3 flex justify-center items-center">
            <h3 class="text-h3 relative after:absolute after:bg-default-grad after:w-full after:h-1 after:bottom-0 after:left-0 font-mulish text-blue">Private Parties</h3>
          </div>
          <div class = "col-span-3">
            <img class="object-cover" src="<?=get_template_directory_uri()?>/assets/img/png/3.png" alt="Les daft punk en concert">
          </div>
        </div>
       
    </section>

    <section class="flex justify-center my-28">
      <div class="w-11/12 mx-auto">
        <h2 class="text-h2 text-blue font-mulish">Corp. Parties</h2>
        <p class="text-p26 font-mulish text-gray w-5/12">Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution. </p>
      </div>
    </section>
    <section class="flex">
      <img src="<?=get_template_directory_uri()?>/assets/img/png/9.png" alt="Femme avec des lunettes">
    </section>

    <?php get_footer();?>