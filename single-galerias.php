<?php get_header(); ?>	
	<!--main-->
		<div id="main" class="clearfix">

			<!--NUEVO-ENCABEZADO CON IMAGEN Y TÍTULO-->
			<div id="foto-encabezado" class="absolute">
				<img class="img-responsive" src="img/slider.jpg">
			</div>
			<h2 class="titulo-seccion center relative"><span>GALERÍA MULTIMEDIA</span></h2>
			<!--/FIN ENCABEZADO CON IMAGEN Y TÍTULO-->

			<div class="container relative galeria-detalle">
				<div class="row">

					<div class="col-md-9 col-xs-12">

						<h1 class="upper">INICIO SUMMER CAMP 2016</h1>
						<div class="col-lg-12">
							<div class="row">
								<div class="col-sm-3 datos-ficha-galeria"><span class="glyphicon glyphicon-calendar"></span>17 de Enero del 2016</div>
								<div class="col-sm-3 upper datos-ficha-galeria">| Categoria 1</div>
							</div>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>

						<img class="img-responsive" src="img/1600.jpg">

						<div class="col-sm-5">
							<div class="row">
								<a class="btn-primary btn-lg btn-block btn-azul" href="galerias.html"><span class="glyphicon glyphicon-menu-left"></span>  Volver a Galería Multimedia</a>
							</div>
						</div>

					</div>

					<div class="col-md-3 hidden-sm hidden-xs">

						<h3 class="h3-aside upper text-center">Relacionados</h3>

						<a href="btn-block">
							<img class="img-responsive" src="img/notiproof.jpg">
							<h4 class="upper center desc-galeria">Descripción Imagen</h4>
						</a>

						<div id="sidebar-bulletin" class="col-sm-12 burbuja-alerta-aside">
							<h4 class="center">Suscríbete a nuestro boletín y recibe todos los eventos en tu mail</h4>
							<input type="mail" placeholder="Escribe aquí tu mail"></input>
							<button type="submit" class="btn-primary btn-lg btn-block btn-suscribirse">Suscribirse</button>
						</div>


					</div>

				</div>
			</div>
		</div>
		<!--/main-->
		<?php endwhile; else: ?>
            <div class="col-xs-12">
                <p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
            </div>
        <?php endif; ?>
	</div>
	<!--/main-->
<?php get_footer(); ?>