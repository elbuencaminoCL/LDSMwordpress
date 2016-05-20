<?php
    /*
    Template Name: Guías
    */
?>

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
			
			<div class="container guias">
				<div class="row">

					<div class="clearfix depto">
						<h2>
							Guías de Estudio
						</h2>

						<p class="intro-1">
							En esta sección podrás encontrar el material de estudio correspondiente a tu curso y asignatura.
						</p>

						<div class="selector clearfix">
							<form>
								<div class="col-md-4 col-xs-12">
									<h4>Guías disponibles</h4>
								</div>

								<div class="col-md-4 col-xs-12">
									<div class="dropdown">
										<button class="btn btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											Seleccionar un curso para ver las guías
										<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li role="separator" class="divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
								</div>

								<div class="col-md-4 col-xs-12">
									<a class="btn btn-default" href="guias_detalle.html">Buscar Guías</a>
								</div>

							</form>

						</div>

					</div>

				</div>	
				
			</div><!-- CONTAINER -->

		<?php endwhile; else: ?>
            <div class="col-xs-12">
                <p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
            </div>
        <?php endif; ?>
	</div>
	<!--/main-->

<?php get_footer(); ?>