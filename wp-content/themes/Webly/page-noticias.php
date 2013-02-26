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
					<div id="left-area">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="entry post clearfix">							
							<?php if (get_option('webly_page_thumbnails') == 'on') { ?>
								<?php 
									$thumb = '';
									$width = 200;
									$height = 200;
									$classtext = 'post-thumb';
									$titletext = get_the_title();
									$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext,false,'Entry');
									$thumb = $thumbnail["thumb"];
								?>
								
								<?php if($thumb <> '') { ?>
									<div class="post-thumbnail">
										<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
										<span class="post-overlay"></span>
									</div> 	<!-- end .post-thumbnail -->
								<?php } ?>
							<?php } ?>
							
							<?php the_content(); ?>
							<?php wp_link_pages(array('before' => '<p><strong>'.esc_html__('Pages','Webly').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							<?php edit_post_link(esc_html__('Edit this page','Webly')); ?>
						
						</div> <!-- end .entry -->
												
						<?php if (get_option('webly_show_pagescomments') == 'on') comments_template('', true); ?>
					<?php endwhile; endif; ?>
					</div> 	<!-- end #left-area -->
					
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
								<div class="noticia_post">
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