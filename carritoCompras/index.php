<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>


	<div class="row head">
		<div class="col-md-6 offset-md-2">
			<div class="md-stepper-horizontal orange">
				<div class="md-step active" id="active1">
					<div class="md-step-circle"><span>1</span></div>
					<div class="md-step-title">Checkout</div>
					<div class="md-step-bar-left" id="left1"></div>
					<div class="md-step-bar-right" id="right1" ></div>
				</div>
				<div class="md-step" id="active2" >
					<div class="md-step-circle"><span>2</span></div>
					<div class="md-step-title">Information</div>
					<div class="md-step-bar-left" id="left2"></div>
					<div class="md-step-bar-right" id="right2"></div>
				</div>
				<div class="md-step" id="active3" >
					<div class="md-step-circle"><span>3</span></div>
					<div class="md-step-title">Payment</div>
					<div class="md-step-bar-left" id="left3"></div>
					<div class="md-step-bar-right" id="right3"></div>
				</div>
				<div class="md-step" id="active4">
					<div class="md-step-circle"><span>4</span></div>
					<div class="md-step-title">Review</div>
					<div class="md-step-bar-left" id="left4"></div>
					<div class="md-step-bar-right" id="right4"></div>
				</div>
			</div>
		</div>
		<div class="col-md-2" id="infoContacto">
			<p  id="infoPanelTitulo">¿Alguna duda? contactanos:</p><p id="infoPanelContenido"><u>+52 3310902421</u></p>
		</div>
	</div>
	
	
	<!-- MENU COMPRA--->
	<div id="compra">
		<div class="row main">
			<div class="col-md-6 offset-md-2">
				<h5 class="card-header">PRODUCTOS </h5>
				<div class="card-body" id="cardBodyProductos">
					<ul class="list-group list-group-flush">
						<li class="list-group-item bg-light">
							<div class="row">
								<div class="col-lg-12">
									<div class="row">
										<div class='col-4' id='colImage' data-toggle="modal" data-target="#modalMenu">
											<img src='multimedia/billpocket.jpg' id="imgElegirProducto">
											<div class="centrado">Elíge un Producto</div>
										</div>
										<div class='col-4'>
											<div class="row">
												<div class="col-12" id="colCantidad">
													<p><b>CANTIDAD</b></p>
												</div>
												<div class="col-12 justCenter">
													<select class="form-control"  id="selectCantidad" disabled="disabled" onchange="calculatePrice();">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
														<option>7</option>
														<option>8</option>
														<option>9</option>
														<option>10</option>
													</select>										     	
												</div>
											</div>
										</div>											
										<div class='col-4' id="colTotal">
											<div class="row">
												<div class="col-12">
													<p><b>TOTAL</b></p>
												</div>
												<div class="col-12" id='priceTotal'>

												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul> 
					</div>
				</div>
				<div class="col-md-2" id="divPagos">

				</div>
			</div>
			<div class="row footer mt-3">
				<div class="col-md-6 offset-md-2"  id="botonSiguiente">
					<button type="button" class="btn btn-lg btn-primary" onclick="step1();">Siguiente</button>
				</div>
			</div>
		</div>

		<!-- MENU DATOS--->

		<div id="datos">
			<div class="row main">
				<div class="col-md-6 offset-md-2">
					<div class="card">
						<h5 class="card-header">SHOPPING BAG </h5>
						<div class="card-body">
							<div class="row p-4 bg-white rounded">
								<div class="col-lg-6">
									<div class="bg-light rounded-pill px-4 py-3 mb-3 text-uppercase font-weight-bold">Informacion Personal</div>
									<div class="row">
										<div class="col-lg-12 col-6">
											<span>Primer Nombre</span>
											<input type="text" class="form-control" id="primerNombre" placeholder="Nombre">
										</div>
										<div class="col-lg-12 col-6">
											<span>Segundo Nombre</span>
											<input type="text" class="form-control" id="segundoNombre" placeholder="opcional">
										</div>									
										<div class="col-lg-12 col-6">
											<span>Apellido Paterno</span>
											<input type="text" class="form-control" id="apellidoPaterno" placeholder="Apellido Paterno">
										</div>
										<div class="col-lg-12 col-6">
											<span>Apellido Materno</span>
											<input type="text" class="form-control" id="apellidoMaterno" placeholder="Apellido Materno">
										</div>
										<div class="col-lg-12 col-6">
											<span>Celular</span>
											<input type="text" class="form-control" id="celular" placeholder="10 digitos">
										</div>
										<div class="col-lg-12 col-6">
											<span>Email</span>
											<input type="email" class="form-control" id="email" placeholder="ejemplo@hotmail.com">
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="bg-light rounded-pill px-4 py-3 mb-3 text-uppercase font-weight-bold">Informacion Envio</div>
									<div class=row>
										<div class="col-lg-12 col-6">
											<span>Calle</span>
											<input type="text" class="form-control" id="calle" placeholder="max(32 caracteres)" maxLength="32" />
										</div>
										<div class="col-lg-6 col-6" >
											<span>Numero Ext</span>
											<input type="text" class="form-control" id="numExt" placeholder="max(32 caracteres)">
										</div>
										<div class="col-lg-6 col-6">
											<span>Numero Int</span>
											<input type="text" class="form-control" id="numInt" placeholder="max(32 caracteres)">
										</div>	
										<div class="col-lg-6 col-6">
											<span>Codigo Postal</span>
											<input type="text" class="form-control" id="CP" placeholder="C.P." maxLength="5" />				
										</div>	
										<div class="col-lg-6 col-6">
											<span>Colonia</span>
											<input type="text" class="form-control" id="colonia" placeholder="max(64 caracteres)" maxLength="64" />
										</div>
										<div class="col-lg-6 col-6">
											<span>Ciudad</span>
											<input type="text" class="form-control" id="ciudad" placeholder="max(64 caracteres)" maxLength="64" />
										</div>
										<div class="col-lg-6 col-6">
											<span>Estado</span>
											<input type="text" class="form-control" id="estado" placeholder="max(32 caracteres)" maxLength="32" />
										</div>
										<div class="col-lg-12 col-12">
											<span>Referencía</span>
											<input type="text" class="form-control" id="referencia" placeholder="max(128 caracteres)" maxLength="128" />
										</div>								    								    
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-2" id="divPagos">
				</div>
			</div>  
			<div class="row footer mt-3">
				<div class="col-md-6 offset-md-2">
					<div class="row">
						<div class="col-12">
							<div class="row">
								<div class="col-8" id="butonAtrasDatos">
									<button type="button" class="btn btn-lg btn-primary" onclick="step1Prew();">Atras</button> 
								</div>
								<div class="col-4" id="butonSiguienteDatos" >
									<button type="button" class="btn btn-lg btn-primary" onclick="step2();">Siguiente</button>  
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 


		<!-- MENU METODO PAGO -->
		<div id="pago"> 
			<div class="row main ">
				<div class="col-md-6 offset-md-2">
					<div class="card">
						<h5 class="card-header">PAGO</h5>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-3 col-12">
									<div class="row">
										<div class="col-lg-12 col-6 mb-2" id="tarjeta" onclick="tarjeta();"><img src="multimedia/tarjetaCredito.jpg" id="imgPago1"></div>
										<div class="col-lg-12  col-6 mb-2" id="cash" onclick="cash();"><img src="multimedia/oxxo.png" id="imgPago2"></div>
									</div>
								</div>

								<!-- PAGO CON TARJETA DE CREDITO -->
								<div class="col-lg-9 col-12" id="pagoCredito">
									<div class="panel panel-default" >
										<div class="panel-heading">
											<div class="row ">
												<div class="col-md-12">
													<input type="text" class="form-control" id="numeroTarjeta" placeholder="Numero de Tarjeta" maxLength="21" />
												</div>
											</div>
											<div class="row ">
												<div class="col-md-4 col-sm-4 col-xs-4">
													<span class="help-block text-muted small-font" >Mes exp.</span>
													<input type="text" id="mmExp" class="form-control" placeholder="MM" maxLength="2" />
												</div>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<span class="help-block text-muted small-font" >Año exp.</span>
													<input type="text" id="aaExp" class="form-control" placeholder="AA" maxLength="2" />
												</div>
												<div class="col-md-3 col-sm-3 col-xs-3">
													<span class="help-block text-muted small-font" >CCV</span>
													<input type="text" class="form-control" id="ccv" placeholder="CCV" maxLength="4" />
												</div>
												<div class="col-md-2 col-sm-2 col-xs-2">
													<img src="multimedia/tarjeta.png" class="img-rounded" />
												</div>
											</div>
											<div class="row mt-2">
												<div class="col-md-12 pad-adjust">

													<input type="text" class="form-control" id="nombreTitular"placeholder="Nombre del titular" maxLength="21" />
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-6">
													<input type="submit"  class="btn btn-danger" value="CANCELAR" />
												</div>
												<div class="col-6">
													<input type="submit"  class="btn btn-warning btn-block" value="PAGAR" id="tarjetaBoton" onclick="step3(this);" />
												</div>
											</div>

										</div>
									</div>
								</div>

								<div class="col-lg-9 col-12" id="pagoOxxo">
									<div class="row">
										<div class="col-lg-12 col-12"  id="colImgOxxo">
											<img src="multimedia/oxxo.png" id="imgOxxo">
										</div>
										<div class="col-lg-12 col-12">
											<button id="oxxoBoton" type="button" class="btn btn-primary" onclick="step3(this);">Generar Pago</button>
										</div>                                                		
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="row footer mt-3">
				<div class="col-md-6 offset-md-2">
					<div class="row">
						<div class="col-12">
							<div class="row">
								<div class="col-12" id="colAtrasPago">
									<button type="button" class="btn btn-lg btn-primary" onclick="step2Prew();">Atras</button> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="review">
			<div class="row main">
				<div class="col-md-6 offset-md-2">
					<div class="row" id="rowTarjeta">
						<div class="col-lg-12" id="colImgLogo">
							<img src="multimedia/logobillpocket.png" >
						</div>
						<div class="col-lg-12"  id="pagoExitoso">
							<h2 id="hPagoExitoso">PAGO EXITOSO</h2>
						</div>
						<div class="col-lg-12" id="registroUsuario">
							<h6 >Recuerda regristrate en nuestra página para poder administras tus movimientos.</h6>
						</div>
						<div class="col-lg-12" id="colLogoBillpocket">
							<img src="multimedia/logocarita.png" >
						</div>		            
					</div>
					<div class="row" id="rowOxxo">
						<div class='col-lg-12'>
							<div class="row">
								<div class="co-lg-12 col-12">
									<div class="row">
										<div class="col-lg-6">

										</div>
										<div class="col-lg-6">

										</div>		                          
									</div>
								</div>
								<div class="co-lg-12 col-12">
									<div class="row">
										<div class="col-lg-12 mt-3" id="colImgOxxoPago">
											<img src="http://cdn2.dineroenimagen.com/media/dinero/styles/xlarge/public/images/2019/05/que-significa-logo-del-oxxo.jpg" id="imgOxxoPago" >
										</div>		                          
										<div class="col-lg-12" id="colImgCodigo" >
											<img src="https://ztfnews.files.wordpress.com/2015/10/unnamed.jpg" id="imgCodigo">
										</div>
										<div class="col-lg-12" id="codigoBarras">
											<h3></h3>
										</div>	
										<div class="col-lg-12" id="h6Registro">
											<h6>Recuerda regristrate en nuestra página para poder administras tus movimientos.</h6>
										</div>		
									</div>
								</div>		                  
							</div>
						</div>
					</div>					
				</div>
				<div class="col-md-2" id="modalInfomacion">
					<div class="row">
						<div class="co-lg-12">					
							<button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modalInfo" onclick="obtenerInfo();">Info Cliente</button>
						</div>
					</div>
				</div>				
			</div>
		</div>



		<div class="modal fade" id="modalMenu" data-backdrop="static">
			<div class="modal-dialog modal-lg" role="document" id="modalMenu">
				<div class="modal-content LM">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">PRODUCTOS</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" id="spanClose">×</span>
						</button>
					</div>
					<hr>
					<div class="modal-body-Menu">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-4 cardContainer">
								<div class="card LM">
									<div class="front">
										<div class="card-body">
											<div class="row">
												<div class="col-12 modalColImg">
													<img src="multimedia/billpocket.jpg" class="modalImgProduct">
												</div>
												<div class="col-12">
													<span id="spanPrecio" >$99 mxn </span>
												</div>
												<div class="col-12">
													<a href="#" id="buttonProducto1" class="btn btn-outline-success 1" data-dismiss="modal" onclick="menuList(this);">Elegir</a> 
												</div>                                	 	                                  	 	
											</div>
										</div>
									</div>
									<div class="back">
										<div class="content">
											<h3 class="cardTitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut congue diam. Pellentesque eu tincidunt nibh. Integer a egestas metus. Curabitur a sagittis justo, id ultricies odio. Nunc dapibus eu est eget bibendum. Nam dignissim felis nisl, in sodales lectus vulputate at. Phasellus in sodales ante. In id blandit ex, quis sagittis neque. </h3>
											<br>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-4 cardContainer">
								<div class="card LM">
									<div class="front">
										<div class="card-body">
											<div class="row">
												<div class="col-12 modalColImg">
													<img src="multimedia/billpocket.jpg" class="modalImgProduct">
												</div>
												<div class="col-12">
													<span id="spanPrecio">$199 mxn </span>
												</div>
												<div class="col-12">
													<a href="#" id="buttonProducto2" class="btn btn-outline-success 2"data-dismiss="modal" name="hola" onclick="menuList(this);">Elegir</a> 
												</div>                                	 	                                  	 	
											</div>
										</div>
									</div>
									<div class="back">
										<div class="content">
											<h3 class="cardTitle" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut congue diam. Pellentesque eu tincidunt nibh. Integer a egestas metus. Curabitur a sagittis justo, id ultricies odio. Nunc dapibus eu est eget bibendum. Nam dignissim felis nisl, in sodales lectus vulputate at. Phasellus in sodales ante. In id blandit ex, quis sagittis neque. </h3>
											<br>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-4 cardContainer">
								<div class="card LM">
									<div class="front">
										<div class="card-body">
											<div class="row">
												<div class="col-12 modalColImg">
													<img src="multimedia/billpocket.jpg" class="modalImgProduct">
												</div>
												<div class="col-12">
													<span id="spanPrecio">$299 mxn </span>
												</div>
												<div class="col-12">
													<a href="#" id="buttonProducto3" class="btn btn-outline-success 3"  data-dismiss="modal" onclick="menuList(this);">Elegir</a> 
												</div>                                	 	                                  	 	
											</div>
										</div>
									</div>
									<div class="back">
										<div class="content">
											<h3 class="cardTitle" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut congue diam. Pellentesque eu tincidunt nibh. Integer a egestas metus. Curabitur a sagittis justo, id ultricies odio. Nunc dapibus eu est eget bibendum. Nam dignissim felis nisl, in sodales lectus vulputate at. Phasellus in sodales ante. In id blandit ex, quis sagittis neque. </h3>
											<br>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="modal fade" id="modalInfo" data-backdrop="static">
			<div class="modal-dialog modal-lg" role="document" id="modalInfo">
				<div class="modal-content LM">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Informacion del cliennte</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" id="spanClose">×</span>
						</button>
					</div>
					<hr>
					<div class="modal-body-Menu" id="modalInfoCliente">
						
					</div>
				</div>
			</div>
		</div>
	</div>
