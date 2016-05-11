<?php
    /*
    Template Name: Home
    */
?>

<?php get_header(); ?>

    <? include_once('modulos/slider.php');?> 

    <div id="main" class="clearfix">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div id="contacto-movil">
                <? the_excerpt();?>
            </div>
        <?php endwhile; endif; ?>

        <div id="segmentos" class="clearfix block">
            <?php if(function_exists('home_pages')) home_pages("id=".$post->ID."&class=hp&childs=true"); ?>
        </div>

        <div id="accesos-directos">
            <div class="container">
                <div class="row">
                    <div class="titulo-4 clearfix">
                        <img src="<?php bloginfo('template_directory'); ?>/img/iconos/arrows.svg">
                        <h6>Accesos Directos</h6>
                    </div> 
                </div>
                <div class="row">
                    <? include_once('modulos/accesos.php');?>
                </div>
            </div>
        </div>

        <!-- NOTICIAS -->
        <div id="noticias" class="home clearfix">
            <div class="container">  
                <div class="row">           
                    <div class="titulo-4 clearfix">
                        <img src="<?php bloginfo('template_directory'); ?>/img/iconos/noticia.svg">
                        <h6>Noticias</h6>
                        <a href="<?php bloginfo('wpurl'); ?>/noticias/" class="inset-plus">Ver todas las Noticias</a>
                    </div>
                    <div class="row clearfix">
                        <? include_once('modulos/noticias.php');?>
                    </div>
                </div>
            </div>
        </div> 


        <!-- NOTICIAS MOVIL -->
        <div id="noticias-movil" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="titulo-4 clearfix">
                <img src="<?php bloginfo('template_directory'); ?>/img/iconos/noticia.svg">
                <h6>Noticias</h6>
                <a href="<?php bloginfo('wpurl'); ?>/noticias/" class="inset-plus">Ver todas las Noticias</a>
            </div>

            <? include_once('modulos/noticias-mobile.php');?>
            <a href="<?php bloginfo('wpurl'); ?>/noticias/" class="btn btn-default btn-block btn-lg">Ver todas las noticias</a>
        </div>

        <!-- AGENDA -->                     
        <div id="agenda">
            <div class="container">
                <div class="row">
                    <div class="titulo-4 clearfix">
                        <img src="<?php bloginfo('template_directory'); ?>/img/iconos/clock.svg">
                        <h6>Agenda</h6>
                        <a href="<?php bloginfo('wpurl'); ?>/calendario/" class="inset-plus">Ver Agenda completa</a>
                    </div>
                    <div class="row">                   
                        <? include_once('modulos/calendar.php');?>
                    </div>
                </div>
            </div>
        </div>

        <!-- AGENDA MOVIL -->
        <div id="agenda-movil" class="carousel slide" data-ride="carousel">
            <div class="titulo-4 clearfix">
                <img src="<?php bloginfo('wpurl'); ?>/img/agenda.png">
                <h6>Agenda</h6>
            </div>
            <? include_once('modulos/calendar-mobile.php');?>
            <a href="noticias.html<?php bloginfo('wpurl'); ?>/calendario/" class="btn btn-default btn-block btn-lg">Ver Agenda completa</a>
        </div>

        <!-- LENGUAJE -->
        <? 
            $lg = get_page_by_path('escuela-de-lenguaje-tel');
            $img = get_field('_imagen_home', $lg);
            $ex= apply_filters('the_excerpt', get_post_field('post_excerpt', $lg->ID));
            echo '<div id="lenguaje">';
                echo '<div class="container">';
                    echo '<h2>'.get_the_title($lg).'</h2>';
                    echo '<h3>'.$ex.'</h3>';
                    echo '<a class="btn btn-primary btn-lg italic" href="'.get_the_permalink($lg).'">Más Información</a>';
                echo '</div>';
                if($img) {
                    echo '<img src="'.$img.'" class="img-absolute" />';
                }
                echo '<div class="pic-shadow"></div>';
            echo '</div>';
        ?>

        <!-- ACADEMIAS -->
        <div id="academia" class="clearfix">
            <div class="container">
                <div class="row clearfix">
                    <h2>Conoce nuestras Academias</h2>
                    <a class="btn btn-default btn-lg" href="<?php bloginfo('wpurl'); ?>/academias/">Ver todas las academias</a>
                </div>
            </div>
            <?php if( get_field('_titulo_banner_1') ): ?>
                <?
                    $title1 = get_field('_titulo_banner_1');
                    $imagen1 = get_field('_imagen_banner_1');
                    $enlace1 = get_field('_enlace_banner_1');
                ?>
                <div class="col-md-4 col-xs-12">
                    <img class="img-responsive" src="<?php echo $imagen1; ?>" alt="<?php echo $title1; ?>" />
                    <a class="btn-extra" href="<?php echo $enlace1; ?>"><?php echo $title1; ?></a>
                </div>
            <?php endif; wp_reset_postdata(); ?>
            <?php if( get_field('_titulo_banner_2') ): ?>
                <?
                    $title2 = get_field('_titulo_banner_2');
                    $imagen2 = get_field('_imagen_banner_2');
                    $enlace2 = get_field('_enlace_banner_2');
                ?>
                <div class="col-md-4 col-xs-12">
                    <img class="img-responsive" src="<?php echo $imagen2; ?>" alt="<?php echo $title2; ?>" />
                    <a class="btn-extra" href="<?php echo $enlace2; ?>"><?php echo $title2; ?></a>
                </div>
            <?php endif; wp_reset_postdata(); ?>
            <?php if( get_field('_titulo_banner_3') ): ?>
                <?
                    $title3 = get_field('_titulo_banner_3');
                    $imagen3 = get_field('_imagen_banner_3');
                    $enlace3 = get_field('_enlace_banner_3');
                ?>
                <div class="col-md-4 col-xs-12">
                    <img class="img-responsive" src="<?php echo $imagen3; ?>" alt="<?php echo $title3; ?>" />
                    <a class="btn-extra" href="<?php echo $enlace3; ?>"><?php echo $title3; ?></a>
                </div>
            <?php endif; wp_reset_postdata(); ?>
        </div>

        <!-- ACADEMIAS MOVIL -->
        <div id="academia-movil" class="clearfix">
            <div class="container">
                <h2>Conoce nuestras Academias</h2>
                <?php if( get_field('_titulo_banner_1') ): ?>
                    <?
                        $title1 = get_field('_titulo_banner_1');
                        $imagen1 = get_field('_imagen_banner_1');
                        $enlace1 = get_field('_enlace_banner_1');
                    ?>
                    <a class="btn btn-default btn-lg btn-block" href="<?php echo $enlace1; ?>"><?php echo $title1; ?></a>
                <?php endif; wp_reset_postdata(); ?>
                <?php if( get_field('_titulo_banner_2') ): ?>
                    <?
                        $title1 = get_field('_titulo_banner_2');
                        $imagen1 = get_field('_imagen_banner_2');
                        $enlace1 = get_field('_enlace_banner_2');
                    ?>
                    <a class="btn btn-default btn-lg btn-block" href="<?php echo $enlace2; ?>"><?php echo $title2; ?></a>
                <?php endif; wp_reset_postdata(); ?>
                <?php if( get_field('_titulo_banner_3') ): ?>
                    <?
                        $title1 = get_field('_titulo_banner_3');
                        $imagen1 = get_field('_imagen_banner_3');
                        $enlace1 = get_field('_enlace_banner_3');
                    ?>
                    <a class="btn btn-default btn-lg btn-block" href="<?php echo $enlace3; ?>"><?php echo $title3; ?></a>
                <?php endif; wp_reset_postdata(); ?>
                <a class="btn btn-default btn-lg btn-block" href="<?php bloginfo('wpurl'); ?>/academias/">Ver todas las academias</a>
            </div>
        </div>
    </div>
<?php get_footer(); ?>