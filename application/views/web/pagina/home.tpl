{strip}
{*SECTION SLIDER*}
<section>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{$base_url}public/img/slider/slider1.jpg" alt="">
			</div>
			<div class="carousel-item">
				<img src="{$base_url}public/img/slider/slider2.jpg" alt="">
			</div>
			<div class="carousel-item">
				<img src="{$base_url}public/img/slider/slider3.jpg" alt="">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="icon-wrap"></span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="icon-wrap"></span>
		</a>
	</div>
</section>
{*END SECTION SLIDER*}

{*SECTION BANNER CONTACTO*}
<section class="sect_banner_contacto">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-9">
				<div class="box_mensaje">
					<h4>OBTENGA SU KIT</h4>
					<h6>Encuentra el producto perfecto que tenemos para tí.</h6>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="btn_banner">
					<a href="{$base_url}contacto" class="btn_contactanos">CONTÁCTANOS</a>
				</div>
			</div>
		</div>
	</div>
</section>
{*END SECTION BANNER CONTACTO*}


{*SECTION TITLE PRODUCTOS*}
<section class="sect_title_servicios" style="background: #fff;padding-bottom: 0;">
	<div class="container"> 
		 <div class="row">
		 	<div class="col-lg-12">
		 		<div class="title_servicios">
		 			<h2>NUESTROS <span>PRODUCTOS</span></h2>
		 			<p>Ofrecemos equipos de diagnóstico y herramientas para talleres automotrices e industrias en general.</p>
					<a href="{$base_url}productos" class="more_products">Ver más productos</a>
		 		</div>
		 	</div>
		 </div>
	</div>
</section>
{*END SECTION TITLE PRODUCTOS*}

{*SECTION PRODUCTOS*}
<section class="sect_productos">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="owl-carousel productos owl-theme">
					<div class="item">
						<div class="box_item">
							<div class="box_head">
								<a href="#"><img src="{$base_url}public/img/productos/producto1.jpg" width="100%"></a>
								
							</div>
							<div class="box_body">
								<h5><a href="#">Inyectora de Voltaje</a></h5>
								<h6>S/ 1.00</h6>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="box_item">
							<div class="box_head">
								<a href="#"><img src="{$base_url}public/img/productos/producto3.jpg" width="100%"></a>
								
							</div>
							<div class="box_body">
								<h5><a href="#">Inyectora de Voltaje 6V / 12V / 24V</a></h5>
								<h6>S/ 1.00</h6>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="box_item">
							<div class="box_head">
								<a href="#"><img src="{$base_url}public/img/productos/producto2.jpg" width="100%"></a>
								
							</div>
							<div class="box_body">
								<h5><a href="#">Kit Herramientas de manguito de presión y tracción LGV y HGV</a></h5>
								<h6>S/ 1.00</h6>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="box_item">
							<div class="box_head">
								<a href="#"><img src="{$base_url}public/img/productos/producto4.jpg" width="100%"></a>
								
							</div>
							<div class="box_body">
								<h5><a href="#">Manómetro para medir presión de combustible 0-140psi/10Bar</a></h5>
								<h6>S/ 1.00</h6>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="box_item">
							<div class="box_head">
								<a href="#"><img src="{$base_url}public/img/productos/producto5.jpg" width="100%"></a>
								
							</div>
							<div class="box_body">
								<h5><a href="#">Compresimetro para motores diesel</a></h5>
								<h6>S/ 1.00</h6>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="box_item">
							<div class="box_head">
								<a href="#"><img src="{$base_url}public/img/productos/producto6.jpg" width="100%"></a>
								
							</div>
							<div class="box_body">
								<h5><a href="#">Alicate profesional para linea combustible</a></h5>
								<h6>S/1.00</h6>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</section>
{*END SECTION PRODUCTOS*}



{*SECTION TITILE SERVICIOS*}
<section class="sect_title_servicios">
	<div class="container"> 
		 <div class="row">
		 	<div class="col-lg-12">
		 		<div class="title_servicios">
		 			<h2>ESTAMOS<span> UBICADOS EN</span></h2>
		 			<p>¡Las mejores herramientas para tu trabajo las puedes encontrar aqui!</p>
					
		 		</div>
		 	</div>
		 </div>
	</div>
</section>
{*END SECTION TITLE SERVICIOS*}


{*SECTION MAPA*}
<section>
	<div id="map" style="width: 100%;height: 400px;"></div>
</section>
{*END SECTION MAPA*}



{/strip}