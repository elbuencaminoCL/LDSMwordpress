<?php
	/*
	Template Name: Noticias
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

			<div class="container">
				<div class="row">
					<div class="newsletter alert alert-dismissible clearfix" role="alert">						 
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						<div class="clearfix">	 
							<? echo do_shortcode('[contact-form-7 id="632" title="Suscribirse"]');?>
						</div>	
					</div>				

					<div id="ultimas-noticias" class="clearfix row">
						<div class="col-md-9 col-xs-12">
							<div class="titulo-4 clearfix">
								<img src="<?php bloginfo('template_directory'); ?>/img/iconos/noticia.svg">
								<h6>Últimas Noticias</h6>
							</div>
							<?php
							    $featured_posts = new WP_Query( array(
							        'post_type' => 'post',
							        'posts_per_page' => 1,
							        'tax_query' => array(
							            array(
							                'taxonomy' => 'pts_feature_tax',
							                'field' => 'slug',
							                'terms' => array( 'featured' ),
							            )
							        )
							    ) );
							    if ( $featured_posts->have_posts() ) : while ( $featured_posts->have_posts() ) : $featured_posts->the_post();
							?>
								<div class="destacada clearfix">							
									<a href="<? the_permalink();?>">
										<h3 class="noticia-fecha"><?php echo get_the_date(); ?></h3>
										<div class="noticia-shadow">
											<h4><? the_title();?></h4>
											<?
												$excerpt= apply_filters('the_excerpt', get_post_field('post_excerpt', $post->ID));
												if($excerpt) {
		                                            echo '<p>'.$excerpt.'</p>';
		                                        } else {
		                                            echo content(20);
		                                        }
											?>
											<h5>Categoría de la noticia</h5>
										</div>
										<? 
											if(has_post_thumbnail()){
					                            echo get_the_post_thumbnail($post->ID, 'news-featured', array('class' => 'img-absolute'));
					                        } else {
					                            echo '<img src="'.get_bloginfo('template_directory').'/img/default-news.jpg" class="img-absolute" alt="Liceo Domingo Santa María" />';
					                        }
					                    ?>
									</a>
								</div>
							<? endwhile; endif; ?>
						</div>

						<div id="noticias-pills" class="col-md-3">
							<div class="titulo-4 clearfix">
								<img src="<?php bloginfo('template_directory'); ?>/img/iconos/arrows.svg">
								<h6>Categorias</h6>
							</div>	
							<nav class="navbar" role="navigation">							
							    <?php
									global $ancestor;
									$childcats = get_categories('child_of=33&hide_empty=0');
									echo '<ul class="nav nav-pills nav-stacked">';
										echo '<li role="presentation" class="active"><a href="'.get_bloginfo('template_directory').'/seccion/noticias/">TODAS</a></li>';
										foreach ($childcats as $childcat) {
											if (cat_is_ancestor_of($ancestor, $childcat->cat_ID) == false){
										   		echo '<li role="presentation"><a href="'.get_category_link($childcat->cat_ID).'">';
											    echo $childcat->cat_name . '</a>';
												echo '</li>';
											    $ancestor = $childcat->cat_ID;
											}
										}
									echo '</ul>';
								?>
							</nav>
						</div>

						<nav id="noticias-categorias" class="col-xs-12" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#noticias-colapse" aria-expanded="false">Categorias</button>
							</div>
							<div class="row collapse navbar-collapse" id="noticias-colapse">
								<?php
									global $ancestor;
									$childcats = get_categories('child_of=33&hide_empty=0');
									echo '<ul class="nav nav-pills">';
										echo '<li role="presentation" class="active"><a href="'.get_bloginfo('template_directory').'/seccion/noticias/">TODAS</a></li>';
										foreach ($childcats as $childcat) {
											if (cat_is_ancestor_of($ancestor, $childcat->cat_ID) == false){
										   		echo '<li role="presentation"><a href="'.get_category_link($childcat->cat_ID).'">';
											    echo $childcat->cat_name . '</a>';
												echo '</li>';
											    $ancestor = $childcat->cat_ID;
											}
										}
									echo '</ul>';
								?>
							</div>		
						</nav>
					</div>

					<div id="noticias" class="clearfix">
						<div class="row">
							<?php 
			                    $news = array (
		                            'category_name'  => 'noticias',
			                        'posts_per_page' => 4
			                    );
			                    $new = new WP_Query( $news );
			                    if ( $new->have_posts() ) {
			                        while ( $new->have_posts() ) : $new->the_post();
			                        $excerpt= apply_filters('the_excerpt', get_post_field('post_excerpt', $new->ID));
			                        echo '<div class="col-md-3 col-xs-12">';
			                            echo '<div class="col-xs-12">';
			                                echo '<div class="row">';
			                                    echo '<a class="block" href="'.get_the_permalink().'">';
			                                        if(has_post_thumbnail()){
			                                            echo get_the_post_thumbnail($post->ID, 'news-home', array('class' => 'img-responsive'));
			                                        } else {
			                                            echo '<img src="'.get_bloginfo('template_directory').'/img/default-news.jpg" class="img-responsive" alt="Colegio Santa María de Lo Cañas" />';
			                                        }
			                                    echo '</a>';
			                                echo '</div>';
			                            echo '</div>';
			                            echo '<div class="detalle">';
			                            	echo '<div class="det-noticia">';
			                                    echo '<h4><a href="'.get_the_permalink().'">'.get_the_title().'</a></h4>';
			                                    echo '<h5><img src="'.get_bloginfo('template_directory').'img/iconos/fechita.svg"> '.get_the_date().'</h5>';
			                                    if($excerpt) {
			                                        echo '<p class="hidden-xs">'.$excerpt.'</p>';
			                                    } else {
			                                        echo '<p class="hidden-xs">'.content(12).'</p>';
			                                    }
			                                echo '</div>';
			                                echo '<a class="btn btn-default btn-block" href="'.get_the_permalink().'">Ver Noticia</a>';
			                            echo '</div>';
			                        echo '</div>';
			                        endwhile;
			                        wp_reset_query();
			                    }
			                ?>
			            </div>
			            <div class="clearfix">
							<a class="btn btn-white btn-lg" href="<?php bloginfo('wpurl'); ?>/seccion/noticias/">Ver todas las noticias</a>
						</div>
					</div>
				</div>					
			</div>
		<?php endwhile; else: ?>
            <div class="col-xs-12">
                <p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
            </div>
        <?php endif; ?>
	</div><!--/main-->
<?php get_footer(); ?>