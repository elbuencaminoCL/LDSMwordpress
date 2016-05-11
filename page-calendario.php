<?php
	/*
	Template Name: Calendario
	*/
?>

<?php get_header(); ?>
	<!--main-->
	<div id="main" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="foto-encabezado" class="absolute">
				<?php 
					$image = get_field('_cabecera');
					$size = 'encabezado'; 
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
	    	</div>
			<h2 class="titulo-seccion center relative"><span><? the_title();?></span></h2>

			<div class="container relative">
				<div class="row">
					<div class="alert alert-warning alert-dismissible burbuja-alerta" role="alert">
						<? echo do_shortcode('[contact-form-7 id="986" title="Suscribirse"]');?>
						<div class="col-sm-1 col-xs-12">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><img src="<? bloginfo('template_directory');?>/img/iconos/cerrar.svg"></span></button>
						</div>
					</div>

					<div class="clearfix">
						<div class="col-sm-6 col-xs-12">
							<?php if( have_rows('_descargar') ): ?>
								<?php while( have_rows('_descargar') ): the_row(); 
				                    $titulo = get_sub_field('_titulo_archivo');
				                    $link = get_sub_field('_enlace_archivo');
				                ?>
				                	<a type="button" class="btn btn-primary btn-lg btn-block" href="<?php echo $link; ?>" target="_blank">Descargar Calendario</a>
				                <?php endwhile;?>
				            <?php endif; wp_reset_postdata(); ?>
							
							<div class="span12">
					            <!--CAL-->
					        </div>

					        <div class="clearfix">
								<a href="#" class="block clearfix evento">
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-1 col-xs-1">
												<div class="row">
													<img class="img-responsive" src="http://placehold.it/40x40">
												</div>
											</div>
											<div class="col-sm-11 col-xs-11 event-desc">
												<h4>12:00 hrs.</h4>
												<h5>Titulo evento</h5>
												<p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>
												<div class="clearfix">
													<img src="http://placehold.it/20x20"> Lugar evento
												</div>
											</div>
										</div>
									</div>
								</a>

								<a href="#" class="block clearfix evento">

									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-1 col-xs-1">
												<div class="row">
													<img class="img-responsive" src="http://placehold.it/40x40">
												</div>
											</div>
											<div class="col-sm-11 col-xs-11 event-desc">
												<h4>12:00 hrs.</h4>
												<h5>Titulo evento</h5>
												<p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>
												<div class="clearfix">
													<img src="http://placehold.it/20x20"> Lugar evento
												</div>
											</div>
										</div>
									</div>

								</a>

								<a href="#" class="block clearfix evento">

									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-1 col-xs-1">
												<div class="row">
													<img class="img-responsive" src="http://placehold.it/40x40">
												</div>
											</div>
											<div class="col-sm-11 col-xs-11 event-desc">
												<h4>12:00 hrs.</h4>
												<h5>Titulo evento</h5>
												<p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>
												<div class="clearfix">
													<img src="http://placehold.it/20x20"> Lugar evento
												</div>
											</div>
										</div>
									</div>

								</a>

								<a href="#" class="block clearfix evento">

									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-1 col-xs-1">
												<div class="row">
													<img class="img-responsive" src="http://placehold.it/40x40">
												</div>
											</div>
											<div class="col-sm-11 col-xs-11 event-desc">
												<h4>12:00 hrs.</h4>
												<h5>Titulo evento</h5>
												<p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>
												<div class="clearfix">
													<img src="http://placehold.it/20x20"> Lugar evento
												</div>
											</div>
										</div>
									</div>

								</a>																

					        </div>

						</div>

						<div id="calendario" class="col-sm-6 col-xs-12">
							<h3>Calendario</h3>
							<a href="#" class="block clearfix evento">

								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-3 col-xs-3 fecha">
											<div>
												<h4>MAR</h4>
												<h2>20</h2>
											</div>
										</div>
										<div class="col-sm-9 col-xs-9 event-desc">
											<h4>Titulo evento</h4>
											<p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>
											<div class="col-sm-8">
												<div class="row">
													<img src="http://placehold.it/20x20"> Lugar evento
												</div>
											</div>
											<div class="col-sm-4">
												<div class="row">
													<img src="http://placehold.it/20x20"> 12:00 Hrs.
												</div>
											</div>
										</div>
									</div>
								</div>

							</a>

							<a href="#" class="block clearfix evento">

								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-3 col-xs-3 fecha">
											<div>
												<h4>MAR</h4>
												<h2>20</h2>
											</div>
										</div>
										<div class="col-sm-9 col-xs-9 event-desc">
											<h4>Titulo evento</h4>
											<p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>
											<div class="col-sm-8">
												<div class="row">
													<img src="http://placehold.it/20x20"> Lugar evento
												</div>
											</div>
											<div class="col-sm-4">
												<div class="row">
													<img src="http://placehold.it/20x20"> 12:00 Hrs.
												</div>
											</div>
										</div>
									</div>
								</div>

							</a>

							<a href="#" class="block clearfix evento">

								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-3 col-xs-3 fecha">
											<div>
												<h4>MAR</h4>
												<h2>20</h2>
											</div>
										</div>
										<div class="col-sm-9 col-xs-9 event-desc">
											<h4>Titulo evento</h4>
											<p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>
											<div class="col-sm-8">
												<div class="row">
													<img src="http://placehold.it/20x20"> Lugar evento
												</div>
											</div>
											<div class="col-sm-4">
												<div class="row">
													<img src="http://placehold.it/20x20"> 12:00 Hrs.
												</div>
											</div>
										</div>
									</div>
								</div>

							</a>

							<a href="#" class="block clearfix evento">

								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-3 col-xs-3 fecha">
											<div>
												<h4>MAR</h4>
												<h2>20</h2>
											</div>
										</div>
										<div class="col-sm-9 col-xs-9 event-desc">
											<h4>Titulo evento</h4>
											<p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>
											<div class="col-sm-8">
												<div class="row">
													<img src="http://placehold.it/20x20"> Lugar evento
												</div>
											</div>
											<div class="col-sm-4">
												<div class="row">
													<img src="http://placehold.it/20x20"> 12:00 Hrs.
												</div>
											</div>
										</div>
									</div>
								</div>

							</a>

							<nav>
								<ul class="pager">
									<li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
									<li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
								</ul>
							</nav>

						</div>

					</div>

				</div><!-- ROW -->					
			</div>
		<?php endwhile; else: ?>
            <div class="col-xs-12">
                <p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
            </div>
        <?php endif; ?>
	</div><!--/main-->
<?php get_footer(); ?>