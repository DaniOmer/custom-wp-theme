<?php
function Exam_WP_style()
{
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), null);
}

function Exam_WP_script()
{
  wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array(), null);
}

function custom_wpmenu()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'extra-menu' => __('Extra Menu')
    )
  );
}

add_action('init', 'custom_wpmenu');

add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', 'Exam_WP_style');
add_action('wp_enqueue_scripts', 'Exam_WP_script');


function custom_wp_customize_register( $wp_customize ) {
  // Paramètre du logo clair
  $wp_customize->add_setting( 'logo_light', array(
    'default' => get_template_directory_uri()."/assets/img/svg/logo-white.svg", // Mettez ici l'URL par défaut du logo clair
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_light', array(
    'label' => __( 'Logo Light', 'wp_custom' ),
    'section' => 'title_tagline',
    'settings' => 'logo_light',
  ) ) );

  // Paramètre du logo sombre
  $wp_customize->add_setting( 'logo_dark', array(
    'default' => get_template_directory_uri()."/assets/img/svg/logo.svg", // Mettez ici l'URL par défaut du logo clair
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_dark', array(
    'label' => __( 'Logo Dark', 'wp_custom' ),
    'section' => 'title_tagline',
    'settings' => 'logo_dark',
  ) ) );
}
add_action( 'customize_register', 'custom_wp_customize_register' );




// Fonction pour récupérer l'URL du logo clair
function get_logo_light_url() {
  $logo_light_url = get_theme_mod('logo_light', ''); // Utilisez la valeur par défaut '' si le paramètre n'est pas défini
  return $logo_light_url;
}

// Fonction pour récupérer l'URL du logo sombre
function get_logo_dark_url() {
  $logo_dark_url = get_theme_mod('logo_dark', ''); // Utilisez la valeur par défaut '' si le paramètre n'est pas défini
  return $logo_dark_url;
}



