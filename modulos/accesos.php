                    <?php if( have_rows('_accesos_directos') ): ?>
                        <?php while( have_rows('_accesos_directos') ): the_row(); 
                            $image = get_sub_field('_icono_acceso');
                            $titulo = get_sub_field('_titulo_acceso');
                            $link = get_sub_field('_enlace_acceso_directo');
                        ?>
                            <div class="col-md-2 col-xs-12">
                                <a class="btn btn-default btn-block clearfix" href="<?php echo $link; ?>">
                                    <div class="col-md-12 col-xs-4">
                                        <img class="img-responsive" src="<?php echo $image; ?>" alt="<?php echo $titulo ?>" />
                                    </div>
                                    <div class="col-md-12 col-xs-8">
                                        <?php echo $titulo; ?>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; wp_reset_postdata(); ?>