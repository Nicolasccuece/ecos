<?php
/*
Template Name: Noticias
*/
?>

<?php get_header(); ?>

<div id="main-area" class="fullwidth">
	<div id="main-top-shadow">
		<div class="container">
			<?php get_template_part('includes/breadcrumbs'); ?>
			<div id="content-area">
				<div id="content-top" class="clearfix">
					
					<?php 
							$args = array(
								'category_name' => 'Noticias', // Busca todos os posts que foram marcados com a categoria notícias
								'orderby' => 'date', // ordena pela data
								'order' => 'DESC', // de forma descendente
							); 

							$wp_query = new WP_Query( $args );

							if ( $wp_query->have_posts() ) :
							while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
								?>
								<div class="pag_noticia_post">
									<?php the_post_thumbnail(array(120,120)); // traz a imagem destacada do post. O Array é o tamanho da imagem ?>
									<small><?php the_time('j/ F/ Y') ?> por <?php the_author() ?></small>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php // the_permalink() = link do post the_title() = título do post ?>
									<p><?php the_excerpt(); // resumo do post ?></p>
								</div>
							<?php
							endwhile;
							endif;
							?>

				</div> <!-- end #content-top -->
			</div> <!-- end #content-area -->
		</div> <!-- end .container -->
	</div> <!-- end #main-top-shadow -->
</div> <!-- end #main-area -->
		
<?php get_footer(); ?>