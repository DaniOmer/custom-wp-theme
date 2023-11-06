<?php get_header(); ?>

<main id="site-content">
	<div class="container single-page">
		<div class="row">
			<div class="col-md-6 offset-md-3">
                <h1>Resultat de recherche pour : <?= get_search_query() ?></h1>
				<?php
					$article_count = 0;
					$page_count = 0;
				?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if ( get_post_type() == 'post' ) : // Vérifie si c'est un article ?>
						<?php $article_count++; ?>
					<?php elseif ( get_post_type() == 'page' ) : // Vérifie si c'est une page ?>
						<?php $page_count++; ?>
					<?php endif; ?>
				<?php endwhile; ?>
                
                <h2>Total des pages trouvées : <?php echo $page_count; ?></h2>
				<?php if ( $page_count > 0 ) : ?>
					<ul>
						<?php rewind_posts(); // Réinitialise la boucle ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php if ( get_post_type() == 'page' ) : // Vérifie si c'est une page ?>
								<li>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p><?php the_excerpt(); ?></p>
								</li>
							<?php endif; ?>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>


                <h2>Total des articles trouvés : <?php echo $article_count; ?></h2>
				<?php if ( $article_count > 0 ) : ?>		
					<ul>
						<?php rewind_posts(); // Réinitialise la boucle ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php if ( get_post_type() == 'post' ) : // Vérifie si c'est un article ?>
								<li>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p><?php the_excerpt(); ?></p>
								</li>
							<?php endif; ?>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
