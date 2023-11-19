function navBarEvent(){
    let navOpen = document.getElementById('nav-open');
    let headerContent = document.getElementById('header-content');
    let navClose = document.getElementById('nav-close');
    let header = document.querySelector('header');
    let navLogoWhite = document.getElementById('esgi-logo-light-nav');
    let navLogoDark = document.getElementById('esgi-logo-dark-nav');
    navOpen.addEventListener('click', function() {
      headerContent.classList.toggle('hidden'); // Afficher le contenu du header
      navOpen.classList.toggle('hidden'); // Cacher l'icône d'ouverture du menu
      navClose.classList.toggle('hidden'); // Afficher l'icône de fermeture du menu
      header.classList.toggle('bg-blue'); // Changer la couleur du header
      navLogoWhite.classList.toggle('hidden');
      navLogoDark.classList.toggle('hidden');
    });

    navClose.addEventListener('click', function() {
      headerContent.classList.toggle('hidden'); // Cacher le contenu du header
      navOpen.classList.toggle('hidden'); // Afficher l'icône d'ouverture du menu
      navClose.classList.toggle('hidden'); // Cacher l'icône de fermeture du menu
      header.classList.toggle('bg-blue'); // Changer la couleur du header
      navLogoWhite.classList.toggle('hidden')
      navLogoDark.classList.toggle('hidden');
    });
}

document.addEventListener('DOMContentLoaded', function() {
        navBarEvent();
});