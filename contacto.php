<?php require('header.php'); ?>

<body>
		
		<div class="fh5co-loader"></div>
		
		<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="container-wrap">
				<div class="top-menu">
					<div class="row">
						<div class="col-xs-2">
							<div id="fh5co-logo"><a href="index.php"><img src="https://res.cloudinary.com/dcpbamvnx/image/upload/v1701456957/logo_vdcwfv.png" alt="" width="200" height="90" ></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="index.php">Inicio</a></li>
								<li><a href="somos.php">¿Quienes somos?</a></li>
								<li><a href="product-services.php">Productos y Servicios</a></li>
								<li class="active"><a  href="contacto.php">Contacto</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</nav>
	<body>
	<div class="container-wrap">
		<div id="fh5co-contact">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h1>Contáctanos</h1>
					<p><strong>¡TE BRINDAMOS LA MEJOR SOLUCIÓN!</strong></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-push-1 animate-box">
					<h4><strong>¿Dónde nos encontramos?</strong></h4>
					<ul class="contact-info">
						<li><i class="icon-location4"></i><a href="https://maps.app.goo.gl/dz7zgui6kKhJZy4T8">C. 16 de Septiembre 5313, Gabriel Pastor 2da Secc, 72550 Heroica Puebla de Zaragoza, Pue.</a></li>
						<li><i class="icon-phone3"></i><a href="tel://2222403306">+52 222 240 3306</a></li>
						<li><i class="icon-location3"></i><a href="mailto:contacto@gpcpuebla.com">contacto@gpcpuebla.com</a></li>
						<li><i class="icon-globe2"></i><a href="https://gpcpuebla.com">www.gpcpuebla.com</a></li>
						<li><i class="fa-brands fa-whatsapp"></i><a href="https://wa.me/522221510764?text=¡Hola!%20Vengo%20de%20la%20página%20de%20GPC%20estoy%20interesado%20en%20sus%20servicios"> Whatsapp  </a>                                                                                                                                                                                                                                                                                        </li>
						<li><h4><strong>Nuestro horario</strong></h4></li>
						<li>Lunes a Viernes: 8:00 a.m. a 6:00 p.m.</li>
						<li>Sábado: 10:00 a.m. a 2:00 p.m.</li>
					</ul>
				</div>
				<form action="guardar.php" method="POST"> 
				<div class="col-md-7 col-md-push-1 animate-box">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input name="name" type="text" class="form-control" placeholder="Nombre">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input name="email" type="email" class="form-control" placeholder="Correo electrónico">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input name="phone" type="tel" class="form-control" placeholder="Teléfono">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Mensaje"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Enviar mensaje" class="btn btn-info btn-success">
							</div>
							
							<h4>¿Cómo llegar?</h4>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d333.39522101476115!2d-98.21148891446602!3d19.02252640172239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc0b0b72abfb7%3A0x4141d5603e77578a!2sGPC!5e0!3m2!1ses-419!2smx!4v1701539321750!5m2!1ses-419!2smx" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div><!-- END container-wrap -->

	<?php require('footer.php'); ?>