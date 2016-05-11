<?php
    /*
    Template Name: Actividades
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

			<div class="container relative academias">
				<?php if( get_field('_subtitulo_bloque_1') ): ?>
                    <?
                        $subtitle1 = get_field('_subtitulo_bloque_1');
                        $text1 = get_field('_texto_introduccion_1');
                    ?>
                    <h1 class="upper"><?php echo $subtitle1; ?></h1>
					<br>
					<h2 class="t-lato">
						<?php echo $text1; ?>
					</h2>
					<br>
                <?php endif; wp_reset_postdata(); ?>			

				<?php if( get_field('_subtitulo_bloque_1') ): ?>
                    <?
                        $subtitle1 = get_field('_subtitulo_bloque_1');
                        $text1 = get_field('_texto_intro_1');
                    ?>
                    <h1 class="upper"><?php echo $subtitle1; ?></h1>
					<br>
					<h2 class="t-lato"><?php echo $text1; ?></h2>
					<br>
                <?php endif; wp_reset_postdata(); ?>	

                <div id="cont-talleres" class="grid clearfix main-act">
                	<nav id="academia-categorias" class="relative col-lg-12" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#academia-albumes" aria-expanded="false">Categorias</button>
						</div>
						<div class="collapse navbar-collapse" id="academia-albumes">
							<ul class="nav nav-pills">
						  		<li role="presentation" class="filter" data-filter="all">TODAS</li>
							  	<? echo 
							  		get_custom_terms('actividades-extraprogramaticas',$args);
							  	?>
							</ul>
						</div>		
					</nav>
					<br>

					<div class="row cards-talleres">
						<?php
							$actividades = new WP_Query( array(
						        'post_type' => 'actividades',
						        'posts_per_page' => -1
						    ) );
						    if ( $actividades->have_posts() ) : while ( $actividades->have_posts() ) : $actividades->the_post();
						    $terms = get_the_terms( $post->ID, 'actividades-extraprogramaticas' );
						?>
							<div class="col-md-4 col-xs-12 caluga-galeria mix <? foreach($terms as $term){ echo $term->slug.' ';} ?>">
								<div class="block contenedor-album">
									<div class="img-album">
											<div class="gradiente"></div>
										<?php
											if ( has_post_thumbnail() ) {
												echo get_the_post_thumbnail($actividades->ID, 'act', array('class' => 'img-responsive'));
											} else {
												echo '<img src="'.get_bloginfo('template_directory').'/img/gen450.png" class="img-responsive" />';
											}
										?>
									</div>

									<div class="desc-galeria">
										<h4><? the_title();?></h4>
										<?php if( get_field('_profesor_a_cargo') ): ?>
				                            <h5><?php the_field('_profesor_a_cargo'); ?></h5>
				                        <?php endif; ?>
				                        <a class="center upper btn-default btn-block btn-lg t-exo" href="<? the_permalink();?>">Ver Academia</a>
									</div>
								</div>
							</div>
						<? endwhile; endif; wp_reset_postdata(); ?>
					</div>
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