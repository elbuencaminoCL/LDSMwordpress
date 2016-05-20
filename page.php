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

			<div class="row">
					<div class="container relative">
						<div id="desc-departamento" class="clearfix row">
							<?php
								if ( has_post_thumbnail() ) {
									echo '<div class="img-responsive">';
								    	echo get_the_post_thumbnail($post->ID, 'generica', array('class' => 'img-responsive'));
								    echo '</div>';
								}
							?>
							<? the_content();?>
						</div>

						<? include_once('modulos/descargas.php');?>
					</div>
				</div>
		<?php endwhile; else: ?>
            <div class="col-xs-12">
                <p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
            </div>
        <?php endif; ?>
	</div>
	<!--/main-->

<?php get_footer(); ?>