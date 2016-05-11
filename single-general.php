<?php get_header(); ?>
	<!--main-->
	<div id="main" class="clearfix">
		<?
			$news = get_page_by_path('colegio/noticias');
		?>
		<div class="titulo-1">
			<h1><? echo get_the_title($news);?></h1>
			<div class="pic-shadow"></div>
			<?php 
				$image = get_field('_cabecera', $news);
				$size = 'encabezado'; 
				if($image) {
					echo '<div class="img-absolute">'.wp_get_attachment_image( $image, $size ).'</div>';
				}
			?>
		</div>

		<div class="container contenido">
			<div class="row">
				<div class="row">
					<div class="col-md-9 col-xs-12">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<h3><? the_title();?></h3>
							<h5><img src="<?php bloginfo('template_directory'); ?>/img/iconos/fechita.svg"><?php echo get_the_date(); ?></h5>
							<article class="clearfix">
								<?php
									if ( has_post_thumbnail() ) {
										echo get_the_post_thumbnail($post->ID, 'news-det', array('class' => 'img-responsive'));
									}
								?>
								<? the_content();?>
							</article>
							<div class="col-md-3 col-xs-12">
								<div class="row">
									<a class="btn btn-white btn-lg btn-block" href="<?php bloginfo('wpurl'); ?>/colegio/noticias/"><span class="arrow-left"></span>Volver a Noticias</a>
								</div>
							</div>
						<?php endwhile; else: ?>
				            <div class="col-xs-12">
				                <p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
				            </div>
				        <?php endif; ?>
					</div>

					<div class="col-md-3 sidebar">
						<h2>Relacionados</h2>
						<? include_once('modulos/related.php');?>

						<div class="clearfix boletin">
							<? echo do_shortcode('[contact-form-7 id="633" title="Suscribirse Side"]');?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>