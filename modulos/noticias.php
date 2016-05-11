                        <?php 
                            $news = array (
                                'category_name'  => 'noticias',
                                'posts_per_page' => 3
                            );
                            $new = new WP_Query($news);
                            if ( $new->have_posts() ) {
                                while ( $new->have_posts() ) : $new->the_post();
                                    $excerpt= apply_filters('the_excerpt', get_post_field('post_excerpt', $new->ID));
                                    echo '<div class="col-md-4">';
                                        echo '<a class="btn-block" href="'.get_the_permalink().'">';
                                            echo '<h3 class="noticia-fecha">'.get_the_date().'</h3>';
                                            if(has_post_thumbnail()){
                                                echo get_the_post_thumbnail($new->ID, 'news-home', array('class' => 'img-responsive'));
                                            } else {
                                                echo '<img src="'.get_bloginfo('template_directory').'/img/default-news.jpg" class="img-responsive" alt="Colegio Santa María de Lo Cañas" />';
                                            }
                                            echo '<div class="noticia-shadow">';
                                                echo '<h4>'.get_the_title().'</h4>';
                                                if($excerpt) {
                                                    echo '<p class="hidden-xs">'.$excerpt.'</p>';
                                                } else {
                                                    echo '<p class="hidden-xs">'.content(20).'</p>';
                                                }
                                                echo '<h5>Categoría de la noticia</h5>';
                                            echo '</div>';
                                        echo '</a>';
                                    echo '</div>';
                                endwhile;
                                wp_reset_query();
                            }
                        ?>