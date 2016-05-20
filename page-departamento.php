<?php
    /*
    Template Name: Departamento
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

		<div class="container departamanto">
			<div class="row">
				
				<?php
					global $post;
					if ( has_excerpt( $post->ID ) ) {
						$excerpt= apply_filters('the_excerpt', get_post_field('post_excerpt', $post->ID));
					    echo '<div class="clearfix">';
					    	echo '<h2 class="intro-2">';
					    		echo '<img src="'.get_bloginfo('template_directory').'/img/iconos/ico-globo.svg"><br>';
								echo $excerpt;
							echo '</h2>';
						echo '</div>';
					} 
				?>
				
				<div class="clearfix descripcion">
					<?php
						if ( has_post_thumbnail() ) {
							echo '<div class="col-sm-6 col-xs-12">';
						    	echo get_the_post_thumbnail($post->ID, 'generica', array('class' => 'img-responsive'));
							echo '</div>';
							echo '<div class="col-md-6 col-sm-12 col-xs-12">';
								echo get_the_content();
							echo '</div>';
						} else {
							echo get_the_content();
						}
					?>
				</div>
				
				<div class="clearfix depto">
					<h2>NOTICIAS DEL DEPARTAMENTO</h2>
				</div>
				
				<div id="noticias" class="clearfix">
					<div class="row">
					
						<?php 
							$posts = get_field('_noticias_departamento');
							$exc= apply_filters('the_excerpt', get_post_field('post_excerpt', $posts->ID));
						if( $posts ): ?>
							<?php foreach( $posts as $post): ?>
							<?php setup_postdata( $post); ?>
						<div class="col-md-4 col-xs-12">
						
							<div class="col-xs-12">
								<div class="row">
								
									<a href="<? the_permalink();?>">
										<div class="gradiente"></div>
										<?
			                                if(has_post_thumbnail()){
			                                    echo get_the_post_thumbnail($post->ID, 'news-related', array('class' => 'img-responsive'));
											} else {
												echo '<img src="'.get_bloginfo('template_directory').'/img/default-news.jpg" class="img-responsive" alt="Liceo Domingo Santa Maria" />';
											}
										?>
									</a>
								</div>									
							</div>

							<div class="detalle">
								<div class="det-noticia">
																
									<h4><a href="<? the_permalink();?>"><?php the_title(); ?></a></h4>
										
									<h5><img src="<?php bloginfo('template_directory'); ?>/img/iconos/fechita.svg"><? the_date();?></h5>

									<?
						        		if($excerpt) {
                                        	echo '<p class="">'.$excerpt.'</p>';
                                        } else {
                                        	echo '<p class="">'.content(20).'</p>';
                                        }
									?>

								</div>

								<a class="btn btn-default btn-block" href="<? the_permalink();?>">Ver Noticia</a>			

							</div>
						</div>
						
							<?php wp_reset_postdata(); ?>
						    <?php endforeach; ?>
						    
						<?php endif; ?>
							
					</div><!--/.row-->
				</div><!--/#noticias-->
				
				
					
			</div><!--/row-->			
		</div><!--/departamento-->
		

		<?php endwhile; else: ?>
        <div class="col-xs-12">
        	<p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
        </div>
		<?php endif; ?>
        
        
	</div><!--/main-->
<?php get_footer(); ?>