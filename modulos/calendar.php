                            <?php 
                                $args = array (
                                    'post_type'          => 'tribe_events',
                                    'posts_per_archive_page' => '4',
                                );
                                $query = new WP_Query( $args );
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                        echo '<div class="col-md-4 col-xs-12">';
                                            echo '<div class="evento clearfix">';
                                                echo '<div class="fecha-evento clearfix">';
                                                    echo '<h5>'.tribe_get_start_date(null, false, 'M').'</h5>';
                                                    echo '<h4>'.tribe_get_start_date(null, false, 'j').'</h4>';                     
                                                echo '</div>';
                                                echo '<div class="cuerpo-evento">';
                                                    echo '<h3>'.$post->post_title.'</h3>';
                                                    echo '<p>'.excerpt(10).'</p>';
                                                    echo '<div class="clearfix">';
                                                        echo '<div>';
                                                            echo '<img src="'.get_bloginfo('template_directory').'/img/iconos/lugar.svg"> '.tribe_get_venue();
                                                        echo '</div>';
                                                        echo '<div>';
                                                            echo '<img src="'.get_bloginfo('template_directory').'/img/iconos/hora.svg"> '.tribe_get_start_date( null, false, 'H:i' );
                                                        echo '</div>';  
                                                    echo '</div>';                          
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</div>'; 
                                    }
                                } else {
                                    echo '<p>No se han encontrado posts para esta categoría.</p>';
                                }
                                wp_reset_postdata();
                            ?>