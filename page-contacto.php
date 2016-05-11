<?php
    /*
    Template Name: Contacto
    */
?>

<?php get_header(); ?>
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
					<div class="col-md-7 col-xs-12">
						<h2>Contáctanos</h2>
						<div class="form-inline row">
							<? the_content();?>
						</div>
					</div>

					<div class="col-md-5 col-xs-12">
						<h2>Ubicación</h2>
						<div class="ubicacion">
							<div class="row">
								<?php if( get_field('_ingresar_mapa') ): ?>
									<?php the_field('_ingresar_mapa'); ?>
		                        <?php endif; ?>
		                    </div>
							<?php if( get_field('_datos_bajo_mapa') ): ?>
								<?php the_field('_datos_bajo_mapa'); ?>
	                        <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; else: ?>
            <div class="col-xs-12">
                <p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
            </div>
        <?php endif; ?>
	</div>

<?php get_footer(); ?>