<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header()
?>
<main id="site-content">
	<div class="container">
        <div class="row">
			<div class="col-md-6 offset-md-3">
                <h2><?php _e( 'Page introuvable !' ); ?></h2>
                <p><?php _e( 'Essayez de faire une recherche' ); ?></p>

                <?php get_search_form(); ?>
            </div>
        </div>
	</div>
</main>

<?php get_footer() ?>