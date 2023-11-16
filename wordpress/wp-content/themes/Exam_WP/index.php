<?php get_header(); ?>
<section id="about-us" class="grid mt-28">
  
        <div class="grid w-full p-5 md:p-0 md:w-[89.5%] md:justify-self-end">
          <h1 class="text-h1 font-mulish text-blue">A really professional structure<br class="hidden md:block"/> for all your events!</h1>
          <div class = "md:w-11/12 w-full flex flex-col md:justify-self-end mt-20">
            <img src="<?=get_template_directory_uri()?>/assets/img/png/1.png" alt="Smartphone prenant une photo">
            <article class="mt-10 w-full md:w-6/12">
              <h2 class="text-h2 font-mulish text-blue">About Us</h2>
              <p class="text-p26 font-mulish text-gray mt-3">Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution. </p>
            </article>
          </div>
        </div>  
      </section>

      <section id="our-services" class="w-full grid grid-cols-12 my-28">
        <div class="col-span-4 ">
          <img class="object-cover h-full hidden md:block" src="<?=get_template_directory_uri()?>/assets/img/png/2.png" alt="Homme prenant une photo">
        </div>
        <div class="col-span-12 md:col-span-8 flex justify-center items-center">
          <div class ="w-full p-5 md:p-0 md:w-9/12 flex flex-col gap-10">
            <article>
              <h3 class="text-h2 font-mulish text-blue">Who are we?</h3>
              <p class="text-p26 text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu convallis elit, at convallis magna.</p>
            </article>
            <article>
              <h3 class="text-h2 font-mulish text-blue">Our vision</h3>
              <p class="text-p26 text-gray"> Nullam faucibus interdum massa. Duis eget leo mattis, pulvinar nisi et, consequat lectus. Suspendisse commodo magna orci, id luctus risus porta pharetra. Fusce vehicula aliquet urna non ultricies.</p>
            </article>
            <article>
              <h3 class="text-h2 font-mulish text-blue">Our mission</h3>
              <p class="text-p26 text-gray">Vivamus et viverra neque, ut pharetra ipsum. Aliquam eget consequat libero, quis cursus tortor. Aliquam suscipit eros sit amet velit malesuada dapibus. Fusce in vehicula tellus. Donec quis lorem ut magna tincidunt egestas. </p>
            </article>
          </div>
        </div>
      </section>
        
      <section class="w-full grid gap-y-9">
          <h2 class="text-h2 font-mulish w-11/12 mx-auto text-blue">Our Services</h2>
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

      <section class="my-28 gap-y-5 flex-col w-11/12 flex mx-auto">
        <h2 class="text-h2 font-mulish text-blue">Our partners</h2>
        <div class="flex flex-row gap-12 overflow-auto scrollbar-hide" >
          <img src="<?=get_template_directory_uri()?>/assets/img/svg/partner-1.svg" alt="Logo de l'esgi">
          <img src="<?=get_template_directory_uri()?>/assets/img/svg/partner-2.svg" alt="Logo de l'esgi">
          <img src="<?=get_template_directory_uri()?>/assets/img/svg/partner-3.svg" alt="Logo de l'esgi">
          <img src="<?=get_template_directory_uri()?>/assets/img/svg/partner-4.svg" alt="Logo de l'esgi">
          <img src="<?=get_template_directory_uri()?>/assets/img/svg/partner-5.svg" alt="Logo de l'esgi">
          <img src="<?=get_template_directory_uri()?>/assets/img/svg/partner-6.svg" alt="Logo de l'esgi">
        </div>
      </section>
<?php get_footer(); ?>