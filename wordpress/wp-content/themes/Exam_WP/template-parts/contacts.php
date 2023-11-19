 
<?php /* Template Name: Contacts */
get_header();
?>

<section class="grid w-full my-28">
      <div class="w-11/12 mx-auto">
        <h1 class="text-h1 font-mulish text-blue">Contact.</h1>
        <p class="text-p26 font-mulish text-gray mt-3">A desire for a big big party or a very select congress? Contact us. </p>
      </div>
      <div class="w-10/12 flex flex-col justify-self-center md:justify-self-end">
        <div class="my-24 flex flex-row gap-12 md:gap-24 md:justify-end md:mx-24">
          <article>
            <h3 class="text-h3 font-normal font-mulish text-blue">Location</h3>
            <p class="text-p26 font-mulish text-gray">242 Rue du Faubourg Saint-Antoine</p>
            <p class="text-p26 font-mulish text-gray">75020 Paris FRANCE</p>
          </article>
          <article>
            <h3 class="text-h3 font-normal font-mulish text-blue">Manager</h3>
            <p class="text-p26 font-mulish text-gray">+33 1 53 31 25 23</p>
            <p class="text-p26 font-mulish text-gray">info@company.com</p>
          </article>
          <article>
            <h3 class="text-h3 font-normal font-mulish text-blue">CEO</h3>
            <p class="text-p26 font-mulish text-gray">+33 1 53 31 25 25</p>
            <p class="text-p26 font-mulish text-gray">ceo@company.com</p>
          </article>
        </div>
         <img src="<?=get_template_directory_uri()?>/assets/img/png/10.png" alt="Femme avec des lunettes">
      </div>
     </section>

     <section class="p-5 md:p-0">
      <div class="w-full md:w-11/12 mx-auto my-28">
        <h2 class="text-h2 text-blue font-mulish">Write us here</h2>
        <p class="text-p26 text-gray font-mulish">Go! Don't be shy.</p>

        <form class = "w-full md:w-1/2">
          <input type="text" placeholder="Subject" name="subject" class="text-gray w-full border-b-2 border-[#E4E4E4] p-2 my-4">
          <div class = "flex flow-col gap-5">
            <input type="email" name="email" placeholder="Email" class="text-gray w-1/2 border-b-2 border-[#E4E4E4] p-2 my-4">
            <input type="text" name="phone" placeholder="Phone no." class="text-gray w-1/2 border-b-2 border-[#E4E4E4]  p-2 my-4">  
          </div>
          <textarea placeholder="Message" class="text-gray min-h-[180px] w-full border-b-2 border-[#E4E4E4]  p-2 my-4"></textarea>
          <button class="border-none text-blue text-p26 font-semibold">Submit</button>
        </form>
      </div>
     </section>
<?php get_footer();?>