        <!--FOOTER-->
        <footer id="footer" class="clearfix">
            <div id="footer-pic">
                <div class="overlay"></div>
                <img src="<?php bloginfo('template_directory'); ?>/img/sample-pics/006.jpg">
            </div>

            <div class="container">
                <div class="row">
                    <div class="container vinculos">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <div id="bottom-logo">
                                    <a class="clearfix" href="#">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/logo.png">
                                        <h4>
                                            Liceo Domingo Santa María
                                            <span>Arica - Chile</span>
                                        </h4>                                                            
                                    </a>
                                    <div class="triangulo"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row barra-footer">
                        <div class="col-md-3 col-xs-12">
                            <a class="btn btn-primary" href="#">Webmail</a>

                        </div>
                        <div class="col-md-9 col-xs-12 boletin">
                            <div class="row">
                                <form class="form-inline">
                                    <p>Suscribite a nuestro boletin</p>                         
                                    <input class="form-control" type="email" name="correo" placeholder="correo@mail.com">
                                    <input class="btn btn-primary" tyoe="submit" value="Suscribirse">
                                </form>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>

            <div id="bottom">
                <div class="container">
                    <div class="row">
                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <?php $options = get_option('csmlc_theme_options');
                                    if ($options['direccion']) {
                                        echo $options['direccion'];
                                    } 
                                ?>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <?php $options = get_option('csmlc_theme_options');
                                    if ($options['datos_contacto']) {
                                        echo $options['datos_contacto'];
                                    } 
                                ?>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                Todos los Derechos Reservados
                            </div>
                        </div>
                    </div>
                </div>
            </div>          
        </footer>
    </div>

    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.10.2.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-ui.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.jcarousel.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.lettering.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('li.dropdown ul').addClass('dropdown-menu');
            $(".carousel-inner .item:first-child, .carousel-indicators li:first-child").addClass('active');
        });
    </script>
    <? if(is_page('infraestructura')) { ?>
        <script src="<?php bloginfo('template_directory'); ?>/js/infra.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js" type="text/javascript"></script>
    <? } ?>
    <? if(is_page('extra-programaticas') || is_page('galeria-multimedia')) { ?>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.mixitup.js"></script>
        <script type="text/javascript">
            $(function(){
                $('#cont-talleres').mixItUp();
            });
        </script>
    <? } ?>
    <? if(is_page('galeria-multimedia')) { ?>
        <script>
            $(document).ready(function () {
                size_li = $("#cont-talleres .caluga-galeria").size();
                x=3;
                $('#cont-talleres .caluga-galeria:lt('+x+')').show();
                $('.btn-cargar-abajo').click(function () {
                    x= (x+9 <= size_li) ? x+9 : size_li;
                    $('#cont-talleres .caluga-galeria:lt('+x+')').show();
                    $('.btn-cargar-abajo').show();
                    if(x == size_li){
                        $('.btn-cargar-abajo').hide();
                    }
                });
                $('.btn-cargar-abajo').click(function () {
                    x=(x-9<0) ? 3 : x-9;
                    $('#myList li').not(':lt('+x+')').hide();
                    $('#loadMore').show();
                     $('#showLess').show();
                    if(x == 9){
                        $('#showLess').hide();
                    }
                });
            });
        </script>
    <? } ?>
    <? if(is_page('noticias')) { ?>
        <script>
            $(function(){
                $('.widget_wysija').addClass('col-sm-6 col-xs-12');
                $('form p:first-child').addClass('first');
            });
        </script>
    <? } ?>
</body>

</html>