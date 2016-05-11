<?php get_header(); ?>

	<!--main-->
	<div id="main" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="titulo-1">
				<h1><? the_title();?></h1>
				<div class="pic-shadow"></div>
				<?php 
					$image = get_field('_cabecera');
					$size = 'encabezado'; 
					if( $image ) {
						echo '<div class="img-absolute">'.wp_get_attachment_image( $image, $size ).'</div>';
					}
				?>
			</div>

			<div class="container departamento">
				<div class="row">
					<?php
						global $post;
						if ( has_excerpt( $post->ID ) ) {
							$excerpt= apply_filters('the_excerpt', get_post_field('post_excerpt', $post->ID));
						    echo '<div class="clearfix">';
								echo '<h2 class="intro-3">'.$excerpt.'</h3>';
							echo '</div>';
						} 
					?>
					<div class="clearfix descripcion">
						<?php
							if ( has_post_thumbnail() ) {
								echo '<div class="col-sm-6 col-xs-12">';
								    echo get_the_post_thumbnail($post->ID, 'generica', array('class' => 'img-responsive'));
								echo '</div>';
							}
						?>
						<? the_content();?>
					</div>
				</div>		
				<? include_once('modulos/descargas.php');?>			
			</div>
		<?php endwhile; else: ?>
            <div class="col-xs-12">
                <p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
            </div>
        <?php endif; ?>
	</div>
	<!--/main-->

<?php get_footer(); ?>