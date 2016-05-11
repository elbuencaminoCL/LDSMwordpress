<?php get_header(); ?>	
	<div id="main" class="clearfix">
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
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="container detalle-academia">
				<div class="row">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<?php if( get_field('_profesor_a_cargo') ): ?>
						        <h2>Profesor: <?php the_field('_profesor_a_cargo'); ?></h2>
						    <?php endif; ?>
						    <? the_content();?>
							<? 
								if(has_post_thumbnail()){
									echo '<div class="col-md-6 col-xs-12">';
				                    	echo get_the_post_thumbnail($post->ID, 'taller', array('class' => 'img-responsive'));
				                    echo '</div>';
				                } else {
				                	echo '<div class="col-md-6 col-xs-12">';
				                   	 	echo '<img src="'.get_bloginfo('template_directory').'/img/gen870.png" class="img-responsive" alt="Colegio Santa María de Lo Cañas" />';
				                	echo '</div>';
				                }
				            ?>
						</div>
					</div>

					<div class="clearfix">
						<div class="panel-group">
							<div class="panel-academia">
								<?php if( have_rows('_horarios_talleres') ): ?>
									<?php while( have_rows('_horarios_talleres') ): the_row(); 
										$num = get_sub_field('_numero_panel');
										$curso = get_sub_field('_curso_act');
										$dia = get_sub_field('_dia_act');
										$horario = get_sub_field('_horario_act');
									?>
									<div class="panel-heading" role="tab" id="panel-academia-header-<? echo $num ;?>"> 
										<h3> 
											<a class="btn-block" role="button" data-toggle="collapse" href="#panel-academia-<? echo $num ;?>" aria-expanded="false" aria-controls="panel-academia-<? echo $num ;?>"> 
												<?php echo $curso; ?>
												<span class="toggle"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/iconos/toggle.svg"></span>
											</a> 
										</h3> 
									</div> 
									<div id="panel-academia-<? echo $num ;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="panel-academia-header-<? echo $num ;?>" aria-expanded="false">
										<p><img src="<?php bloginfo('template_directory'); ?>/img/iconos/fechita.svg"> <?php echo $dia; ?> <img src="img/iconos/horario.svg"> <?php echo $horario; ?> <a class="btn btn-default" role="button" data-toggle="collapse" href="#ficha-incripcion-<? echo $num ;?>" aria-expanded="false" aria-controls="ficha-incripcion-<? echo $num ;?>">Pre Inscripción</a></p>
										<div class="row">
											<div id="ficha-incripcion-<? echo $num ;?>" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">				
												<h2>Ficha de Incripción</h2>
												<div class="col-xs-12"><h3>Datos del alumno postulante</h3></div>
												<div class="form-inline clearfix">
													<? echo do_shortcode('[contact-form-7 id="90" title="Pre Inscripción"]');?>
												</div>
											</div>
										</div>
									</div>
									<?php endwhile; ?>
								<?php endif; ?>

								<div class="col-sm-4 buttonform">
									<div class="row">
										<a class="btn-primary btn-lg btn-block btn-azul" href="<?php bloginfo('template_directory'); ?>/academias/"><span class="glyphicon glyphicon-menu-left"></span>Volver a Academias</a>
									</div>
								</div>
							</div>
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