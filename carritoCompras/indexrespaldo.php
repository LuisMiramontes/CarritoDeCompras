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


</head>
<body>


<div class="row head">
		<div class="col-md-6 offset-md-2">
			<div class="md-stepper-horizontal orange">
				<div class="md-step active" id="active1" onclick="step1Prew();">
					<div class="md-step-circle"><span>1</span></div>
					<div class="md-step-title">Checkout</div>
					<div class="md-step-bar-left" id="left1"></div>
					<div class="md-step-bar-right" id="right1" style=""></div>
				</div>
				<div class="md-step" id="active2" onclick="step1();">
					<div class="md-step-circle"><span>2</span></div>
					<div class="md-step-title">Shipping</div>
					<div class="md-step-optional">Optional</div>
					<div class="md-step-bar-left" id="left2" style=""></div>
					<div class="md-step-bar-right" id="right2"></div>
				</div>
				<div class="md-step" id="active3">
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
		<div class="col-md-2" style="border: .5px solid;margin-top: 20px;background-color: rgba(211,211,211,0.2);text-align:center;border-radius:10px;margin-bottom: 15px;" id="infoContacto">
		 <p style="margin-top:20px;" id="infoPanelTitulo">¿Alguna duda? contactanos:</p><p id="infoPanelContenido"><u>+52 3310902421</u></p>
		 </div>
	</div>
	
	
	<!-- MENU COMPRA--->
	<div id="compra" style="display: block;">
		<div class="row main">
			<div class="col-md-6 offset-md-2">
					<h5 class="card-header" style="background-color:#00ade6;color:white;">PRODUCTOS </h5>
					<div class="card-body" style="padding:0;">
						<ul class="list-group list-group-flush">
							<li class="list-group-item bg-light">
								<div class="row" style="/*! background-color: aliceblue; */">
									<div class="col-3 col-lg-3">
										<div class="row">
											<div class="col-12">
												<img src="https://www.gdltours.com/imagenes/tequila-express-sauza-agaves.jpg" style="width:200px;height: 250px;" id="imgCard"> 
											</div>
											<div class="col-12" id="divImgPrecio">
												<span><b>Subtotal : 990mxn</b></span>
											</div>
										</div>
									</div>
									<!-- DIV TITULO CARD  -->
									<div class="col-lg-12 col-9" id="tituloCel">
										<h3 style="text-align: left;" id="h3Tittle">Tour VIP Casa José Cuervo Reserva de la Familia </h3>
								   </div>
								   
											<!--   -->
								<div class="col-lg-9 col-12" style="text-align:center;">
										<div class="row">
								   <div class="col-lg-12 col-9" id="tituloPC">
										<h3 style="text-align: left;" id="h3Tittle">Tour VIP Casa José Cuervo Reserva de la Familia </h3>
								   </div>
											<div class="col-12">
												<div class="row">
													<div class="col-12 col-lg-4">
														<!-- DIVS para personas  -->
														<div class="row">
															<div class="col-lg-12 col-6">
																<div class="row"> 
																	<div style="text-align: center;" class="col-12 col-lg-8">
																		<span><b>Adultos</b></span>
																	</div>
																	<div class="col-12 col-lg-8">
                                                                      <div class="input-stepper">
                                                                        <button class="minus" style="margin-bottom:5px;" onclick="minusAdultoPrice();"><i class="fa fa-minus"></i></button>
                                                                        <input type="text" value="1" onfocus="this.blur()" id="inputAdulto">
                                                                        <button class="plus" style="margin-bottom:5px;"><i class="fa fa-plus" onclick="plusAdultoPrice();"></i></button>
                                                                      </div>
																	</div>
																</div> 
															</div>
															<div class="col-lg-12 col-6">
																<div class="row">
																	<div style="text-align: center;" class="col-12 col-lg-8">
																		<span><b>Menores</b></span>
																	</div>
																	<div class="col-12 col-lg-8">
                                                                      <div class="input-stepper">
                                                                        <button class="minus" style="margin-bottom:5px;" onclick="minusMenorPrice();" disabled=""><i class="fa fa-minus"></i></button>
                                                                        <input type="text" value="0" onfocus="this.blur()" id="inputMenor">
                                                                        <button class="plus" style="margin-bottom:5px;" onclick="plusMenorPrice();"><i class="fa fa-plus"></i></button>
                                                                      </div>
																	</div>
																</div>
															</div>
														</div>
														<!--   -->
													</div>
													<!--  DIV FECHA -->
													<div class="col-6 col-lg-3" style="text-align:center;" id="divDate">
														<div class="row">
															<div class="col-lg-12 col-12" id="colFecha">
																<span><b>Fecha</b></span>
															</div>
															<div class="col-lg-12 col-12" style="justify-content: center;display: flex;">
															 <input type="submit" class="form-control" id="dateForm" data-toggle="modal" data-target="#myModal" value="dd/mm/aaaa">
															</div>
														</div>
													</div>
													<!--   -->
													<div style="text-align:right;" id="divDatosPrecio" class="col-6 col-lg-4">
													    <div class="row">
													        <div style="/*! background-color: gainsboro; */" class="col-12">
													          <span>
										                          <b>Subtotal</b><br>
										                      </span>
										                          <span id="subTotal">
													              <b>990mxn</b>
													              </span>  
													          <span id="precioOculto" style="display:none;font-size:20px;">
													              <b>990mxn</b>
													           </span>
													        </div>
													        <div style="/*! background-color: gainsboro; *" class="col-12" id="extrasList" data-target="#menuList" data-toggle="modal">
													          <span style="display:none;"></span>  
													        </div>
													    </div>
													</div><div id="botones" style="margin-top:0.5rem;/*! background-color: lawngreen; */" class="col-12">
														<div class="row" style="justify-content: center;">
															<div class="col-5">
															   <div class="row">
															       <div class="col-12" data-toggle="modal" data-target="#modalMenu" style="cursor:pointer;background-color: white;color: wheat;/*! width: 51%; */borde: 1px solid white;border: 1px solid darkgray;border-radius: 5px;width: 128px;">
														               <span style="color:darkgray;">Extras  </span><i class="fas fa-utensils" style="color: darkgray;"></i>
															       </div>
															   </div>
															</div><div class="col-1">
															</div>
															<div class="col-5">
															   <div class="row">
															       <div class="col-12" style="background-color: white;/*! width: 48%; */border-color: white;border: 1px solid darkgray;/*! margin-top: 0%; */border-radius: 5px;/*! margin-left: 3px; */" id="buttonDelete" onclick="deleteButton();">
                                                                         <span style="color:darkgray;">Quitar  </span><i class="fas fa-trash-alt" style="color: darkgray;"></i>
															       </div>
															   </div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
							   </div>
							</li>
							<li class="list-group-item bg-light">
								<div class="row" style="/*! background-color: aliceblue; */">
									<div class="col-3 col-lg-3">
										<div class="row">
											<div class="col-12">
												<img src="https://www.gdltours.com/imagenes/guadalajara-precios-que-hacer.jpg" style="width:200px;height: 250px;" id="imgCard"> 
											</div>
											<div class="col-12" id="divImgPrecio">
												<span><b>Subtotal : 590mxn</b></span>
											</div>
										</div>
									</div>
									<!-- DIV TITULO CARD  -->
									<div class="col-lg-12 col-9" id="tituloCel">
										<h3 style="text-align: left;" id="h3Tittle">Tour Ciudad Guadalajara</h3>
								   </div>
								   
											<!--   -->
									<div class="col-lg-9 col-12" style="text-align:center;">
										<div class="row">
								   <div class="col-lg-12 col-9" id="tituloPC">
										<h3 style="text-align: left;" id="h3Tittle">Tour Ciudad Guadalajara</h3>
								   </div>
											<div class="col-12">
												<div class="row">
													<div class="col-12 col-lg-4">
														<!-- DIVS para personas  -->
														<div class="row">
															<div class="col-lg-12 col-6">
																<div class="row"> 
																	<div style="text-align: center;" class="col-12 col-lg-8">
																		<span><b>Adultos</b></span>
																	</div>
																	<div class="col-12 col-lg-8">
                                                                      <div class="input-stepper">
                                                                        <button class="minus" style="margin-bottom:5px;"><i class="fa fa-minus"></i></button>
                                                                        <input type="text" value="1">
                                                                        <button class="plus" style="margin-bottom:5px;"><i class="fa fa-plus"></i></button>
                                                                      </div>
																	</div>
																</div> 
															</div>
															<div class="col-lg-12 col-6">
																<div class="row">
																	<div style="text-align: center;" class="col-12 col-lg-8">
																		<span><b>Menores</b></span>
																	</div>
																	<div class="col-12 col-lg-8">
                                                                      <div class="input-stepper">
                                                                        <button class="minus" style="margin-bottom:5px;" disabled=""><i class="fa fa-minus"></i></button>
                                                                        <input type="text" value="0">
                                                                        <button class="plus" style="margin-bottom:5px;"><i class="fa fa-plus"></i></button>
                                                                      </div>
																	</div>
																</div>
															</div>
														</div>
														<!--   -->
													</div>
													<!--  DIV FECHA -->
													<div class="col-6 col-lg-3" style="text-align:center;" id="divDate">
														<div class="row">
															<div class="col-lg-12 col-12" id="colFecha">
																<span><b>Fecha</b></span>
															</div>
															<div class="col-lg-12 col-12" style="justify-content: center;display: flex;">
															<input type="text" class="form-control mask-date" id="input-date" value="2019-10-29">
															</div>
														</div>
													</div>
													<!--   -->
													<div style="text-align:right;" id="divDatosPrecio" class="col-6 col-lg-4">
													    <div class="row">
													        <div style="/*! background-color: gainsboro; */" class="col-12">
													          <span><b>Subtotal : 590mxn</b></span>  
													        </div>
													    </div>
													</div><div id="botones" style="margin-top:0.5rem;/*! background-color: lawngreen; */" class="col-12">
														<div class="row" style="justify-content: center;">
															<div class="col-5">
															   <div class="row">
															       <div class="col-12" data-toggle="modal" data-target="#modalMenu" style="cursor:pointer;background-color: white;color: wheat;/*! width: 51%; */borde: 1px solid white;border: 1px solid darkgray;border-radius: 5px;width: 128px;">
														               <span style="color:darkgray;">Extras  </span><i class="fas fa-utensils" style="color: darkgray;"></i>
															       </div>
															   </div>
															</div><div class="col-1">
															   
															</div>
															<div class="col-5">
															   <div class="row">
															       <div class="col-12" style="background-color: white;/*! width: 48%; */border-color: white;border: 1px solid darkgray;/*! margin-top: 0%; */border-radius: 5px;/*! margin-left: 3px; */" id="buttonDelete">
                                                                      <span style="color:darkgray;">Quitar  </span><i class="fas fa-trash-alt" style="color: darkgray;"></i>
															       </div>
															   </div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul> 
					</div>
			</div>
			<div class="col-md-2" id="divPagos" style="border: .5px solid;background-image: url('https://www.elauditor.com.ar/media/wysiwyg/mercadopago.jpg');height: 384px;border-radius:10px;">
				
			</div>
		</div>
		<div class="row footer mt-3">
			<div class="col-md-6 offset-md-2" style="justify-content: right;display: flex;">
				<button type="button" class="btn btn-lg btn-primary" onclick="step1();">Siguiente</button>
			</div>
		</div>
	</div>
	
	<!-- MENU DATOS--->

	<div id="datos" style="display: none;">
		<div class="row main">
			<div class="col-md-6 offset-md-2">
				<div class="card">
					<h5 class="card-header" style="background-color:#001C63;color:white;">SHOPPING BAG </h5>
					<div class="card-body">
						<div class="row py-5 p-4 bg-white rounded">
							<div class="col-lg-6">
								<div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Informacion Personal</div>
								<div class="p-4">
									<span>Nombre</span>
									<input type="text" class="form-control">
									<span>Apellido</span>
									<input type="text" class="form-control">
									<div class="form-group" id="phone-container">
										<label class="control-label" id="label-phone" for="phone" name="on2" value="Número de Teléfono Celular">Teléfono/Celular:</label>
										<div class="intl-tel-input allow-dropdown"><div class="flag-container">
										    <div class="selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0" title="Mexico (México): +52">
										        <div class="iti-flag mx"></div>
										        <div class="iti-arrow"></div></div><ul class="country-list hide" id="country-listbox" aria-expanded="false" role="listbox" aria-activedescendant="iti-item-mx">
										            <li class="country preferred active" tabindex="-1" id="iti-item-mx" role="option" data-dial-code="52" data-country-code="mx" aria-selected="true"><div class="flag-box"><div class="iti-flag mx"></div></div><span class="country-name">Mexico (México)</span><span class="dial-code">+52</span></li><li class="country preferred" tabindex="-1" id="iti-item-us" role="option" data-dial-code="1" data-country-code="us"><div class="flag-box"><div class="iti-flag us"></div></div><span class="country-name">United States</span><span class="dial-code">+1</span>
										            </li>
										            <li class="divider" role="separator" aria-disabled="true"></li><li class="country standard" tabindex="-1" id="iti-item-af" role="option" data-dial-code="93" data-country-code="af"><div class="flag-box"><div class="iti-flag af"></div></div><span class="country-name">Afghanistan (‫افغانستان‬‎)</span><span class="dial-code">+93</span></li><li class="country standard" tabindex="-1" id="iti-item-al" role="option" data-dial-code="355" data-country-code="al"><div class="flag-box"><div class="iti-flag al"></div></div><span class="country-name">Albania (Shqipëri)</span><span class="dial-code">+355</span></li><li class="country standard" tabindex="-1" id="iti-item-dz" role="option" data-dial-code="213" data-country-code="dz"><div class="flag-box"><div class="iti-flag dz"></div></div><span class="country-name">Algeria (‫الجزائر‬‎)</span><span class="dial-code">+213</span></li><li class="country standard" tabindex="-1" id="iti-item-as" role="option" data-dial-code="1684" data-country-code="as"><div class="flag-box"><div class="iti-flag as"></div></div><span class="country-name">American Samoa</span><span class="dial-code">+1684</span></li><li class="country standard" tabindex="-1" id="iti-item-ad" role="option" data-dial-code="376" data-country-code="ad"><div class="flag-box"><div class="iti-flag ad"></div></div><span class="country-name">Andorra</span><span class="dial-code">+376</span></li><li class="country standard" tabindex="-1" id="iti-item-ao" role="option" data-dial-code="244" data-country-code="ao"><div class="flag-box"><div class="iti-flag ao"></div></div><span class="country-name">Angola</span><span class="dial-code">+244</span></li><li class="country standard" tabindex="-1" id="iti-item-ai" role="option" data-dial-code="1264" data-country-code="ai"><div class="flag-box"><div class="iti-flag ai"></div></div><span class="country-name">Anguilla</span><span class="dial-code">+1264</span></li><li class="country standard" tabindex="-1" id="iti-item-ag" role="option" data-dial-code="1268" data-country-code="ag"><div class="flag-box"><div class="iti-flag ag"></div></div><span class="country-name">Antigua and Barbuda</span><span class="dial-code">+1268</span></li><li class="country standard" tabindex="-1" id="iti-item-ar" role="option" data-dial-code="54" data-country-code="ar"><div class="flag-box"><div class="iti-flag ar"></div></div><span class="country-name">Argentina</span><span class="dial-code">+54</span></li><li class="country standard" tabindex="-1" id="iti-item-am" role="option" data-dial-code="374" data-country-code="am"><div class="flag-box"><div class="iti-flag am"></div></div><span class="country-name">Armenia (Հայաստան)</span><span class="dial-code">+374</span></li><li class="country standard" tabindex="-1" id="iti-item-aw" role="option" data-dial-code="297" data-country-code="aw"><div class="flag-box"><div class="iti-flag aw"></div></div><span class="country-name">Aruba</span><span class="dial-code">+297</span></li><li class="country standard" tabindex="-1" id="iti-item-au" role="option" data-dial-code="61" data-country-code="au"><div class="flag-box"><div class="iti-flag au"></div></div><span class="country-name">Australia</span><span class="dial-code">+61</span></li><li class="country standard" tabindex="-1" id="iti-item-at" role="option" data-dial-code="43" data-country-code="at"><div class="flag-box"><div class="iti-flag at"></div></div><span class="country-name">Austria (Österreich)</span><span class="dial-code">+43</span></li><li class="country standard" tabindex="-1" id="iti-item-az" role="option" data-dial-code="994" data-country-code="az"><div class="flag-box"><div class="iti-flag az"></div></div><span class="country-name">Azerbaijan (Azərbaycan)</span><span class="dial-code">+994</span></li><li class="country standard" tabindex="-1" id="iti-item-bs" role="option" data-dial-code="1242" data-country-code="bs"><div class="flag-box"><div class="iti-flag bs"></div></div><span class="country-name">Bahamas</span><span class="dial-code">+1242</span></li><li class="country standard" tabindex="-1" id="iti-item-bh" role="option" data-dial-code="973" data-country-code="bh"><div class="flag-box"><div class="iti-flag bh"></div></div><span class="country-name">Bahrain (‫البحرين‬‎)</span><span class="dial-code">+973</span></li><li class="country standard" tabindex="-1" id="iti-item-bd" role="option" data-dial-code="880" data-country-code="bd"><div class="flag-box"><div class="iti-flag bd"></div></div><span class="country-name">Bangladesh (বাংলাদেশ)</span><span class="dial-code">+880</span></li><li class="country standard" tabindex="-1" id="iti-item-bb" role="option" data-dial-code="1246" data-country-code="bb"><div class="flag-box"><div class="iti-flag bb"></div></div><span class="country-name">Barbados</span><span class="dial-code">+1246</span></li><li class="country standard" tabindex="-1" id="iti-item-by" role="option" data-dial-code="375" data-country-code="by"><div class="flag-box"><div class="iti-flag by"></div></div><span class="country-name">Belarus (Беларусь)</span><span class="dial-code">+375</span></li><li class="country standard" tabindex="-1" id="iti-item-be" role="option" data-dial-code="32" data-country-code="be"><div class="flag-box"><div class="iti-flag be"></div></div><span class="country-name">Belgium (België)</span><span class="dial-code">+32</span></li><li class="country standard" tabindex="-1" id="iti-item-bz" role="option" data-dial-code="501" data-country-code="bz"><div class="flag-box"><div class="iti-flag bz"></div></div><span class="country-name">Belize</span><span class="dial-code">+501</span></li><li class="country standard" tabindex="-1" id="iti-item-bj" role="option" data-dial-code="229" data-country-code="bj"><div class="flag-box"><div class="iti-flag bj"></div></div><span class="country-name">Benin (Bénin)</span><span class="dial-code">+229</span></li><li class="country standard" tabindex="-1" id="iti-item-bm" role="option" data-dial-code="1441" data-country-code="bm"><div class="flag-box"><div class="iti-flag bm"></div></div><span class="country-name">Bermuda</span><span class="dial-code">+1441</span></li><li class="country standard" tabindex="-1" id="iti-item-bt" role="option" data-dial-code="975" data-country-code="bt"><div class="flag-box"><div class="iti-flag bt"></div></div><span class="country-name">Bhutan (འབྲུག)</span><span class="dial-code">+975</span></li><li class="country standard" tabindex="-1" id="iti-item-bo" role="option" data-dial-code="591" data-country-code="bo"><div class="flag-box"><div class="iti-flag bo"></div></div><span class="country-name">Bolivia</span><span class="dial-code">+591</span></li><li class="country standard" tabindex="-1" id="iti-item-ba" role="option" data-dial-code="387" data-country-code="ba"><div class="flag-box"><div class="iti-flag ba"></div></div><span class="country-name">Bosnia and Herzegovina (Босна и Херцеговина)</span><span class="dial-code">+387</span></li><li class="country standard" tabindex="-1" id="iti-item-bw" role="option" data-dial-code="267" data-country-code="bw"><div class="flag-box"><div class="iti-flag bw"></div></div><span class="country-name">Botswana</span><span class="dial-code">+267</span></li><li class="country standard" tabindex="-1" id="iti-item-br" role="option" data-dial-code="55" data-country-code="br"><div class="flag-box"><div class="iti-flag br"></div></div><span class="country-name">Brazil (Brasil)</span><span class="dial-code">+55</span></li><li class="country standard" tabindex="-1" id="iti-item-io" role="option" data-dial-code="246" data-country-code="io"><div class="flag-box"><div class="iti-flag io"></div></div><span class="country-name">British Indian Ocean Territory</span><span class="dial-code">+246</span></li><li class="country standard" tabindex="-1" id="iti-item-vg" role="option" data-dial-code="1284" data-country-code="vg"><div class="flag-box"><div class="iti-flag vg"></div></div><span class="country-name">British Virgin Islands</span><span class="dial-code">+1284</span></li><li class="country standard" tabindex="-1" id="iti-item-bn" role="option" data-dial-code="673" data-country-code="bn"><div class="flag-box"><div class="iti-flag bn"></div></div><span class="country-name">Brunei</span><span class="dial-code">+673</span></li><li class="country standard" tabindex="-1" id="iti-item-bg" role="option" data-dial-code="359" data-country-code="bg"><div class="flag-box"><div class="iti-flag bg"></div></div><span class="country-name">Bulgaria (България)</span><span class="dial-code">+359</span></li><li class="country standard" tabindex="-1" id="iti-item-bf" role="option" data-dial-code="226" data-country-code="bf"><div class="flag-box"><div class="iti-flag bf"></div></div><span class="country-name">Burkina Faso</span><span class="dial-code">+226</span></li><li class="country standard" tabindex="-1" id="iti-item-bi" role="option" data-dial-code="257" data-country-code="bi"><div class="flag-box"><div class="iti-flag bi"></div></div><span class="country-name">Burundi (Uburundi)</span><span class="dial-code">+257</span></li><li class="country standard" tabindex="-1" id="iti-item-kh" role="option" data-dial-code="855" data-country-code="kh"><div class="flag-box"><div class="iti-flag kh"></div></div><span class="country-name">Cambodia (កម្ពុជា)</span><span class="dial-code">+855</span></li><li class="country standard" tabindex="-1" id="iti-item-cm" role="option" data-dial-code="237" data-country-code="cm"><div class="flag-box"><div class="iti-flag cm"></div></div><span class="country-name">Cameroon (Cameroun)</span><span class="dial-code">+237</span></li><li class="country standard" tabindex="-1" id="iti-item-ca" role="option" data-dial-code="1" data-country-code="ca"><div class="flag-box"><div class="iti-flag ca"></div></div><span class="country-name">Canada</span><span class="dial-code">+1</span></li><li class="country standard" tabindex="-1" id="iti-item-cv" role="option" data-dial-code="238" data-country-code="cv"><div class="flag-box"><div class="iti-flag cv"></div></div><span class="country-name">Cape Verde (Kabu Verdi)</span><span class="dial-code">+238</span></li><li class="country standard" tabindex="-1" id="iti-item-bq" role="option" data-dial-code="599" data-country-code="bq"><div class="flag-box"><div class="iti-flag bq"></div></div><span class="country-name">Caribbean Netherlands</span><span class="dial-code">+599</span></li><li class="country standard" tabindex="-1" id="iti-item-ky" role="option" data-dial-code="1345" data-country-code="ky"><div class="flag-box"><div class="iti-flag ky"></div></div><span class="country-name">Cayman Islands</span><span class="dial-code">+1345</span></li><li class="country standard" tabindex="-1" id="iti-item-cf" role="option" data-dial-code="236" data-country-code="cf"><div class="flag-box"><div class="iti-flag cf"></div></div><span class="country-name">Central African Republic (République centrafricaine)</span><span class="dial-code">+236</span></li><li class="country standard" tabindex="-1" id="iti-item-td" role="option" data-dial-code="235" data-country-code="td"><div class="flag-box"><div class="iti-flag td"></div></div><span class="country-name">Chad (Tchad)</span><span class="dial-code">+235</span></li><li class="country standard" tabindex="-1" id="iti-item-cl" role="option" data-dial-code="56" data-country-code="cl"><div class="flag-box"><div class="iti-flag cl"></div></div><span class="country-name">Chile</span><span class="dial-code">+56</span></li><li class="country standard" tabindex="-1" id="iti-item-cn" role="option" data-dial-code="86" data-country-code="cn"><div class="flag-box"><div class="iti-flag cn"></div></div><span class="country-name">China (中国)</span><span class="dial-code">+86</span></li><li class="country standard" tabindex="-1" id="iti-item-cx" role="option" data-dial-code="61" data-country-code="cx"><div class="flag-box"><div class="iti-flag cx"></div></div><span class="country-name">Christmas Island</span><span class="dial-code">+61</span></li><li class="country standard" tabindex="-1" id="iti-item-cc" role="option" data-dial-code="61" data-country-code="cc"><div class="flag-box"><div class="iti-flag cc"></div></div><span class="country-name">Cocos (Keeling) Islands</span><span class="dial-code">+61</span></li><li class="country standard" tabindex="-1" id="iti-item-co" role="option" data-dial-code="57" data-country-code="co"><div class="flag-box"><div class="iti-flag co"></div></div><span class="country-name">Colombia</span><span class="dial-code">+57</span></li><li class="country standard" tabindex="-1" id="iti-item-km" role="option" data-dial-code="269" data-country-code="km"><div class="flag-box"><div class="iti-flag km"></div></div><span class="country-name">Comoros (‫جزر القمر‬‎)</span><span class="dial-code">+269</span></li><li class="country standard" tabindex="-1" id="iti-item-cd" role="option" data-dial-code="243" data-country-code="cd"><div class="flag-box"><div class="iti-flag cd"></div></div><span class="country-name">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</span><span class="dial-code">+243</span></li><li class="country standard" tabindex="-1" id="iti-item-cg" role="option" data-dial-code="242" data-country-code="cg"><div class="flag-box"><div class="iti-flag cg"></div></div><span class="country-name">Congo (Republic) (Congo-Brazzaville)</span><span class="dial-code">+242</span></li><li class="country standard" tabindex="-1" id="iti-item-ck" role="option" data-dial-code="682" data-country-code="ck"><div class="flag-box"><div class="iti-flag ck"></div></div><span class="country-name">Cook Islands</span><span class="dial-code">+682</span></li><li class="country standard" tabindex="-1" id="iti-item-cr" role="option" data-dial-code="506" data-country-code="cr"><div class="flag-box"><div class="iti-flag cr"></div></div><span class="country-name">Costa Rica</span><span class="dial-code">+506</span></li><li class="country standard" tabindex="-1" id="iti-item-ci" role="option" data-dial-code="225" data-country-code="ci"><div class="flag-box"><div class="iti-flag ci"></div></div><span class="country-name">Côte d’Ivoire</span><span class="dial-code">+225</span></li><li class="country standard" tabindex="-1" id="iti-item-hr" role="option" data-dial-code="385" data-country-code="hr"><div class="flag-box"><div class="iti-flag hr"></div></div><span class="country-name">Croatia (Hrvatska)</span><span class="dial-code">+385</span></li><li class="country standard" tabindex="-1" id="iti-item-cu" role="option" data-dial-code="53" data-country-code="cu"><div class="flag-box"><div class="iti-flag cu"></div></div><span class="country-name">Cuba</span><span class="dial-code">+53</span></li><li class="country standard" tabindex="-1" id="iti-item-cw" role="option" data-dial-code="599" data-country-code="cw"><div class="flag-box"><div class="iti-flag cw"></div></div><span class="country-name">Curaçao</span><span class="dial-code">+599</span></li><li class="country standard" tabindex="-1" id="iti-item-cy" role="option" data-dial-code="357" data-country-code="cy"><div class="flag-box"><div class="iti-flag cy"></div></div><span class="country-name">Cyprus (Κύπρος)</span><span class="dial-code">+357</span></li><li class="country standard" tabindex="-1" id="iti-item-cz" role="option" data-dial-code="420" data-country-code="cz"><div class="flag-box"><div class="iti-flag cz"></div></div><span class="country-name">Czech Republic (Česká republika)</span><span class="dial-code">+420</span></li><li class="country standard" tabindex="-1" id="iti-item-dk" role="option" data-dial-code="45" data-country-code="dk"><div class="flag-box"><div class="iti-flag dk"></div></div><span class="country-name">Denmark (Danmark)</span><span class="dial-code">+45</span></li><li class="country standard" tabindex="-1" id="iti-item-dj" role="option" data-dial-code="253" data-country-code="dj"><div class="flag-box"><div class="iti-flag dj"></div></div><span class="country-name">Djibouti</span><span class="dial-code">+253</span></li><li class="country standard" tabindex="-1" id="iti-item-dm" role="option" data-dial-code="1767" data-country-code="dm"><div class="flag-box"><div class="iti-flag dm"></div></div><span class="country-name">Dominica</span><span class="dial-code">+1767</span></li><li class="country standard" tabindex="-1" id="iti-item-do" role="option" data-dial-code="1" data-country-code="do"><div class="flag-box"><div class="iti-flag do"></div></div><span class="country-name">Dominican Republic (República Dominicana)</span><span class="dial-code">+1</span></li><li class="country standard" tabindex="-1" id="iti-item-ec" role="option" data-dial-code="593" data-country-code="ec"><div class="flag-box"><div class="iti-flag ec"></div></div><span class="country-name">Ecuador</span><span class="dial-code">+593</span></li><li class="country standard" tabindex="-1" id="iti-item-eg" role="option" data-dial-code="20" data-country-code="eg"><div class="flag-box"><div class="iti-flag eg"></div></div><span class="country-name">Egypt (‫مصر‬‎)</span><span class="dial-code">+20</span></li><li class="country standard" tabindex="-1" id="iti-item-sv" role="option" data-dial-code="503" data-country-code="sv"><div class="flag-box"><div class="iti-flag sv"></div></div><span class="country-name">El Salvador</span><span class="dial-code">+503</span></li><li class="country standard" tabindex="-1" id="iti-item-gq" role="option" data-dial-code="240" data-country-code="gq"><div class="flag-box"><div class="iti-flag gq"></div></div><span class="country-name">Equatorial Guinea (Guinea Ecuatorial)</span><span class="dial-code">+240</span></li><li class="country standard" tabindex="-1" id="iti-item-er" role="option" data-dial-code="291" data-country-code="er"><div class="flag-box"><div class="iti-flag er"></div></div><span class="country-name">Eritrea</span><span class="dial-code">+291</span></li><li class="country standard" tabindex="-1" id="iti-item-ee" role="option" data-dial-code="372" data-country-code="ee"><div class="flag-box"><div class="iti-flag ee"></div></div><span class="country-name">Estonia (Eesti)</span><span class="dial-code">+372</span></li><li class="country standard" tabindex="-1" id="iti-item-et" role="option" data-dial-code="251" data-country-code="et"><div class="flag-box"><div class="iti-flag et"></div></div><span class="country-name">Ethiopia</span><span class="dial-code">+251</span></li><li class="country standard" tabindex="-1" id="iti-item-fk" role="option" data-dial-code="500" data-country-code="fk"><div class="flag-box"><div class="iti-flag fk"></div></div><span class="country-name">Falkland Islands (Islas Malvinas)</span><span class="dial-code">+500</span></li><li class="country standard" tabindex="-1" id="iti-item-fo" role="option" data-dial-code="298" data-country-code="fo"><div class="flag-box"><div class="iti-flag fo"></div></div><span class="country-name">Faroe Islands (Føroyar)</span><span class="dial-code">+298</span></li><li class="country standard" tabindex="-1" id="iti-item-fj" role="option" data-dial-code="679" data-country-code="fj"><div class="flag-box"><div class="iti-flag fj"></div></div><span class="country-name">Fiji</span><span class="dial-code">+679</span></li><li class="country standard" tabindex="-1" id="iti-item-fi" role="option" data-dial-code="358" data-country-code="fi"><div class="flag-box"><div class="iti-flag fi"></div></div><span class="country-name">Finland (Suomi)</span><span class="dial-code">+358</span></li><li class="country standard" tabindex="-1" id="iti-item-fr" role="option" data-dial-code="33" data-country-code="fr"><div class="flag-box"><div class="iti-flag fr"></div></div><span class="country-name">France</span><span class="dial-code">+33</span></li><li class="country standard" tabindex="-1" id="iti-item-gf" role="option" data-dial-code="594" data-country-code="gf"><div class="flag-box"><div class="iti-flag gf"></div></div><span class="country-name">French Guiana (Guyane française)</span><span class="dial-code">+594</span></li><li class="country standard" tabindex="-1" id="iti-item-pf" role="option" data-dial-code="689" data-country-code="pf"><div class="flag-box"><div class="iti-flag pf"></div></div><span class="country-name">French Polynesia (Polynésie française)</span><span class="dial-code">+689</span></li><li class="country standard" tabindex="-1" id="iti-item-ga" role="option" data-dial-code="241" data-country-code="ga"><div class="flag-box"><div class="iti-flag ga"></div></div><span class="country-name">Gabon</span><span class="dial-code">+241</span></li><li class="country standard" tabindex="-1" id="iti-item-gm" role="option" data-dial-code="220" data-country-code="gm"><div class="flag-box"><div class="iti-flag gm"></div></div><span class="country-name">Gambia</span><span class="dial-code">+220</span></li><li class="country standard" tabindex="-1" id="iti-item-ge" role="option" data-dial-code="995" data-country-code="ge"><div class="flag-box"><div class="iti-flag ge"></div></div><span class="country-name">Georgia (საქართველო)</span><span class="dial-code">+995</span></li><li class="country standard" tabindex="-1" id="iti-item-de" role="option" data-dial-code="49" data-country-code="de"><div class="flag-box"><div class="iti-flag de"></div></div><span class="country-name">Germany (Deutschland)</span><span class="dial-code">+49</span></li><li class="country standard" tabindex="-1" id="iti-item-gh" role="option" data-dial-code="233" data-country-code="gh"><div class="flag-box"><div class="iti-flag gh"></div></div><span class="country-name">Ghana (Gaana)</span><span class="dial-code">+233</span></li><li class="country standard" tabindex="-1" id="iti-item-gi" role="option" data-dial-code="350" data-country-code="gi"><div class="flag-box"><div class="iti-flag gi"></div></div><span class="country-name">Gibraltar</span><span class="dial-code">+350</span></li><li class="country standard" tabindex="-1" id="iti-item-gr" role="option" data-dial-code="30" data-country-code="gr"><div class="flag-box"><div class="iti-flag gr"></div></div><span class="country-name">Greece (Ελλάδα)</span><span class="dial-code">+30</span></li><li class="country standard" tabindex="-1" id="iti-item-gl" role="option" data-dial-code="299" data-country-code="gl"><div class="flag-box"><div class="iti-flag gl"></div></div><span class="country-name">Greenland (Kalaallit Nunaat)</span><span class="dial-code">+299</span></li><li class="country standard" tabindex="-1" id="iti-item-gd" role="option" data-dial-code="1473" data-country-code="gd"><div class="flag-box"><div class="iti-flag gd"></div></div><span class="country-name">Grenada</span><span class="dial-code">+1473</span></li><li class="country standard" tabindex="-1" id="iti-item-gp" role="option" data-dial-code="590" data-country-code="gp"><div class="flag-box"><div class="iti-flag gp"></div></div><span class="country-name">Guadeloupe</span><span class="dial-code">+590</span></li><li class="country standard" tabindex="-1" id="iti-item-gu" role="option" data-dial-code="1671" data-country-code="gu"><div class="flag-box"><div class="iti-flag gu"></div></div><span class="country-name">Guam</span><span class="dial-code">+1671</span></li><li class="country standard" tabindex="-1" id="iti-item-gt" role="option" data-dial-code="502" data-country-code="gt"><div class="flag-box"><div class="iti-flag gt"></div></div><span class="country-name">Guatemala</span><span class="dial-code">+502</span></li><li class="country standard" tabindex="-1" id="iti-item-gg" role="option" data-dial-code="44" data-country-code="gg"><div class="flag-box"><div class="iti-flag gg"></div></div><span class="country-name">Guernsey</span><span class="dial-code">+44</span></li><li class="country standard" tabindex="-1" id="iti-item-gn" role="option" data-dial-code="224" data-country-code="gn"><div class="flag-box"><div class="iti-flag gn"></div></div><span class="country-name">Guinea (Guinée)</span><span class="dial-code">+224</span></li><li class="country standard" tabindex="-1" id="iti-item-gw" role="option" data-dial-code="245" data-country-code="gw"><div class="flag-box"><div class="iti-flag gw"></div></div><span class="country-name">Guinea-Bissau (Guiné Bissau)</span><span class="dial-code">+245</span></li><li class="country standard" tabindex="-1" id="iti-item-gy" role="option" data-dial-code="592" data-country-code="gy"><div class="flag-box"><div class="iti-flag gy"></div></div><span class="country-name">Guyana</span><span class="dial-code">+592</span></li><li class="country standard" tabindex="-1" id="iti-item-ht" role="option" data-dial-code="509" data-country-code="ht"><div class="flag-box"><div class="iti-flag ht"></div></div><span class="country-name">Haiti</span><span class="dial-code">+509</span></li><li class="country standard" tabindex="-1" id="iti-item-hn" role="option" data-dial-code="504" data-country-code="hn"><div class="flag-box"><div class="iti-flag hn"></div></div><span class="country-name">Honduras</span><span class="dial-code">+504</span></li><li class="country standard" tabindex="-1" id="iti-item-hk" role="option" data-dial-code="852" data-country-code="hk"><div class="flag-box"><div class="iti-flag hk"></div></div><span class="country-name">Hong Kong (香港)</span><span class="dial-code">+852</span></li><li class="country standard" tabindex="-1" id="iti-item-hu" role="option" data-dial-code="36" data-country-code="hu"><div class="flag-box"><div class="iti-flag hu"></div></div><span class="country-name">Hungary (Magyarország)</span><span class="dial-code">+36</span></li><li class="country standard" tabindex="-1" id="iti-item-is" role="option" data-dial-code="354" data-country-code="is"><div class="flag-box"><div class="iti-flag is"></div></div><span class="country-name">Iceland (Ísland)</span><span class="dial-code">+354</span></li><li class="country standard" tabindex="-1" id="iti-item-in" role="option" data-dial-code="91" data-country-code="in"><div class="flag-box"><div class="iti-flag in"></div></div><span class="country-name">India (भारत)</span><span class="dial-code">+91</span></li><li class="country standard" tabindex="-1" id="iti-item-id" role="option" data-dial-code="62" data-country-code="id"><div class="flag-box"><div class="iti-flag id"></div></div><span class="country-name">Indonesia</span><span class="dial-code">+62</span></li><li class="country standard" tabindex="-1" id="iti-item-ir" role="option" data-dial-code="98" data-country-code="ir"><div class="flag-box"><div class="iti-flag ir"></div></div><span class="country-name">Iran (‫ایران‬‎)</span><span class="dial-code">+98</span></li><li class="country standard" tabindex="-1" id="iti-item-iq" role="option" data-dial-code="964" data-country-code="iq"><div class="flag-box"><div class="iti-flag iq"></div></div><span class="country-name">Iraq (‫العراق‬‎)</span><span class="dial-code">+964</span></li><li class="country standard" tabindex="-1" id="iti-item-ie" role="option" data-dial-code="353" data-country-code="ie"><div class="flag-box"><div class="iti-flag ie"></div></div><span class="country-name">Ireland</span><span class="dial-code">+353</span></li><li class="country standard" tabindex="-1" id="iti-item-im" role="option" data-dial-code="44" data-country-code="im"><div class="flag-box"><div class="iti-flag im"></div></div><span class="country-name">Isle of Man</span><span class="dial-code">+44</span></li><li class="country standard" tabindex="-1" id="iti-item-il" role="option" data-dial-code="972" data-country-code="il"><div class="flag-box"><div class="iti-flag il"></div></div><span class="country-name">Israel (‫ישראל‬‎)</span><span class="dial-code">+972</span></li><li class="country standard" tabindex="-1" id="iti-item-it" role="option" data-dial-code="39" data-country-code="it"><div class="flag-box"><div class="iti-flag it"></div></div><span class="country-name">Italy (Italia)</span><span class="dial-code">+39</span></li><li class="country standard" tabindex="-1" id="iti-item-jm" role="option" data-dial-code="1" data-country-code="jm"><div class="flag-box"><div class="iti-flag jm"></div></div><span class="country-name">Jamaica</span><span class="dial-code">+1</span></li><li class="country standard" tabindex="-1" id="iti-item-jp" role="option" data-dial-code="81" data-country-code="jp"><div class="flag-box"><div class="iti-flag jp"></div></div><span class="country-name">Japan (日本)</span><span class="dial-code">+81</span></li><li class="country standard" tabindex="-1" id="iti-item-je" role="option" data-dial-code="44" data-country-code="je"><div class="flag-box"><div class="iti-flag je"></div></div><span class="country-name">Jersey</span><span class="dial-code">+44</span></li><li class="country standard" tabindex="-1" id="iti-item-jo" role="option" data-dial-code="962" data-country-code="jo"><div class="flag-box"><div class="iti-flag jo"></div></div><span class="country-name">Jordan (‫الأردن‬‎)</span><span class="dial-code">+962</span></li><li class="country standard" tabindex="-1" id="iti-item-kz" role="option" data-dial-code="7" data-country-code="kz"><div class="flag-box"><div class="iti-flag kz"></div></div><span class="country-name">Kazakhstan (Казахстан)</span><span class="dial-code">+7</span></li><li class="country standard" tabindex="-1" id="iti-item-ke" role="option" data-dial-code="254" data-country-code="ke"><div class="flag-box"><div class="iti-flag ke"></div></div><span class="country-name">Kenya</span><span class="dial-code">+254</span></li><li class="country standard" tabindex="-1" id="iti-item-ki" role="option" data-dial-code="686" data-country-code="ki"><div class="flag-box"><div class="iti-flag ki"></div></div><span class="country-name">Kiribati</span><span class="dial-code">+686</span></li><li class="country standard" tabindex="-1" id="iti-item-xk" role="option" data-dial-code="383" data-country-code="xk"><div class="flag-box"><div class="iti-flag xk"></div></div><span class="country-name">Kosovo</span><span class="dial-code">+383</span></li><li class="country standard" tabindex="-1" id="iti-item-kw" role="option" data-dial-code="965" data-country-code="kw"><div class="flag-box"><div class="iti-flag kw"></div></div><span class="country-name">Kuwait (‫الكويت‬‎)</span><span class="dial-code">+965</span></li><li class="country standard" tabindex="-1" id="iti-item-kg" role="option" data-dial-code="996" data-country-code="kg"><div class="flag-box"><div class="iti-flag kg"></div></div><span class="country-name">Kyrgyzstan (Кыргызстан)</span><span class="dial-code">+996</span></li><li class="country standard" tabindex="-1" id="iti-item-la" role="option" data-dial-code="856" data-country-code="la"><div class="flag-box"><div class="iti-flag la"></div></div><span class="country-name">Laos (ລາວ)</span><span class="dial-code">+856</span></li><li class="country standard" tabindex="-1" id="iti-item-lv" role="option" data-dial-code="371" data-country-code="lv"><div class="flag-box"><div class="iti-flag lv"></div></div><span class="country-name">Latvia (Latvija)</span><span class="dial-code">+371</span></li><li class="country standard" tabindex="-1" id="iti-item-lb" role="option" data-dial-code="961" data-country-code="lb"><div class="flag-box"><div class="iti-flag lb"></div></div><span class="country-name">Lebanon (‫لبنان‬‎)</span><span class="dial-code">+961</span></li><li class="country standard" tabindex="-1" id="iti-item-ls" role="option" data-dial-code="266" data-country-code="ls"><div class="flag-box"><div class="iti-flag ls"></div></div><span class="country-name">Lesotho</span><span class="dial-code">+266</span></li><li class="country standard" tabindex="-1" id="iti-item-lr" role="option" data-dial-code="231" data-country-code="lr"><div class="flag-box"><div class="iti-flag lr"></div></div><span class="country-name">Liberia</span><span class="dial-code">+231</span></li><li class="country standard" tabindex="-1" id="iti-item-ly" role="option" data-dial-code="218" data-country-code="ly"><div class="flag-box"><div class="iti-flag ly"></div></div><span class="country-name">Libya (‫ليبيا‬‎)</span><span class="dial-code">+218</span></li><li class="country standard" tabindex="-1" id="iti-item-li" role="option" data-dial-code="423" data-country-code="li"><div class="flag-box"><div class="iti-flag li"></div></div><span class="country-name">Liechtenstein</span><span class="dial-code">+423</span></li><li class="country standard" tabindex="-1" id="iti-item-lt" role="option" data-dial-code="370" data-country-code="lt"><div class="flag-box"><div class="iti-flag lt"></div></div><span class="country-name">Lithuania (Lietuva)</span><span class="dial-code">+370</span></li><li class="country standard" tabindex="-1" id="iti-item-lu" role="option" data-dial-code="352" data-country-code="lu"><div class="flag-box"><div class="iti-flag lu"></div></div><span class="country-name">Luxembourg</span><span class="dial-code">+352</span></li><li class="country standard" tabindex="-1" id="iti-item-mo" role="option" data-dial-code="853" data-country-code="mo"><div class="flag-box"><div class="iti-flag mo"></div></div><span class="country-name">Macau (澳門)</span><span class="dial-code">+853</span></li><li class="country standard" tabindex="-1" id="iti-item-mk" role="option" data-dial-code="389" data-country-code="mk"><div class="flag-box"><div class="iti-flag mk"></div></div><span class="country-name">Macedonia (FYROM) (Македонија)</span><span class="dial-code">+389</span></li><li class="country standard" tabindex="-1" id="iti-item-mg" role="option" data-dial-code="261" data-country-code="mg"><div class="flag-box"><div class="iti-flag mg"></div></div><span class="country-name">Madagascar (Madagasikara)</span><span class="dial-code">+261</span></li><li class="country standard" tabindex="-1" id="iti-item-mw" role="option" data-dial-code="265" data-country-code="mw"><div class="flag-box"><div class="iti-flag mw"></div></div><span class="country-name">Malawi</span><span class="dial-code">+265</span></li><li class="country standard" tabindex="-1" id="iti-item-my" role="option" data-dial-code="60" data-country-code="my"><div class="flag-box"><div class="iti-flag my"></div></div><span class="country-name">Malaysia</span><span class="dial-code">+60</span></li><li class="country standard" tabindex="-1" id="iti-item-mv" role="option" data-dial-code="960" data-country-code="mv"><div class="flag-box"><div class="iti-flag mv"></div></div><span class="country-name">Maldives</span><span class="dial-code">+960</span></li><li class="country standard" tabindex="-1" id="iti-item-ml" role="option" data-dial-code="223" data-country-code="ml"><div class="flag-box"><div class="iti-flag ml"></div></div><span class="country-name">Mali</span><span class="dial-code">+223</span></li><li class="country standard" tabindex="-1" id="iti-item-mt" role="option" data-dial-code="356" data-country-code="mt"><div class="flag-box"><div class="iti-flag mt"></div></div><span class="country-name">Malta</span><span class="dial-code">+356</span></li><li class="country standard" tabindex="-1" id="iti-item-mh" role="option" data-dial-code="692" data-country-code="mh"><div class="flag-box"><div class="iti-flag mh"></div></div><span class="country-name">Marshall Islands</span><span class="dial-code">+692</span></li><li class="country standard" tabindex="-1" id="iti-item-mq" role="option" data-dial-code="596" data-country-code="mq"><div class="flag-box"><div class="iti-flag mq"></div></div><span class="country-name">Martinique</span><span class="dial-code">+596</span></li><li class="country standard" tabindex="-1" id="iti-item-mr" role="option" data-dial-code="222" data-country-code="mr"><div class="flag-box"><div class="iti-flag mr"></div></div><span class="country-name">Mauritania (‫موريتانيا‬‎)</span><span class="dial-code">+222</span></li><li class="country standard" tabindex="-1" id="iti-item-mu" role="option" data-dial-code="230" data-country-code="mu"><div class="flag-box"><div class="iti-flag mu"></div></div><span class="country-name">Mauritius (Moris)</span><span class="dial-code">+230</span></li><li class="country standard" tabindex="-1" id="iti-item-yt" role="option" data-dial-code="262" data-country-code="yt"><div class="flag-box"><div class="iti-flag yt"></div></div><span class="country-name">Mayotte</span><span class="dial-code">+262</span></li><li class="country standard" tabindex="-1" id="iti-item-mx" role="option" data-dial-code="52" data-country-code="mx"><div class="flag-box"><div class="iti-flag mx"></div></div><span class="country-name">Mexico (México)</span><span class="dial-code">+52</span></li><li class="country standard" tabindex="-1" id="iti-item-fm" role="option" data-dial-code="691" data-country-code="fm"><div class="flag-box"><div class="iti-flag fm"></div></div><span class="country-name">Micronesia</span><span class="dial-code">+691</span></li><li class="country standard" tabindex="-1" id="iti-item-md" role="option" data-dial-code="373" data-country-code="md"><div class="flag-box"><div class="iti-flag md"></div></div><span class="country-name">Moldova (Republica Moldova)</span><span class="dial-code">+373</span></li><li class="country standard" tabindex="-1" id="iti-item-mc" role="option" data-dial-code="377" data-country-code="mc"><div class="flag-box"><div class="iti-flag mc"></div></div><span class="country-name">Monaco</span><span class="dial-code">+377</span></li><li class="country standard" tabindex="-1" id="iti-item-mn" role="option" data-dial-code="976" data-country-code="mn"><div class="flag-box"><div class="iti-flag mn"></div></div><span class="country-name">Mongolia (Монгол)</span><span class="dial-code">+976</span></li><li class="country standard" tabindex="-1" id="iti-item-me" role="option" data-dial-code="382" data-country-code="me"><div class="flag-box"><div class="iti-flag me"></div></div><span class="country-name">Montenegro (Crna Gora)</span><span class="dial-code">+382</span></li><li class="country standard" tabindex="-1" id="iti-item-ms" role="option" data-dial-code="1664" data-country-code="ms"><div class="flag-box"><div class="iti-flag ms"></div></div><span class="country-name">Montserrat</span><span class="dial-code">+1664</span></li><li class="country standard" tabindex="-1" id="iti-item-ma" role="option" data-dial-code="212" data-country-code="ma"><div class="flag-box"><div class="iti-flag ma"></div></div><span class="country-name">Morocco (‫المغرب‬‎)</span><span class="dial-code">+212</span></li><li class="country standard" tabindex="-1" id="iti-item-mz" role="option" data-dial-code="258" data-country-code="mz"><div class="flag-box"><div class="iti-flag mz"></div></div><span class="country-name">Mozambique (Moçambique)</span><span class="dial-code">+258</span></li><li class="country standard" tabindex="-1" id="iti-item-mm" role="option" data-dial-code="95" data-country-code="mm"><div class="flag-box"><div class="iti-flag mm"></div></div><span class="country-name">Myanmar (Burma) (မြန်မာ)</span><span class="dial-code">+95</span></li><li class="country standard" tabindex="-1" id="iti-item-na" role="option" data-dial-code="264" data-country-code="na"><div class="flag-box"><div class="iti-flag na"></div></div><span class="country-name">Namibia (Namibië)</span><span class="dial-code">+264</span></li><li class="country standard" tabindex="-1" id="iti-item-nr" role="option" data-dial-code="674" data-country-code="nr"><div class="flag-box"><div class="iti-flag nr"></div></div><span class="country-name">Nauru</span><span class="dial-code">+674</span></li><li class="country standard" tabindex="-1" id="iti-item-np" role="option" data-dial-code="977" data-country-code="np"><div class="flag-box"><div class="iti-flag np"></div></div><span class="country-name">Nepal (नेपाल)</span><span class="dial-code">+977</span></li><li class="country standard" tabindex="-1" id="iti-item-nl" role="option" data-dial-code="31" data-country-code="nl"><div class="flag-box"><div class="iti-flag nl"></div></div><span class="country-name">Netherlands (Nederland)</span><span class="dial-code">+31</span></li><li class="country standard" tabindex="-1" id="iti-item-nc" role="option" data-dial-code="687" data-country-code="nc"><div class="flag-box"><div class="iti-flag nc"></div></div><span class="country-name">New Caledonia (Nouvelle-Calédonie)</span><span class="dial-code">+687</span></li><li class="country standard" tabindex="-1" id="iti-item-nz" role="option" data-dial-code="64" data-country-code="nz"><div class="flag-box"><div class="iti-flag nz"></div></div><span class="country-name">New Zealand</span><span class="dial-code">+64</span></li><li class="country standard" tabindex="-1" id="iti-item-ni" role="option" data-dial-code="505" data-country-code="ni"><div class="flag-box"><div class="iti-flag ni"></div></div><span class="country-name">Nicaragua</span><span class="dial-code">+505</span></li><li class="country standard" tabindex="-1" id="iti-item-ne" role="option" data-dial-code="227" data-country-code="ne"><div class="flag-box"><div class="iti-flag ne"></div></div><span class="country-name">Niger (Nijar)</span><span class="dial-code">+227</span></li><li class="country standard" tabindex="-1" id="iti-item-ng" role="option" data-dial-code="234" data-country-code="ng"><div class="flag-box"><div class="iti-flag ng"></div></div><span class="country-name">Nigeria</span><span class="dial-code">+234</span></li><li class="country standard" tabindex="-1" id="iti-item-nu" role="option" data-dial-code="683" data-country-code="nu"><div class="flag-box"><div class="iti-flag nu"></div></div><span class="country-name">Niue</span><span class="dial-code">+683</span></li><li class="country standard" tabindex="-1" id="iti-item-nf" role="option" data-dial-code="672" data-country-code="nf"><div class="flag-box"><div class="iti-flag nf"></div></div><span class="country-name">Norfolk Island</span><span class="dial-code">+672</span></li><li class="country standard" tabindex="-1" id="iti-item-kp" role="option" data-dial-code="850" data-country-code="kp"><div class="flag-box"><div class="iti-flag kp"></div></div><span class="country-name">North Korea (조선 민주주의 인민 공화국)</span><span class="dial-code">+850</span></li><li class="country standard" tabindex="-1" id="iti-item-mp" role="option" data-dial-code="1670" data-country-code="mp"><div class="flag-box"><div class="iti-flag mp"></div></div><span class="country-name">Northern Mariana Islands</span><span class="dial-code">+1670</span></li><li class="country standard" tabindex="-1" id="iti-item-no" role="option" data-dial-code="47" data-country-code="no"><div class="flag-box"><div class="iti-flag no"></div></div><span class="country-name">Norway (Norge)</span><span class="dial-code">+47</span></li><li class="country standard" tabindex="-1" id="iti-item-om" role="option" data-dial-code="968" data-country-code="om"><div class="flag-box"><div class="iti-flag om"></div></div><span class="country-name">Oman (‫عُمان‬‎)</span><span class="dial-code">+968</span></li><li class="country standard" tabindex="-1" id="iti-item-pk" role="option" data-dial-code="92" data-country-code="pk"><div class="flag-box"><div class="iti-flag pk"></div></div><span class="country-name">Pakistan (‫پاکستان‬‎)</span><span class="dial-code">+92</span></li><li class="country standard" tabindex="-1" id="iti-item-pw" role="option" data-dial-code="680" data-country-code="pw"><div class="flag-box"><div class="iti-flag pw"></div></div><span class="country-name">Palau</span><span class="dial-code">+680</span></li><li class="country standard" tabindex="-1" id="iti-item-ps" role="option" data-dial-code="970" data-country-code="ps"><div class="flag-box"><div class="iti-flag ps"></div></div><span class="country-name">Palestine (‫فلسطين‬‎)</span><span class="dial-code">+970</span></li><li class="country standard" tabindex="-1" id="iti-item-pa" role="option" data-dial-code="507" data-country-code="pa"><div class="flag-box"><div class="iti-flag pa"></div></div><span class="country-name">Panama (Panamá)</span><span class="dial-code">+507</span></li><li class="country standard" tabindex="-1" id="iti-item-pg" role="option" data-dial-code="675" data-country-code="pg"><div class="flag-box"><div class="iti-flag pg"></div></div><span class="country-name">Papua New Guinea</span><span class="dial-code">+675</span></li><li class="country standard" tabindex="-1" id="iti-item-py" role="option" data-dial-code="595" data-country-code="py"><div class="flag-box"><div class="iti-flag py"></div></div><span class="country-name">Paraguay</span><span class="dial-code">+595</span></li><li class="country standard" tabindex="-1" id="iti-item-pe" role="option" data-dial-code="51" data-country-code="pe"><div class="flag-box"><div class="iti-flag pe"></div></div><span class="country-name">Peru (Perú)</span><span class="dial-code">+51</span></li><li class="country standard" tabindex="-1" id="iti-item-ph" role="option" data-dial-code="63" data-country-code="ph"><div class="flag-box"><div class="iti-flag ph"></div></div><span class="country-name">Philippines</span><span class="dial-code">+63</span></li><li class="country standard" tabindex="-1" id="iti-item-pl" role="option" data-dial-code="48" data-country-code="pl"><div class="flag-box"><div class="iti-flag pl"></div></div><span class="country-name">Poland (Polska)</span><span class="dial-code">+48</span></li><li class="country standard" tabindex="-1" id="iti-item-pt" role="option" data-dial-code="351" data-country-code="pt"><div class="flag-box"><div class="iti-flag pt"></div></div><span class="country-name">Portugal</span><span class="dial-code">+351</span></li><li class="country standard" tabindex="-1" id="iti-item-pr" role="option" data-dial-code="1" data-country-code="pr"><div class="flag-box"><div class="iti-flag pr"></div></div><span class="country-name">Puerto Rico</span><span class="dial-code">+1</span></li><li class="country standard" tabindex="-1" id="iti-item-qa" role="option" data-dial-code="974" data-country-code="qa"><div class="flag-box"><div class="iti-flag qa"></div></div><span class="country-name">Qatar (‫قطر‬‎)</span><span class="dial-code">+974</span></li><li class="country standard" tabindex="-1" id="iti-item-re" role="option" data-dial-code="262" data-country-code="re"><div class="flag-box"><div class="iti-flag re"></div></div><span class="country-name">Réunion (La Réunion)</span><span class="dial-code">+262</span></li><li class="country standard" tabindex="-1" id="iti-item-ro" role="option" data-dial-code="40" data-country-code="ro"><div class="flag-box"><div class="iti-flag ro"></div></div><span class="country-name">Romania (România)</span><span class="dial-code">+40</span></li><li class="country standard" tabindex="-1" id="iti-item-ru" role="option" data-dial-code="7" data-country-code="ru"><div class="flag-box"><div class="iti-flag ru"></div></div><span class="country-name">Russia (Россия)</span><span class="dial-code">+7</span></li><li class="country standard" tabindex="-1" id="iti-item-rw" role="option" data-dial-code="250" data-country-code="rw"><div class="flag-box"><div class="iti-flag rw"></div></div><span class="country-name">Rwanda</span><span class="dial-code">+250</span></li><li class="country standard" tabindex="-1" id="iti-item-bl" role="option" data-dial-code="590" data-country-code="bl"><div class="flag-box"><div class="iti-flag bl"></div></div><span class="country-name">Saint Barthélemy</span><span class="dial-code">+590</span></li><li class="country standard" tabindex="-1" id="iti-item-sh" role="option" data-dial-code="290" data-country-code="sh"><div class="flag-box"><div class="iti-flag sh"></div></div><span class="country-name">Saint Helena</span><span class="dial-code">+290</span></li><li class="country standard" tabindex="-1" id="iti-item-kn" role="option" data-dial-code="1869" data-country-code="kn"><div class="flag-box"><div class="iti-flag kn"></div></div><span class="country-name">Saint Kitts and Nevis</span><span class="dial-code">+1869</span></li><li class="country standard" tabindex="-1" id="iti-item-lc" role="option" data-dial-code="1758" data-country-code="lc"><div class="flag-box"><div class="iti-flag lc"></div></div><span class="country-name">Saint Lucia</span><span class="dial-code">+1758</span></li><li class="country standard" tabindex="-1" id="iti-item-mf" role="option" data-dial-code="590" data-country-code="mf"><div class="flag-box"><div class="iti-flag mf"></div></div><span class="country-name">Saint Martin (Saint-Martin (partie française))</span><span class="dial-code">+590</span></li><li class="country standard" tabindex="-1" id="iti-item-pm" role="option" data-dial-code="508" data-country-code="pm"><div class="flag-box"><div class="iti-flag pm"></div></div><span class="country-name">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</span><span class="dial-code">+508</span></li><li class="country standard" tabindex="-1" id="iti-item-vc" role="option" data-dial-code="1784" data-country-code="vc"><div class="flag-box"><div class="iti-flag vc"></div></div><span class="country-name">Saint Vincent and the Grenadines</span><span class="dial-code">+1784</span></li><li class="country standard" tabindex="-1" id="iti-item-ws" role="option" data-dial-code="685" data-country-code="ws"><div class="flag-box"><div class="iti-flag ws"></div></div><span class="country-name">Samoa</span><span class="dial-code">+685</span></li><li class="country standard" tabindex="-1" id="iti-item-sm" role="option" data-dial-code="378" data-country-code="sm"><div class="flag-box"><div class="iti-flag sm"></div></div><span class="country-name">San Marino</span><span class="dial-code">+378</span></li><li class="country standard" tabindex="-1" id="iti-item-st" role="option" data-dial-code="239" data-country-code="st"><div class="flag-box"><div class="iti-flag st"></div></div><span class="country-name">São Tomé and Príncipe (São Tomé e Príncipe)</span><span class="dial-code">+239</span></li><li class="country standard" tabindex="-1" id="iti-item-sa" role="option" data-dial-code="966" data-country-code="sa"><div class="flag-box"><div class="iti-flag sa"></div></div><span class="country-name">Saudi Arabia (‫المملكة العربية السعودية‬‎)</span><span class="dial-code">+966</span></li><li class="country standard" tabindex="-1" id="iti-item-sn" role="option" data-dial-code="221" data-country-code="sn"><div class="flag-box"><div class="iti-flag sn"></div></div><span class="country-name">Senegal (Sénégal)</span><span class="dial-code">+221</span></li><li class="country standard" tabindex="-1" id="iti-item-rs" role="option" data-dial-code="381" data-country-code="rs"><div class="flag-box"><div class="iti-flag rs"></div></div><span class="country-name">Serbia (Србија)</span><span class="dial-code">+381</span></li><li class="country standard" tabindex="-1" id="iti-item-sc" role="option" data-dial-code="248" data-country-code="sc"><div class="flag-box"><div class="iti-flag sc"></div></div><span class="country-name">Seychelles</span><span class="dial-code">+248</span></li><li class="country standard" tabindex="-1" id="iti-item-sl" role="option" data-dial-code="232" data-country-code="sl"><div class="flag-box"><div class="iti-flag sl"></div></div><span class="country-name">Sierra Leone</span><span class="dial-code">+232</span></li><li class="country standard" tabindex="-1" id="iti-item-sg" role="option" data-dial-code="65" data-country-code="sg"><div class="flag-box"><div class="iti-flag sg"></div></div><span class="country-name">Singapore</span><span class="dial-code">+65</span></li><li class="country standard" tabindex="-1" id="iti-item-sx" role="option" data-dial-code="1721" data-country-code="sx"><div class="flag-box"><div class="iti-flag sx"></div></div><span class="country-name">Sint Maarten</span><span class="dial-code">+1721</span></li><li class="country standard" tabindex="-1" id="iti-item-sk" role="option" data-dial-code="421" data-country-code="sk"><div class="flag-box"><div class="iti-flag sk"></div></div><span class="country-name">Slovakia (Slovensko)</span><span class="dial-code">+421</span></li><li class="country standard" tabindex="-1" id="iti-item-si" role="option" data-dial-code="386" data-country-code="si"><div class="flag-box"><div class="iti-flag si"></div></div><span class="country-name">Slovenia (Slovenija)</span><span class="dial-code">+386</span></li><li class="country standard" tabindex="-1" id="iti-item-sb" role="option" data-dial-code="677" data-country-code="sb"><div class="flag-box"><div class="iti-flag sb"></div></div><span class="country-name">Solomon Islands</span><span class="dial-code">+677</span></li><li class="country standard" tabindex="-1" id="iti-item-so" role="option" data-dial-code="252" data-country-code="so"><div class="flag-box"><div class="iti-flag so"></div></div><span class="country-name">Somalia (Soomaaliya)</span><span class="dial-code">+252</span></li><li class="country standard" tabindex="-1" id="iti-item-za" role="option" data-dial-code="27" data-country-code="za"><div class="flag-box"><div class="iti-flag za"></div></div><span class="country-name">South Africa</span><span class="dial-code">+27</span></li><li class="country standard" tabindex="-1" id="iti-item-kr" role="option" data-dial-code="82" data-country-code="kr"><div class="flag-box"><div class="iti-flag kr"></div></div><span class="country-name">South Korea (대한민국)</span><span class="dial-code">+82</span></li><li class="country standard" tabindex="-1" id="iti-item-ss" role="option" data-dial-code="211" data-country-code="ss"><div class="flag-box"><div class="iti-flag ss"></div></div><span class="country-name">South Sudan (‫جنوب السودان‬‎)</span><span class="dial-code">+211</span></li><li class="country standard" tabindex="-1" id="iti-item-es" role="option" data-dial-code="34" data-country-code="es"><div class="flag-box"><div class="iti-flag es"></div></div><span class="country-name">Spain (España)</span><span class="dial-code">+34</span></li><li class="country standard" tabindex="-1" id="iti-item-lk" role="option" data-dial-code="94" data-country-code="lk"><div class="flag-box"><div class="iti-flag lk"></div></div><span class="country-name">Sri Lanka (ශ්‍රී ලංකාව)</span><span class="dial-code">+94</span></li><li class="country standard" tabindex="-1" id="iti-item-sd" role="option" data-dial-code="249" data-country-code="sd"><div class="flag-box"><div class="iti-flag sd"></div></div><span class="country-name">Sudan (‫السودان‬‎)</span><span class="dial-code">+249</span></li><li class="country standard" tabindex="-1" id="iti-item-sr" role="option" data-dial-code="597" data-country-code="sr"><div class="flag-box"><div class="iti-flag sr"></div></div><span class="country-name">Suriname</span><span class="dial-code">+597</span></li><li class="country standard" tabindex="-1" id="iti-item-sj" role="option" data-dial-code="47" data-country-code="sj"><div class="flag-box"><div class="iti-flag sj"></div></div><span class="country-name">Svalbard and Jan Mayen</span><span class="dial-code">+47</span></li><li class="country standard" tabindex="-1" id="iti-item-sz" role="option" data-dial-code="268" data-country-code="sz"><div class="flag-box"><div class="iti-flag sz"></div></div><span class="country-name">Swaziland</span><span class="dial-code">+268</span></li><li class="country standard" tabindex="-1" id="iti-item-se" role="option" data-dial-code="46" data-country-code="se"><div class="flag-box"><div class="iti-flag se"></div></div><span class="country-name">Sweden (Sverige)</span><span class="dial-code">+46</span></li><li class="country standard" tabindex="-1" id="iti-item-ch" role="option" data-dial-code="41" data-country-code="ch"><div class="flag-box"><div class="iti-flag ch"></div></div><span class="country-name">Switzerland (Schweiz)</span><span class="dial-code">+41</span></li><li class="country standard" tabindex="-1" id="iti-item-sy" role="option" data-dial-code="963" data-country-code="sy"><div class="flag-box"><div class="iti-flag sy"></div></div><span class="country-name">Syria (‫سوريا‬‎)</span><span class="dial-code">+963</span></li><li class="country standard" tabindex="-1" id="iti-item-tw" role="option" data-dial-code="886" data-country-code="tw"><div class="flag-box"><div class="iti-flag tw"></div></div><span class="country-name">Taiwan (台灣)</span><span class="dial-code">+886</span></li><li class="country standard" tabindex="-1" id="iti-item-tj" role="option" data-dial-code="992" data-country-code="tj"><div class="flag-box"><div class="iti-flag tj"></div></div><span class="country-name">Tajikistan</span><span class="dial-code">+992</span></li><li class="country standard" tabindex="-1" id="iti-item-tz" role="option" data-dial-code="255" data-country-code="tz"><div class="flag-box"><div class="iti-flag tz"></div></div><span class="country-name">Tanzania</span><span class="dial-code">+255</span></li><li class="country standard" tabindex="-1" id="iti-item-th" role="option" data-dial-code="66" data-country-code="th"><div class="flag-box"><div class="iti-flag th"></div></div><span class="country-name">Thailand (ไทย)</span><span class="dial-code">+66</span></li><li class="country standard" tabindex="-1" id="iti-item-tl" role="option" data-dial-code="670" data-country-code="tl"><div class="flag-box"><div class="iti-flag tl"></div></div><span class="country-name">Timor-Leste</span><span class="dial-code">+670</span></li><li class="country standard" tabindex="-1" id="iti-item-tg" role="option" data-dial-code="228" data-country-code="tg"><div class="flag-box"><div class="iti-flag tg"></div></div><span class="country-name">Togo</span><span class="dial-code">+228</span></li><li class="country standard" tabindex="-1" id="iti-item-tk" role="option" data-dial-code="690" data-country-code="tk"><div class="flag-box"><div class="iti-flag tk"></div></div><span class="country-name">Tokelau</span><span class="dial-code">+690</span></li><li class="country standard" tabindex="-1" id="iti-item-to" role="option" data-dial-code="676" data-country-code="to"><div class="flag-box"><div class="iti-flag to"></div></div><span class="country-name">Tonga</span><span class="dial-code">+676</span></li><li class="country standard" tabindex="-1" id="iti-item-tt" role="option" data-dial-code="1868" data-country-code="tt"><div class="flag-box"><div class="iti-flag tt"></div></div><span class="country-name">Trinidad and Tobago</span><span class="dial-code">+1868</span></li><li class="country standard" tabindex="-1" id="iti-item-tn" role="option" data-dial-code="216" data-country-code="tn"><div class="flag-box"><div class="iti-flag tn"></div></div><span class="country-name">Tunisia (‫تونس‬‎)</span><span class="dial-code">+216</span></li><li class="country standard" tabindex="-1" id="iti-item-tr" role="option" data-dial-code="90" data-country-code="tr"><div class="flag-box"><div class="iti-flag tr"></div></div><span class="country-name">Turkey (Türkiye)</span><span class="dial-code">+90</span></li><li class="country standard" tabindex="-1" id="iti-item-tm" role="option" data-dial-code="993" data-country-code="tm"><div class="flag-box"><div class="iti-flag tm"></div></div><span class="country-name">Turkmenistan</span><span class="dial-code">+993</span></li><li class="country standard" tabindex="-1" id="iti-item-tc" role="option" data-dial-code="1649" data-country-code="tc"><div class="flag-box"><div class="iti-flag tc"></div></div><span class="country-name">Turks and Caicos Islands</span><span class="dial-code">+1649</span></li><li class="country standard" tabindex="-1" id="iti-item-tv" role="option" data-dial-code="688" data-country-code="tv"><div class="flag-box"><div class="iti-flag tv"></div></div><span class="country-name">Tuvalu</span><span class="dial-code">+688</span></li><li class="country standard" tabindex="-1" id="iti-item-vi" role="option" data-dial-code="1340" data-country-code="vi"><div class="flag-box"><div class="iti-flag vi"></div></div><span class="country-name">U.S. Virgin Islands</span><span class="dial-code">+1340</span></li><li class="country standard" tabindex="-1" id="iti-item-ug" role="option" data-dial-code="256" data-country-code="ug"><div class="flag-box"><div class="iti-flag ug"></div></div><span class="country-name">Uganda</span><span class="dial-code">+256</span></li><li class="country standard" tabindex="-1" id="iti-item-ua" role="option" data-dial-code="380" data-country-code="ua"><div class="flag-box"><div class="iti-flag ua"></div></div><span class="country-name">Ukraine (Україна)</span><span class="dial-code">+380</span></li><li class="country standard" tabindex="-1" id="iti-item-ae" role="option" data-dial-code="971" data-country-code="ae"><div class="flag-box"><div class="iti-flag ae"></div></div><span class="country-name">United Arab Emirates (‫الإمارات العربية المتحدة‬‎)</span><span class="dial-code">+971</span></li><li class="country standard" tabindex="-1" id="iti-item-gb" role="option" data-dial-code="44" data-country-code="gb"><div class="flag-box"><div class="iti-flag gb"></div></div><span class="country-name">United Kingdom</span><span class="dial-code">+44</span></li><li class="country standard" tabindex="-1" id="iti-item-us" role="option" data-dial-code="1" data-country-code="us"><div class="flag-box"><div class="iti-flag us"></div></div><span class="country-name">United States</span><span class="dial-code">+1</span></li><li class="country standard" tabindex="-1" id="iti-item-uy" role="option" data-dial-code="598" data-country-code="uy"><div class="flag-box"><div class="iti-flag uy"></div></div><span class="country-name">Uruguay</span><span class="dial-code">+598</span></li><li class="country standard" tabindex="-1" id="iti-item-uz" role="option" data-dial-code="998" data-country-code="uz"><div class="flag-box"><div class="iti-flag uz"></div></div><span class="country-name">Uzbekistan (Oʻzbekiston)</span><span class="dial-code">+998</span></li><li class="country standard" tabindex="-1" id="iti-item-vu" role="option" data-dial-code="678" data-country-code="vu"><div class="flag-box"><div class="iti-flag vu"></div></div><span class="country-name">Vanuatu</span><span class="dial-code">+678</span></li><li class="country standard" tabindex="-1" id="iti-item-va" role="option" data-dial-code="39" data-country-code="va"><div class="flag-box"><div class="iti-flag va"></div></div><span class="country-name">Vatican City (Città del Vaticano)</span><span class="dial-code">+39</span></li><li class="country standard" tabindex="-1" id="iti-item-ve" role="option" data-dial-code="58" data-country-code="ve"><div class="flag-box"><div class="iti-flag ve"></div></div><span class="country-name">Venezuela</span><span class="dial-code">+58</span></li><li class="country standard" tabindex="-1" id="iti-item-vn" role="option" data-dial-code="84" data-country-code="vn"><div class="flag-box"><div class="iti-flag vn"></div></div><span class="country-name">Vietnam (Việt Nam)</span><span class="dial-code">+84</span></li><li class="country standard" tabindex="-1" id="iti-item-wf" role="option" data-dial-code="681" data-country-code="wf"><div class="flag-box"><div class="iti-flag wf"></div></div><span class="country-name">Wallis and Futuna (Wallis-et-Futuna)</span><span class="dial-code">+681</span></li><li class="country standard" tabindex="-1" id="iti-item-eh" role="option" data-dial-code="212" data-country-code="eh"><div class="flag-box"><div class="iti-flag eh"></div></div><span class="country-name">Western Sahara (‫الصحراء الغربية‬‎)</span><span class="dial-code">+212</span></li><li class="country standard" tabindex="-1" id="iti-item-ye" role="option" data-dial-code="967" data-country-code="ye"><div class="flag-box"><div class="iti-flag ye"></div></div><span class="country-name">Yemen (‫اليمن‬‎)</span><span class="dial-code">+967</span></li><li class="country standard" tabindex="-1" id="iti-item-zm" role="option" data-dial-code="260" data-country-code="zm"><div class="flag-box"><div class="iti-flag zm"></div></div><span class="country-name">Zambia</span><span class="dial-code">+260</span></li><li class="country standard" tabindex="-1" id="iti-item-zw" role="option" data-dial-code="263" data-country-code="zw"><div class="flag-box"><div class="iti-flag zw"></div></div><span class="country-name">Zimbabwe</span><span class="dial-code">+263</span></li><li class="country standard" tabindex="-1" id="iti-item-ax" role="option" data-dial-code="358" data-country-code="ax"><div class="flag-box"><div class="iti-flag ax"></div></div><span class="country-name">Åland Islands</span><span class="dial-code">+358</span></li></ul></div><div class="intl-tel-input allow-dropdown"><div class="flag-container"><div class="selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0" title="Mexico (México): +52"><div class="iti-flag mx"></div><div class="iti-arrow"></div></div><ul class="country-list hide" id="country-listbox" aria-expanded="false" role="listbox" aria-activedescendant="iti-item-mx"><li class="country preferred active" tabindex="-1" id="iti-item-mx" role="option" data-dial-code="52" data-country-code="mx" aria-selected="true"><div class="flag-box"><div class="iti-flag mx"></div></div><span class="country-name">Mexico (México)</span><span class="dial-code">+52</span></li><li class="country preferred" tabindex="-1" id="iti-item-us" role="option" data-dial-code="1" data-country-code="us"><div class="flag-box"><div class="iti-flag us"></div></div><span class="country-name">United States</span><span class="dial-code">+1</span></li><li class="divider" role="separator" aria-disabled="true"></li><li class="country standard" tabindex="-1" id="iti-item-af" role="option" data-dial-code="93" data-country-code="af"><div class="flag-box"><div class="iti-flag af"></div></div><span class="country-name">Afghanistan (‫افغانستان‬‎)</span><span class="dial-code">+93</span></li><li class="country standard" tabindex="-1" id="iti-item-al" role="option" data-dial-code="355" data-country-code="al"><div class="flag-box"><div class="iti-flag al"></div></div><span class="country-name">Albania (Shqipëri)</span><span class="dial-code">+355</span></li><li class="country standard" tabindex="-1" id="iti-item-dz" role="option" data-dial-code="213" data-country-code="dz"><div class="flag-box"><div class="iti-flag dz"></div></div><span class="country-name">Algeria (‫الجزائر‬‎)</span><span class="dial-code">+213</span></li><li class="country standard" tabindex="-1" id="iti-item-as" role="option" data-dial-code="1684" data-country-code="as"><div class="flag-box"><div class="iti-flag as"></div></div><span class="country-name">American Samoa</span><span class="dial-code">+1684</span></li><li class="country standard" tabindex="-1" id="iti-item-ad" role="option" data-dial-code="376" data-country-code="ad"><div class="flag-box"><div class="iti-flag ad"></div></div><span class="country-name">Andorra</span><span class="dial-code">+376</span></li><li class="country standard" tabindex="-1" id="iti-item-ao" role="option" data-dial-code="244" data-country-code="ao"><div class="flag-box"><div class="iti-flag ao"></div></div><span class="country-name">Angola</span><span class="dial-code">+244</span></li><li class="country standard" tabindex="-1" id="iti-item-ai" role="option" data-dial-code="1264" data-country-code="ai"><div class="flag-box"><div class="iti-flag ai"></div></div><span class="country-name">Anguilla</span><span class="dial-code">+1264</span></li><li class="country standard" tabindex="-1" id="iti-item-ag" role="option" data-dial-code="1268" data-country-code="ag"><div class="flag-box"><div class="iti-flag ag"></div></div><span class="country-name">Antigua and Barbuda</span><span class="dial-code">+1268</span></li><li class="country standard" tabindex="-1" id="iti-item-ar" role="option" data-dial-code="54" data-country-code="ar"><div class="flag-box"><div class="iti-flag ar"></div></div><span class="country-name">Argentina</span><span class="dial-code">+54</span></li><li class="country standard" tabindex="-1" id="iti-item-am" role="option" data-dial-code="374" data-country-code="am"><div class="flag-box"><div class="iti-flag am"></div></div><span class="country-name">Armenia (Հայաստան)</span><span class="dial-code">+374</span></li><li class="country standard" tabindex="-1" id="iti-item-aw" role="option" data-dial-code="297" data-country-code="aw"><div class="flag-box"><div class="iti-flag aw"></div></div><span class="country-name">Aruba</span><span class="dial-code">+297</span></li><li class="country standard" tabindex="-1" id="iti-item-au" role="option" data-dial-code="61" data-country-code="au"><div class="flag-box"><div class="iti-flag au"></div></div><span class="country-name">Australia</span><span class="dial-code">+61</span></li><li class="country standard" tabindex="-1" id="iti-item-at" role="option" data-dial-code="43" data-country-code="at"><div class="flag-box"><div class="iti-flag at"></div></div><span class="country-name">Austria (Österreich)</span><span class="dial-code">+43</span></li><li class="country standard" tabindex="-1" id="iti-item-az" role="option" data-dial-code="994" data-country-code="az"><div class="flag-box"><div class="iti-flag az"></div></div><span class="country-name">Azerbaijan (Azərbaycan)</span><span class="dial-code">+994</span></li><li class="country standard" tabindex="-1" id="iti-item-bs" role="option" data-dial-code="1242" data-country-code="bs"><div class="flag-box"><div class="iti-flag bs"></div></div><span class="country-name">Bahamas</span><span class="dial-code">+1242</span></li><li class="country standard" tabindex="-1" id="iti-item-bh" role="option" data-dial-code="973" data-country-code="bh"><div class="flag-box"><div class="iti-flag bh"></div></div><span class="country-name">Bahrain (‫البحرين‬‎)</span><span class="dial-code">+973</span></li><li class="country standard" tabindex="-1" id="iti-item-bd" role="option" data-dial-code="880" data-country-code="bd"><div class="flag-box"><div class="iti-flag bd"></div></div><span class="country-name">Bangladesh (বাংলাদেশ)</span><span class="dial-code">+880</span></li><li class="country standard" tabindex="-1" id="iti-item-bb" role="option" data-dial-code="1246" data-country-code="bb"><div class="flag-box"><div class="iti-flag bb"></div></div><span class="country-name">Barbados</span><span class="dial-code">+1246</span></li><li class="country standard" tabindex="-1" id="iti-item-by" role="option" data-dial-code="375" data-country-code="by"><div class="flag-box"><div class="iti-flag by"></div></div><span class="country-name">Belarus (Беларусь)</span><span class="dial-code">+375</span></li><li class="country standard" tabindex="-1" id="iti-item-be" role="option" data-dial-code="32" data-country-code="be"><div class="flag-box"><div class="iti-flag be"></div></div><span class="country-name">Belgium (België)</span><span class="dial-code">+32</span></li><li class="country standard" tabindex="-1" id="iti-item-bz" role="option" data-dial-code="501" data-country-code="bz"><div class="flag-box"><div class="iti-flag bz"></div></div><span class="country-name">Belize</span><span class="dial-code">+501</span></li><li class="country standard" tabindex="-1" id="iti-item-bj" role="option" data-dial-code="229" data-country-code="bj"><div class="flag-box"><div class="iti-flag bj"></div></div><span class="country-name">Benin (Bénin)</span><span class="dial-code">+229</span></li><li class="country standard" tabindex="-1" id="iti-item-bm" role="option" data-dial-code="1441" data-country-code="bm"><div class="flag-box"><div class="iti-flag bm"></div></div><span class="country-name">Bermuda</span><span class="dial-code">+1441</span></li><li class="country standard" tabindex="-1" id="iti-item-bt" role="option" data-dial-code="975" data-country-code="bt"><div class="flag-box"><div class="iti-flag bt"></div></div><span class="country-name">Bhutan (འབྲུག)</span><span class="dial-code">+975</span></li><li class="country standard" tabindex="-1" id="iti-item-bo" role="option" data-dial-code="591" data-country-code="bo"><div class="flag-box"><div class="iti-flag bo"></div></div><span class="country-name">Bolivia</span><span class="dial-code">+591</span></li><li class="country standard" tabindex="-1" id="iti-item-ba" role="option" data-dial-code="387" data-country-code="ba"><div class="flag-box"><div class="iti-flag ba"></div></div><span class="country-name">Bosnia and Herzegovina (Босна и Херцеговина)</span><span class="dial-code">+387</span></li><li class="country standard" tabindex="-1" id="iti-item-bw" role="option" data-dial-code="267" data-country-code="bw"><div class="flag-box"><div class="iti-flag bw"></div></div><span class="country-name">Botswana</span><span class="dial-code">+267</span></li><li class="country standard" tabindex="-1" id="iti-item-br" role="option" data-dial-code="55" data-country-code="br"><div class="flag-box"><div class="iti-flag br"></div></div><span class="country-name">Brazil (Brasil)</span><span class="dial-code">+55</span></li><li class="country standard" tabindex="-1" id="iti-item-io" role="option" data-dial-code="246" data-country-code="io"><div class="flag-box"><div class="iti-flag io"></div></div><span class="country-name">British Indian Ocean Territory</span><span class="dial-code">+246</span></li><li class="country standard" tabindex="-1" id="iti-item-vg" role="option" data-dial-code="1284" data-country-code="vg"><div class="flag-box"><div class="iti-flag vg"></div></div><span class="country-name">British Virgin Islands</span><span class="dial-code">+1284</span></li><li class="country standard" tabindex="-1" id="iti-item-bn" role="option" data-dial-code="673" data-country-code="bn"><div class="flag-box"><div class="iti-flag bn"></div></div><span class="country-name">Brunei</span><span class="dial-code">+673</span></li><li class="country standard" tabindex="-1" id="iti-item-bg" role="option" data-dial-code="359" data-country-code="bg"><div class="flag-box"><div class="iti-flag bg"></div></div><span class="country-name">Bulgaria (България)</span><span class="dial-code">+359</span></li><li class="country standard" tabindex="-1" id="iti-item-bf" role="option" data-dial-code="226" data-country-code="bf"><div class="flag-box"><div class="iti-flag bf"></div></div><span class="country-name">Burkina Faso</span><span class="dial-code">+226</span></li><li class="country standard" tabindex="-1" id="iti-item-bi" role="option" data-dial-code="257" data-country-code="bi"><div class="flag-box"><div class="iti-flag bi"></div></div><span class="country-name">Burundi (Uburundi)</span><span class="dial-code">+257</span></li><li class="country standard" tabindex="-1" id="iti-item-kh" role="option" data-dial-code="855" data-country-code="kh"><div class="flag-box"><div class="iti-flag kh"></div></div><span class="country-name">Cambodia (កម្ពុជា)</span><span class="dial-code">+855</span></li><li class="country standard" tabindex="-1" id="iti-item-cm" role="option" data-dial-code="237" data-country-code="cm"><div class="flag-box"><div class="iti-flag cm"></div></div><span class="country-name">Cameroon (Cameroun)</span><span class="dial-code">+237</span></li><li class="country standard" tabindex="-1" id="iti-item-ca" role="option" data-dial-code="1" data-country-code="ca"><div class="flag-box"><div class="iti-flag ca"></div></div><span class="country-name">Canada</span><span class="dial-code">+1</span></li><li class="country standard" tabindex="-1" id="iti-item-cv" role="option" data-dial-code="238" data-country-code="cv"><div class="flag-box"><div class="iti-flag cv"></div></div><span class="country-name">Cape Verde (Kabu Verdi)</span><span class="dial-code">+238</span></li><li class="country standard" tabindex="-1" id="iti-item-bq" role="option" data-dial-code="599" data-country-code="bq"><div class="flag-box"><div class="iti-flag bq"></div></div><span class="country-name">Caribbean Netherlands</span><span class="dial-code">+599</span></li><li class="country standard" tabindex="-1" id="iti-item-ky" role="option" data-dial-code="1345" data-country-code="ky"><div class="flag-box"><div class="iti-flag ky"></div></div><span class="country-name">Cayman Islands</span><span class="dial-code">+1345</span></li><li class="country standard" tabindex="-1" id="iti-item-cf" role="option" data-dial-code="236" data-country-code="cf"><div class="flag-box"><div class="iti-flag cf"></div></div><span class="country-name">Central African Republic (République centrafricaine)</span><span class="dial-code">+236</span></li><li class="country standard" tabindex="-1" id="iti-item-td" role="option" data-dial-code="235" data-country-code="td"><div class="flag-box"><div class="iti-flag td"></div></div><span class="country-name">Chad (Tchad)</span><span class="dial-code">+235</span></li><li class="country standard" tabindex="-1" id="iti-item-cl" role="option" data-dial-code="56" data-country-code="cl"><div class="flag-box"><div class="iti-flag cl"></div></div><span class="country-name">Chile</span><span class="dial-code">+56</span></li><li class="country standard" tabindex="-1" id="iti-item-cn" role="option" data-dial-code="86" data-country-code="cn"><div class="flag-box"><div class="iti-flag cn"></div></div><span class="country-name">China (中国)</span><span class="dial-code">+86</span></li><li class="country standard" tabindex="-1" id="iti-item-cx" role="option" data-dial-code="61" data-country-code="cx"><div class="flag-box"><div class="iti-flag cx"></div></div><span class="country-name">Christmas Island</span><span class="dial-code">+61</span></li><li class="country standard" tabindex="-1" id="iti-item-cc" role="option" data-dial-code="61" data-country-code="cc"><div class="flag-box"><div class="iti-flag cc"></div></div><span class="country-name">Cocos (Keeling) Islands</span><span class="dial-code">+61</span></li><li class="country standard" tabindex="-1" id="iti-item-co" role="option" data-dial-code="57" data-country-code="co"><div class="flag-box"><div class="iti-flag co"></div></div><span class="country-name">Colombia</span><span class="dial-code">+57</span></li><li class="country standard" tabindex="-1" id="iti-item-km" role="option" data-dial-code="269" data-country-code="km"><div class="flag-box"><div class="iti-flag km"></div></div><span class="country-name">Comoros (‫جزر القمر‬‎)</span><span class="dial-code">+269</span></li><li class="country standard" tabindex="-1" id="iti-item-cd" role="option" data-dial-code="243" data-country-code="cd"><div class="flag-box"><div class="iti-flag cd"></div></div><span class="country-name">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</span><span class="dial-code">+243</span></li><li class="country standard" tabindex="-1" id="iti-item-cg" role="option" data-dial-code="242" data-country-code="cg"><div class="flag-box"><div class="iti-flag cg"></div></div><span class="country-name">Congo (Republic) (Congo-Brazzaville)</span><span class="dial-code">+242</span></li><li class="country standard" tabindex="-1" id="iti-item-ck" role="option" data-dial-code="682" data-country-code="ck"><div class="flag-box"><div class="iti-flag ck"></div></div><span class="country-name">Cook Islands</span><span class="dial-code">+682</span></li><li class="country standard" tabindex="-1" id="iti-item-cr" role="option" data-dial-code="506" data-country-code="cr"><div class="flag-box"><div class="iti-flag cr"></div></div><span class="country-name">Costa Rica</span><span class="dial-code">+506</span></li><li class="country standard" tabindex="-1" id="iti-item-ci" role="option" data-dial-code="225" data-country-code="ci"><div class="flag-box"><div class="iti-flag ci"></div></div><span class="country-name">Côte d’Ivoire</span><span class="dial-code">+225</span></li><li class="country standard" tabindex="-1" id="iti-item-hr" role="option" data-dial-code="385" data-country-code="hr"><div class="flag-box"><div class="iti-flag hr"></div></div><span class="country-name">Croatia (Hrvatska)</span><span class="dial-code">+385</span></li><li class="country standard" tabindex="-1" id="iti-item-cu" role="option" data-dial-code="53" data-country-code="cu"><div class="flag-box"><div class="iti-flag cu"></div></div><span class="country-name">Cuba</span><span class="dial-code">+53</span></li><li class="country standard" tabindex="-1" id="iti-item-cw" role="option" data-dial-code="599" data-country-code="cw"><div class="flag-box"><div class="iti-flag cw"></div></div><span class="country-name">Curaçao</span><span class="dial-code">+599</span></li><li class="country standard" tabindex="-1" id="iti-item-cy" role="option" data-dial-code="357" data-country-code="cy"><div class="flag-box"><div class="iti-flag cy"></div></div><span class="country-name">Cyprus (Κύπρος)</span><span class="dial-code">+357</span></li><li class="country standard" tabindex="-1" id="iti-item-cz" role="option" data-dial-code="420" data-country-code="cz"><div class="flag-box"><div class="iti-flag cz"></div></div><span class="country-name">Czech Republic (Česká republika)</span><span class="dial-code">+420</span></li><li class="country standard" tabindex="-1" id="iti-item-dk" role="option" data-dial-code="45" data-country-code="dk"><div class="flag-box"><div class="iti-flag dk"></div></div><span class="country-name">Denmark (Danmark)</span><span class="dial-code">+45</span></li><li class="country standard" tabindex="-1" id="iti-item-dj" role="option" data-dial-code="253" data-country-code="dj"><div class="flag-box"><div class="iti-flag dj"></div></div><span class="country-name">Djibouti</span><span class="dial-code">+253</span></li><li class="country standard" tabindex="-1" id="iti-item-dm" role="option" data-dial-code="1767" data-country-code="dm"><div class="flag-box"><div class="iti-flag dm"></div></div><span class="country-name">Dominica</span><span class="dial-code">+1767</span></li><li class="country standard" tabindex="-1" id="iti-item-do" role="option" data-dial-code="1" data-country-code="do"><div class="flag-box"><div class="iti-flag do"></div></div><span class="country-name">Dominican Republic (República Dominicana)</span><span class="dial-code">+1</span></li><li class="country standard" tabindex="-1" id="iti-item-ec" role="option" data-dial-code="593" data-country-code="ec"><div class="flag-box"><div class="iti-flag ec"></div></div><span class="country-name">Ecuador</span><span class="dial-code">+593</span></li><li class="country standard" tabindex="-1" id="iti-item-eg" role="option" data-dial-code="20" data-country-code="eg"><div class="flag-box"><div class="iti-flag eg"></div></div><span class="country-name">Egypt (‫مصر‬‎)</span><span class="dial-code">+20</span></li><li class="country standard" tabindex="-1" id="iti-item-sv" role="option" data-dial-code="503" data-country-code="sv"><div class="flag-box"><div class="iti-flag sv"></div></div><span class="country-name">El Salvador</span><span class="dial-code">+503</span></li><li class="country standard" tabindex="-1" id="iti-item-gq" role="option" data-dial-code="240" data-country-code="gq"><div class="flag-box"><div class="iti-flag gq"></div></div><span class="country-name">Equatorial Guinea (Guinea Ecuatorial)</span><span class="dial-code">+240</span></li><li class="country standard" tabindex="-1" id="iti-item-er" role="option" data-dial-code="291" data-country-code="er"><div class="flag-box"><div class="iti-flag er"></div></div><span class="country-name">Eritrea</span><span class="dial-code">+291</span></li><li class="country standard" tabindex="-1" id="iti-item-ee" role="option" data-dial-code="372" data-country-code="ee"><div class="flag-box"><div class="iti-flag ee"></div></div><span class="country-name">Estonia (Eesti)</span><span class="dial-code">+372</span></li><li class="country standard" tabindex="-1" id="iti-item-et" role="option" data-dial-code="251" data-country-code="et"><div class="flag-box"><div class="iti-flag et"></div></div><span class="country-name">Ethiopia</span><span class="dial-code">+251</span></li><li class="country standard" tabindex="-1" id="iti-item-fk" role="option" data-dial-code="500" data-country-code="fk"><div class="flag-box"><div class="iti-flag fk"></div></div><span class="country-name">Falkland Islands (Islas Malvinas)</span><span class="dial-code">+500</span></li><li class="country standard" tabindex="-1" id="iti-item-fo" role="option" data-dial-code="298" data-country-code="fo"><div class="flag-box"><div class="iti-flag fo"></div></div><span class="country-name">Faroe Islands (Føroyar)</span><span class="dial-code">+298</span></li><li class="country standard" tabindex="-1" id="iti-item-fj" role="option" data-dial-code="679" data-country-code="fj"><div class="flag-box"><div class="iti-flag fj"></div></div><span class="country-name">Fiji</span><span class="dial-code">+679</span></li><li class="country standard" tabindex="-1" id="iti-item-fi" role="option" data-dial-code="358" data-country-code="fi"><div class="flag-box"><div class="iti-flag fi"></div></div><span class="country-name">Finland (Suomi)</span><span class="dial-code">+358</span></li><li class="country standard" tabindex="-1" id="iti-item-fr" role="option" data-dial-code="33" data-country-code="fr"><div class="flag-box"><div class="iti-flag fr"></div></div><span class="country-name">France</span><span class="dial-code">+33</span></li><li class="country standard" tabindex="-1" id="iti-item-gf" role="option" data-dial-code="594" data-country-code="gf"><div class="flag-box"><div class="iti-flag gf"></div></div><span class="country-name">French Guiana (Guyane française)</span><span class="dial-code">+594</span></li><li class="country standard" tabindex="-1" id="iti-item-pf" role="option" data-dial-code="689" data-country-code="pf"><div class="flag-box"><div class="iti-flag pf"></div></div><span class="country-name">French Polynesia (Polynésie française)</span><span class="dial-code">+689</span></li><li class="country standard" tabindex="-1" id="iti-item-ga" role="option" data-dial-code="241" data-country-code="ga"><div class="flag-box"><div class="iti-flag ga"></div></div><span class="country-name">Gabon</span><span class="dial-code">+241</span></li><li class="country standard" tabindex="-1" id="iti-item-gm" role="option" data-dial-code="220" data-country-code="gm"><div class="flag-box"><div class="iti-flag gm"></div></div><span class="country-name">Gambia</span><span class="dial-code">+220</span></li><li class="country standard" tabindex="-1" id="iti-item-ge" role="option" data-dial-code="995" data-country-code="ge"><div class="flag-box"><div class="iti-flag ge"></div></div><span class="country-name">Georgia (საქართველო)</span><span class="dial-code">+995</span></li><li class="country standard" tabindex="-1" id="iti-item-de" role="option" data-dial-code="49" data-country-code="de"><div class="flag-box"><div class="iti-flag de"></div></div><span class="country-name">Germany (Deutschland)</span><span class="dial-code">+49</span></li><li class="country standard" tabindex="-1" id="iti-item-gh" role="option" data-dial-code="233" data-country-code="gh"><div class="flag-box"><div class="iti-flag gh"></div></div><span class="country-name">Ghana (Gaana)</span><span class="dial-code">+233</span></li><li class="country standard" tabindex="-1" id="iti-item-gi" role="option" data-dial-code="350" data-country-code="gi"><div class="flag-box"><div class="iti-flag gi"></div></div><span class="country-name">Gibraltar</span><span class="dial-code">+350</span></li><li class="country standard" tabindex="-1" id="iti-item-gr" role="option" data-dial-code="30" data-country-code="gr"><div class="flag-box"><div class="iti-flag gr"></div></div><span class="country-name">Greece (Ελλάδα)</span><span class="dial-code">+30</span></li><li class="country standard" tabindex="-1" id="iti-item-gl" role="option" data-dial-code="299" data-country-code="gl"><div class="flag-box"><div class="iti-flag gl"></div></div><span class="country-name">Greenland (Kalaallit Nunaat)</span><span class="dial-code">+299</span></li><li class="country standard" tabindex="-1" id="iti-item-gd" role="option" data-dial-code="1473" data-country-code="gd"><div class="flag-box"><div class="iti-flag gd"></div></div><span class="country-name">Grenada</span><span class="dial-code">+1473</span></li><li class="country standard" tabindex="-1" id="iti-item-gp" role="option" data-dial-code="590" data-country-code="gp"><div class="flag-box"><div class="iti-flag gp"></div></div><span class="country-name">Guadeloupe</span><span class="dial-code">+590</span></li><li class="country standard" tabindex="-1" id="iti-item-gu" role="option" data-dial-code="1671" data-country-code="gu"><div class="flag-box"><div class="iti-flag gu"></div></div><span class="country-name">Guam</span><span class="dial-code">+1671</span></li><li class="country standard" tabindex="-1" id="iti-item-gt" role="option" data-dial-code="502" data-country-code="gt"><div class="flag-box"><div class="iti-flag gt"></div></div><span class="country-name">Guatemala</span><span class="dial-code">+502</span></li><li class="country standard" tabindex="-1" id="iti-item-gg" role="option" data-dial-code="44" data-country-code="gg"><div class="flag-box"><div class="iti-flag gg"></div></div><span class="country-name">Guernsey</span><span class="dial-code">+44</span></li><li class="country standard" tabindex="-1" id="iti-item-gn" role="option" data-dial-code="224" data-country-code="gn"><div class="flag-box"><div class="iti-flag gn"></div></div><span class="country-name">Guinea (Guinée)</span><span class="dial-code">+224</span></li><li class="country standard" tabindex="-1" id="iti-item-gw" role="option" data-dial-code="245" data-country-code="gw"><div class="flag-box"><div class="iti-flag gw"></div></div><span class="country-name">Guinea-Bissau (Guiné Bissau)</span><span class="dial-code">+245</span></li><li class="country standard" tabindex="-1" id="iti-item-gy" role="option" data-dial-code="592" data-country-code="gy"><div class="flag-box"><div class="iti-flag gy"></div></div><span class="country-name">Guyana</span><span class="dial-code">+592</span></li><li class="country standard" tabindex="-1" id="iti-item-ht" role="option" data-dial-code="509" data-country-code="ht"><div class="flag-box"><div class="iti-flag ht"></div></div><span class="country-name">Haiti</span><span class="dial-code">+509</span></li><li class="country standard" tabindex="-1" id="iti-item-hn" role="option" data-dial-code="504" data-country-code="hn"><div class="flag-box"><div class="iti-flag hn"></div></div><span class="country-name">Honduras</span><span class="dial-code">+504</span></li><li class="country standard" tabindex="-1" id="iti-item-hk" role="option" data-dial-code="852" data-country-code="hk"><div class="flag-box"><div class="iti-flag hk"></div></div><span class="country-name">Hong Kong (香港)</span><span class="dial-code">+852</span></li><li class="country standard" tabindex="-1" id="iti-item-hu" role="option" data-dial-code="36" data-country-code="hu"><div class="flag-box"><div class="iti-flag hu"></div></div><span class="country-name">Hungary (Magyarország)</span><span class="dial-code">+36</span></li><li class="country standard" tabindex="-1" id="iti-item-is" role="option" data-dial-code="354" data-country-code="is"><div class="flag-box"><div class="iti-flag is"></div></div><span class="country-name">Iceland (Ísland)</span><span class="dial-code">+354</span></li><li class="country standard" tabindex="-1" id="iti-item-in" role="option" data-dial-code="91" data-country-code="in"><div class="flag-box"><div class="iti-flag in"></div></div><span class="country-name">India (भारत)</span><span class="dial-code">+91</span></li><li class="country standard" tabindex="-1" id="iti-item-id" role="option" data-dial-code="62" data-country-code="id"><div class="flag-box"><div class="iti-flag id"></div></div><span class="country-name">Indonesia</span><span class="dial-code">+62</span></li><li class="country standard" tabindex="-1" id="iti-item-ir" role="option" data-dial-code="98" data-country-code="ir"><div class="flag-box"><div class="iti-flag ir"></div></div><span class="country-name">Iran (‫ایران‬‎)</span><span class="dial-code">+98</span></li><li class="country standard" tabindex="-1" id="iti-item-iq" role="option" data-dial-code="964" data-country-code="iq"><div class="flag-box"><div class="iti-flag iq"></div></div><span class="country-name">Iraq (‫العراق‬‎)</span><span class="dial-code">+964</span></li><li class="country standard" tabindex="-1" id="iti-item-ie" role="option" data-dial-code="353" data-country-code="ie"><div class="flag-box"><div class="iti-flag ie"></div></div><span class="country-name">Ireland</span><span class="dial-code">+353</span></li><li class="country standard" tabindex="-1" id="iti-item-im" role="option" data-dial-code="44" data-country-code="im"><div class="flag-box"><div class="iti-flag im"></div></div><span class="country-name">Isle of Man</span><span class="dial-code">+44</span></li><li class="country standard" tabindex="-1" id="iti-item-il" role="option" data-dial-code="972" data-country-code="il"><div class="flag-box"><div class="iti-flag il"></div></div><span class="country-name">Israel (‫ישראל‬‎)</span><span class="dial-code">+972</span></li><li class="country standard" tabindex="-1" id="iti-item-it" role="option" data-dial-code="39" data-country-code="it"><div class="flag-box"><div class="iti-flag it"></div></div><span class="country-name">Italy (Italia)</span><span class="dial-code">+39</span></li><li class="country standard" tabindex="-1" id="iti-item-jm" role="option" data-dial-code="1" data-country-code="jm"><div class="flag-box"><div class="iti-flag jm"></div></div><span class="country-name">Jamaica</span><span class="dial-code">+1</span></li><li class="country standard" tabindex="-1" id="iti-item-jp" role="option" data-dial-code="81" data-country-code="jp"><div class="flag-box"><div class="iti-flag jp"></div></div><span class="country-name">Japan (日本)</span><span class="dial-code">+81</span></li><li class="country standard" tabindex="-1" id="iti-item-je" role="option" data-dial-code="44" data-country-code="je"><div class="flag-box"><div class="iti-flag je"></div></div><span class="country-name">Jersey</span><span class="dial-code">+44</span></li><li class="country standard" tabindex="-1" id="iti-item-jo" role="option" data-dial-code="962" data-country-code="jo"><div class="flag-box"><div class="iti-flag jo"></div></div><span class="country-name">Jordan (‫الأردن‬‎)</span><span class="dial-code">+962</span></li><li class="country standard" tabindex="-1" id="iti-item-kz" role="option" data-dial-code="7" data-country-code="kz"><div class="flag-box"><div class="iti-flag kz"></div></div><span class="country-name">Kazakhstan (Казахстан)</span><span class="dial-code">+7</span></li><li class="country standard" tabindex="-1" id="iti-item-ke" role="option" data-dial-code="254" data-country-code="ke"><div class="flag-box"><div class="iti-flag ke"></div></div><span class="country-name">Kenya</span><span class="dial-code">+254</span></li><li class="country standard" tabindex="-1" id="iti-item-ki" role="option" data-dial-code="686" data-country-code="ki"><div class="flag-box"><div class="iti-flag ki"></div></div><span class="country-name">Kiribati</span><span class="dial-code">+686</span></li><li class="country standard" tabindex="-1" id="iti-item-xk" role="option" data-dial-code="383" data-country-code="xk"><div class="flag-box"><div class="iti-flag xk"></div></div><span class="country-name">Kosovo</span><span class="dial-code">+383</span></li><li class="country standard" tabindex="-1" id="iti-item-kw" role="option" data-dial-code="965" data-country-code="kw"><div class="flag-box"><div class="iti-flag kw"></div></div><span class="country-name">Kuwait (‫الكويت‬‎)</span><span class="dial-code">+965</span></li><li class="country standard" tabindex="-1" id="iti-item-kg" role="option" data-dial-code="996" data-country-code="kg"><div class="flag-box"><div class="iti-flag kg"></div></div><span class="country-name">Kyrgyzstan (Кыргызстан)</span><span class="dial-code">+996</span></li><li class="country standard" tabindex="-1" id="iti-item-la" role="option" data-dial-code="856" data-country-code="la"><div class="flag-box"><div class="iti-flag la"></div></div><span class="country-name">Laos (ລາວ)</span><span class="dial-code">+856</span></li><li class="country standard" tabindex="-1" id="iti-item-lv" role="option" data-dial-code="371" data-country-code="lv"><div class="flag-box"><div class="iti-flag lv"></div></div><span class="country-name">Latvia (Latvija)</span><span class="dial-code">+371</span></li><li class="country standard" tabindex="-1" id="iti-item-lb" role="option" data-dial-code="961" data-country-code="lb"><div class="flag-box"><div class="iti-flag lb"></div></div><span class="country-name">Lebanon (‫لبنان‬‎)</span><span class="dial-code">+961</span></li><li class="country standard" tabindex="-1" id="iti-item-ls" role="option" data-dial-code="266" data-country-code="ls"><div class="flag-box"><div class="iti-flag ls"></div></div><span class="country-name">Lesotho</span><span class="dial-code">+266</span></li><li class="country standard" tabindex="-1" id="iti-item-lr" role="option" data-dial-code="231" data-country-code="lr"><div class="flag-box"><div class="iti-flag lr"></div></div><span class="country-name">Liberia</span><span class="dial-code">+231</span></li><li class="country standard" tabindex="-1" id="iti-item-ly" role="option" data-dial-code="218" data-country-code="ly"><div class="flag-box"><div class="iti-flag ly"></div></div><span class="country-name">Libya (‫ليبيا‬‎)</span><span class="dial-code">+218</span></li><li class="country standard" tabindex="-1" id="iti-item-li" role="option" data-dial-code="423" data-country-code="li"><div class="flag-box"><div class="iti-flag li"></div></div><span class="country-name">Liechtenstein</span><span class="dial-code">+423</span></li><li class="country standard" tabindex="-1" id="iti-item-lt" role="option" data-dial-code="370" data-country-code="lt"><div class="flag-box"><div class="iti-flag lt"></div></div><span class="country-name">Lithuania (Lietuva)</span><span class="dial-code">+370</span></li><li class="country standard" tabindex="-1" id="iti-item-lu" role="option" data-dial-code="352" data-country-code="lu"><div class="flag-box"><div class="iti-flag lu"></div></div><span class="country-name">Luxembourg</span><span class="dial-code">+352</span></li><li class="country standard" tabindex="-1" id="iti-item-mo" role="option" data-dial-code="853" data-country-code="mo"><div class="flag-box"><div class="iti-flag mo"></div></div><span class="country-name">Macau (澳門)</span><span class="dial-code">+853</span></li><li class="country standard" tabindex="-1" id="iti-item-mk" role="option" data-dial-code="389" data-country-code="mk"><div class="flag-box"><div class="iti-flag mk"></div></div><span class="country-name">Macedonia (FYROM) (Македонија)</span><span class="dial-code">+389</span></li><li class="country standard" tabindex="-1" id="iti-item-mg" role="option" data-dial-code="261" data-country-code="mg"><div class="flag-box"><div class="iti-flag mg"></div></div><span class="country-name">Madagascar (Madagasikara)</span><span class="dial-code">+261</span></li><li class="country standard" tabindex="-1" id="iti-item-mw" role="option" data-dial-code="265" data-country-code="mw"><div class="flag-box"><div class="iti-flag mw"></div></div><span class="country-name">Malawi</span><span class="dial-code">+265</span></li><li class="country standard" tabindex="-1" id="iti-item-my" role="option" data-dial-code="60" data-country-code="my"><div class="flag-box"><div class="iti-flag my"></div></div><span class="country-name">Malaysia</span><span class="dial-code">+60</span></li><li class="country standard" tabindex="-1" id="iti-item-mv" role="option" data-dial-code="960" data-country-code="mv"><div class="flag-box"><div class="iti-flag mv"></div></div><span class="country-name">Maldives</span><span class="dial-code">+960</span></li><li class="country standard" tabindex="-1" id="iti-item-ml" role="option" data-dial-code="223" data-country-code="ml"><div class="flag-box"><div class="iti-flag ml"></div></div><span class="country-name">Mali</span><span class="dial-code">+223</span></li><li class="country standard" tabindex="-1" id="iti-item-mt" role="option" data-dial-code="356" data-country-code="mt"><div class="flag-box"><div class="iti-flag mt"></div></div><span class="country-name">Malta</span><span class="dial-code">+356</span></li><li class="country standard" tabindex="-1" id="iti-item-mh" role="option" data-dial-code="692" data-country-code="mh"><div class="flag-box"><div class="iti-flag mh"></div></div><span class="country-name">Marshall Islands</span><span class="dial-code">+692</span></li><li class="country standard" tabindex="-1" id="iti-item-mq" role="option" data-dial-code="596" data-country-code="mq"><div class="flag-box"><div class="iti-flag mq"></div></div><span class="country-name">Martinique</span><span class="dial-code">+596</span></li><li class="country standard" tabindex="-1" id="iti-item-mr" role="option" data-dial-code="222" data-country-code="mr"><div class="flag-box"><div class="iti-flag mr"></div></div><span class="country-name">Mauritania (‫موريتانيا‬‎)</span><span class="dial-code">+222</span></li><li class="country standard" tabindex="-1" id="iti-item-mu" role="option" data-dial-code="230" data-country-code="mu"><div class="flag-box"><div class="iti-flag mu"></div></div><span class="country-name">Mauritius (Moris)</span><span class="dial-code">+230</span></li><li class="country standard" tabindex="-1" id="iti-item-yt" role="option" data-dial-code="262" data-country-code="yt"><div class="flag-box"><div class="iti-flag yt"></div></div><span class="country-name">Mayotte</span><span class="dial-code">+262</span></li><li class="country standard" tabindex="-1" id="iti-item-mx" role="option" data-dial-code="52" data-country-code="mx"><div class="flag-box"><div class="iti-flag mx"></div></div><span class="country-name">Mexico (México)</span><span class="dial-code">+52</span></li><li class="country standard" tabindex="-1" id="iti-item-fm" role="option" data-dial-code="691" data-country-code="fm"><div class="flag-box"><div class="iti-flag fm"></div></div><span class="country-name">Micronesia</span><span class="dial-code">+691</span></li><li class="country standard" tabindex="-1" id="iti-item-md" role="option" data-dial-code="373" data-country-code="md"><div class="flag-box"><div class="iti-flag md"></div></div><span class="country-name">Moldova (Republica Moldova)</span><span class="dial-code">+373</span></li><li class="country standard" tabindex="-1" id="iti-item-mc" role="option" data-dial-code="377" data-country-code="mc"><div class="flag-box"><div class="iti-flag mc"></div></div><span class="country-name">Monaco</span><span class="dial-code">+377</span></li><li class="country standard" tabindex="-1" id="iti-item-mn" role="option" data-dial-code="976" data-country-code="mn"><div class="flag-box"><div class="iti-flag mn"></div></div><span class="country-name">Mongolia (Монгол)</span><span class="dial-code">+976</span></li><li class="country standard" tabindex="-1" id="iti-item-me" role="option" data-dial-code="382" data-country-code="me"><div class="flag-box"><div class="iti-flag me"></div></div><span class="country-name">Montenegro (Crna Gora)</span><span class="dial-code">+382</span></li><li class="country standard" tabindex="-1" id="iti-item-ms" role="option" data-dial-code="1664" data-country-code="ms"><div class="flag-box"><div class="iti-flag ms"></div></div><span class="country-name">Montserrat</span><span class="dial-code">+1664</span></li><li class="country standard" tabindex="-1" id="iti-item-ma" role="option" data-dial-code="212" data-country-code="ma"><div class="flag-box"><div class="iti-flag ma"></div></div><span class="country-name">Morocco (‫المغرب‬‎)</span><span class="dial-code">+212</span></li><li class="country standard" tabindex="-1" id="iti-item-mz" role="option" data-dial-code="258" data-country-code="mz"><div class="flag-box"><div class="iti-flag mz"></div></div><span class="country-name">Mozambique (Moçambique)</span><span class="dial-code">+258</span></li><li class="country standard" tabindex="-1" id="iti-item-mm" role="option" data-dial-code="95" data-country-code="mm"><div class="flag-box"><div class="iti-flag mm"></div></div><span class="country-name">Myanmar (Burma) (မြန်မာ)</span><span class="dial-code">+95</span></li><li class="country standard" tabindex="-1" id="iti-item-na" role="option" data-dial-code="264" data-country-code="na"><div class="flag-box"><div class="iti-flag na"></div></div><span class="country-name">Namibia (Namibië)</span><span class="dial-code">+264</span></li><li class="country standard" tabindex="-1" id="iti-item-nr" role="option" data-dial-code="674" data-country-code="nr"><div class="flag-box"><div class="iti-flag nr"></div></div><span class="country-name">Nauru</span><span class="dial-code">+674</span></li><li class="country standard" tabindex="-1" id="iti-item-np" role="option" data-dial-code="977" data-country-code="np"><div class="flag-box"><div class="iti-flag np"></div></div><span class="country-name">Nepal (नेपाल)</span><span class="dial-code">+977</span></li><li class="country standard" tabindex="-1" id="iti-item-nl" role="option" data-dial-code="31" data-country-code="nl"><div class="flag-box"><div class="iti-flag nl"></div></div><span class="country-name">Netherlands (Nederland)</span><span class="dial-code">+31</span></li><li class="country standard" tabindex="-1" id="iti-item-nc" role="option" data-dial-code="687" data-country-code="nc"><div class="flag-box"><div class="iti-flag nc"></div></div><span class="country-name">New Caledonia (Nouvelle-Calédonie)</span><span class="dial-code">+687</span></li><li class="country standard" tabindex="-1" id="iti-item-nz" role="option" data-dial-code="64" data-country-code="nz"><div class="flag-box"><div class="iti-flag nz"></div></div><span class="country-name">New Zealand</span><span class="dial-code">+64</span></li><li class="country standard" tabindex="-1" id="iti-item-ni" role="option" data-dial-code="505" data-country-code="ni"><div class="flag-box"><div class="iti-flag ni"></div></div><span class="country-name">Nicaragua</span><span class="dial-code">+505</span></li><li class="country standard" tabindex="-1" id="iti-item-ne" role="option" data-dial-code="227" data-country-code="ne"><div class="flag-box"><div class="iti-flag ne"></div></div><span class="country-name">Niger (Nijar)</span><span class="dial-code">+227</span></li><li class="country standard" tabindex="-1" id="iti-item-ng" role="option" data-dial-code="234" data-country-code="ng"><div class="flag-box"><div class="iti-flag ng"></div></div><span class="country-name">Nigeria</span><span class="dial-code">+234</span></li><li class="country standard" tabindex="-1" id="iti-item-nu" role="option" data-dial-code="683" data-country-code="nu"><div class="flag-box"><div class="iti-flag nu"></div></div><span class="country-name">Niue</span><span class="dial-code">+683</span></li><li class="country standard" tabindex="-1" id="iti-item-nf" role="option" data-dial-code="672" data-country-code="nf"><div class="flag-box"><div class="iti-flag nf"></div></div><span class="country-name">Norfolk Island</span><span class="dial-code">+672</span></li><li class="country standard" tabindex="-1" id="iti-item-kp" role="option" data-dial-code="850" data-country-code="kp"><div class="flag-box"><div class="iti-flag kp"></div></div><span class="country-name">North Korea (조선 민주주의 인민 공화국)</span><span class="dial-code">+850</span></li><li class="country standard" tabindex="-1" id="iti-item-mp" role="option" data-dial-code="1670" data-country-code="mp"><div class="flag-box"><div class="iti-flag mp"></div></div><span class="country-name">Northern Mariana Islands</span><span class="dial-code">+1670</span></li><li class="country standard" tabindex="-1" id="iti-item-no" role="option" data-dial-code="47" data-country-code="no"><div class="flag-box"><div class="iti-flag no"></div></div><span class="country-name">Norway (Norge)</span><span class="dial-code">+47</span></li><li class="country standard" tabindex="-1" id="iti-item-om" role="option" data-dial-code="968" data-country-code="om"><div class="flag-box"><div class="iti-flag om"></div></div><span class="country-name">Oman (‫عُمان‬‎)</span><span class="dial-code">+968</span></li><li class="country standard" tabindex="-1" id="iti-item-pk" role="option" data-dial-code="92" data-country-code="pk"><div class="flag-box"><div class="iti-flag pk"></div></div><span class="country-name">Pakistan (‫پاکستان‬‎)</span><span class="dial-code">+92</span></li><li class="country standard" tabindex="-1" id="iti-item-pw" role="option" data-dial-code="680" data-country-code="pw"><div class="flag-box"><div class="iti-flag pw"></div></div><span class="country-name">Palau</span><span class="dial-code">+680</span></li><li class="country standard" tabindex="-1" id="iti-item-ps" role="option" data-dial-code="970" data-country-code="ps"><div class="flag-box"><div class="iti-flag ps"></div></div><span class="country-name">Palestine (‫فلسطين‬‎)</span><span class="dial-code">+970</span></li><li class="country standard" tabindex="-1" id="iti-item-pa" role="option" data-dial-code="507" data-country-code="pa"><div class="flag-box"><div class="iti-flag pa"></div></div><span class="country-name">Panama (Panamá)</span><span class="dial-code">+507</span></li><li class="country standard" tabindex="-1" id="iti-item-pg" role="option" data-dial-code="675" data-country-code="pg"><div class="flag-box"><div class="iti-flag pg"></div></div><span class="country-name">Papua New Guinea</span><span class="dial-code">+675</span></li><li class="country standard" tabindex="-1" id="iti-item-py" role="option" data-dial-code="595" data-country-code="py"><div class="flag-box"><div class="iti-flag py"></div></div><span class="country-name">Paraguay</span><span class="dial-code">+595</span></li><li class="country standard" tabindex="-1" id="iti-item-pe" role="option" data-dial-code="51" data-country-code="pe"><div class="flag-box"><div class="iti-flag pe"></div></div><span class="country-name">Peru (Perú)</span><span class="dial-code">+51</span></li><li class="country standard" tabindex="-1" id="iti-item-ph" role="option" data-dial-code="63" data-country-code="ph"><div class="flag-box"><div class="iti-flag ph"></div></div><span class="country-name">Philippines</span><span class="dial-code">+63</span></li><li class="country standard" tabindex="-1" id="iti-item-pl" role="option" data-dial-code="48" data-country-code="pl"><div class="flag-box"><div class="iti-flag pl"></div></div><span class="country-name">Poland (Polska)</span><span class="dial-code">+48</span></li><li class="country standard" tabindex="-1" id="iti-item-pt" role="option" data-dial-code="351" data-country-code="pt"><div class="flag-box"><div class="iti-flag pt"></div></div><span class="country-name">Portugal</span><span class="dial-code">+351</span></li><li class="country standard" tabindex="-1" id="iti-item-pr" role="option" data-dial-code="1" data-country-code="pr"><div class="flag-box"><div class="iti-flag pr"></div></div><span class="country-name">Puerto Rico</span><span class="dial-code">+1</span></li><li class="country standard" tabindex="-1" id="iti-item-qa" role="option" data-dial-code="974" data-country-code="qa"><div class="flag-box"><div class="iti-flag qa"></div></div><span class="country-name">Qatar (‫قطر‬‎)</span><span class="dial-code">+974</span></li><li class="country standard" tabindex="-1" id="iti-item-re" role="option" data-dial-code="262" data-country-code="re"><div class="flag-box"><div class="iti-flag re"></div></div><span class="country-name">Réunion (La Réunion)</span><span class="dial-code">+262</span></li><li class="country standard" tabindex="-1" id="iti-item-ro" role="option" data-dial-code="40" data-country-code="ro"><div class="flag-box"><div class="iti-flag ro"></div></div><span class="country-name">Romania (România)</span><span class="dial-code">+40</span></li><li class="country standard" tabindex="-1" id="iti-item-ru" role="option" data-dial-code="7" data-country-code="ru"><div class="flag-box"><div class="iti-flag ru"></div></div><span class="country-name">Russia (Россия)</span><span class="dial-code">+7</span></li><li class="country standard" tabindex="-1" id="iti-item-rw" role="option" data-dial-code="250" data-country-code="rw"><div class="flag-box"><div class="iti-flag rw"></div></div><span class="country-name">Rwanda</span><span class="dial-code">+250</span></li><li class="country standard" tabindex="-1" id="iti-item-bl" role="option" data-dial-code="590" data-country-code="bl"><div class="flag-box"><div class="iti-flag bl"></div></div><span class="country-name">Saint Barthélemy</span><span class="dial-code">+590</span></li><li class="country standard" tabindex="-1" id="iti-item-sh" role="option" data-dial-code="290" data-country-code="sh"><div class="flag-box"><div class="iti-flag sh"></div></div><span class="country-name">Saint Helena</span><span class="dial-code">+290</span></li><li class="country standard" tabindex="-1" id="iti-item-kn" role="option" data-dial-code="1869" data-country-code="kn"><div class="flag-box"><div class="iti-flag kn"></div></div><span class="country-name">Saint Kitts and Nevis</span><span class="dial-code">+1869</span></li><li class="country standard" tabindex="-1" id="iti-item-lc" role="option" data-dial-code="1758" data-country-code="lc"><div class="flag-box"><div class="iti-flag lc"></div></div><span class="country-name">Saint Lucia</span><span class="dial-code">+1758</span></li><li class="country standard" tabindex="-1" id="iti-item-mf" role="option" data-dial-code="590" data-country-code="mf"><div class="flag-box"><div class="iti-flag mf"></div></div><span class="country-name">Saint Martin (Saint-Martin (partie française))</span><span class="dial-code">+590</span></li><li class="country standard" tabindex="-1" id="iti-item-pm" role="option" data-dial-code="508" data-country-code="pm"><div class="flag-box"><div class="iti-flag pm"></div></div><span class="country-name">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</span><span class="dial-code">+508</span></li><li class="country standard" tabindex="-1" id="iti-item-vc" role="option" data-dial-code="1784" data-country-code="vc"><div class="flag-box"><div class="iti-flag vc"></div></div><span class="country-name">Saint Vincent and the Grenadines</span><span class="dial-code">+1784</span></li><li class="country standard" tabindex="-1" id="iti-item-ws" role="option" data-dial-code="685" data-country-code="ws"><div class="flag-box"><div class="iti-flag ws"></div></div><span class="country-name">Samoa</span><span class="dial-code">+685</span></li><li class="country standard" tabindex="-1" id="iti-item-sm" role="option" data-dial-code="378" data-country-code="sm"><div class="flag-box"><div class="iti-flag sm"></div></div><span class="country-name">San Marino</span><span class="dial-code">+378</span></li><li class="country standard" tabindex="-1" id="iti-item-st" role="option" data-dial-code="239" data-country-code="st"><div class="flag-box"><div class="iti-flag st"></div></div><span class="country-name">São Tomé and Príncipe (São Tomé e Príncipe)</span><span class="dial-code">+239</span></li><li class="country standard" tabindex="-1" id="iti-item-sa" role="option" data-dial-code="966" data-country-code="sa"><div class="flag-box"><div class="iti-flag sa"></div></div><span class="country-name">Saudi Arabia (‫المملكة العربية السعودية‬‎)</span><span class="dial-code">+966</span></li><li class="country standard" tabindex="-1" id="iti-item-sn" role="option" data-dial-code="221" data-country-code="sn"><div class="flag-box"><div class="iti-flag sn"></div></div><span class="country-name">Senegal (Sénégal)</span><span class="dial-code">+221</span></li><li class="country standard" tabindex="-1" id="iti-item-rs" role="option" data-dial-code="381" data-country-code="rs"><div class="flag-box"><div class="iti-flag rs"></div></div><span class="country-name">Serbia (Србија)</span><span class="dial-code">+381</span></li><li class="country standard" tabindex="-1" id="iti-item-sc" role="option" data-dial-code="248" data-country-code="sc"><div class="flag-box"><div class="iti-flag sc"></div></div><span class="country-name">Seychelles</span><span class="dial-code">+248</span></li><li class="country standard" tabindex="-1" id="iti-item-sl" role="option" data-dial-code="232" data-country-code="sl"><div class="flag-box"><div class="iti-flag sl"></div></div><span class="country-name">Sierra Leone</span><span class="dial-code">+232</span></li><li class="country standard" tabindex="-1" id="iti-item-sg" role="option" data-dial-code="65" data-country-code="sg"><div class="flag-box"><div class="iti-flag sg"></div></div><span class="country-name">Singapore</span><span class="dial-code">+65</span></li><li class="country standard" tabindex="-1" id="iti-item-sx" role="option" data-dial-code="1721" data-country-code="sx"><div class="flag-box"><div class="iti-flag sx"></div></div><span class="country-name">Sint Maarten</span><span class="dial-code">+1721</span></li><li class="country standard" tabindex="-1" id="iti-item-sk" role="option" data-dial-code="421" data-country-code="sk"><div class="flag-box"><div class="iti-flag sk"></div></div><span class="country-name">Slovakia (Slovensko)</span><span class="dial-code">+421</span></li><li class="country standard" tabindex="-1" id="iti-item-si" role="option" data-dial-code="386" data-country-code="si"><div class="flag-box"><div class="iti-flag si"></div></div><span class="country-name">Slovenia (Slovenija)</span><span class="dial-code">+386</span></li><li class="country standard" tabindex="-1" id="iti-item-sb" role="option" data-dial-code="677" data-country-code="sb"><div class="flag-box"><div class="iti-flag sb"></div></div><span class="country-name">Solomon Islands</span><span class="dial-code">+677</span></li><li class="country standard" tabindex="-1" id="iti-item-so" role="option" data-dial-code="252" data-country-code="so"><div class="flag-box"><div class="iti-flag so"></div></div><span class="country-name">Somalia (Soomaaliya)</span><span class="dial-code">+252</span></li><li class="country standard" tabindex="-1" id="iti-item-za" role="option" data-dial-code="27" data-country-code="za"><div class="flag-box"><div class="iti-flag za"></div></div><span class="country-name">South Africa</span><span class="dial-code">+27</span></li><li class="country standard" tabindex="-1" id="iti-item-kr" role="option" data-dial-code="82" data-country-code="kr"><div class="flag-box"><div class="iti-flag kr"></div></div><span class="country-name">South Korea (대한민국)</span><span class="dial-code">+82</span></li><li class="country standard" tabindex="-1" id="iti-item-ss" role="option" data-dial-code="211" data-country-code="ss"><div class="flag-box"><div class="iti-flag ss"></div></div><span class="country-name">South Sudan (‫جنوب السودان‬‎)</span><span class="dial-code">+211</span></li><li class="country standard" tabindex="-1" id="iti-item-es" role="option" data-dial-code="34" data-country-code="es"><div class="flag-box"><div class="iti-flag es"></div></div><span class="country-name">Spain (España)</span><span class="dial-code">+34</span></li><li class="country standard" tabindex="-1" id="iti-item-lk" role="option" data-dial-code="94" data-country-code="lk"><div class="flag-box"><div class="iti-flag lk"></div></div><span class="country-name">Sri Lanka (ශ්‍රී ලංකාව)</span><span class="dial-code">+94</span></li><li class="country standard" tabindex="-1" id="iti-item-sd" role="option" data-dial-code="249" data-country-code="sd"><div class="flag-box"><div class="iti-flag sd"></div></div><span class="country-name">Sudan (‫السودان‬‎)</span><span class="dial-code">+249</span></li><li class="country standard" tabindex="-1" id="iti-item-sr" role="option" data-dial-code="597" data-country-code="sr"><div class="flag-box"><div class="iti-flag sr"></div></div><span class="country-name">Suriname</span><span class="dial-code">+597</span></li><li class="country standard" tabindex="-1" id="iti-item-sj" role="option" data-dial-code="47" data-country-code="sj"><div class="flag-box"><div class="iti-flag sj"></div></div><span class="country-name">Svalbard and Jan Mayen</span><span class="dial-code">+47</span></li><li class="country standard" tabindex="-1" id="iti-item-sz" role="option" data-dial-code="268" data-country-code="sz"><div class="flag-box"><div class="iti-flag sz"></div></div><span class="country-name">Swaziland</span><span class="dial-code">+268</span></li><li class="country standard" tabindex="-1" id="iti-item-se" role="option" data-dial-code="46" data-country-code="se"><div class="flag-box"><div class="iti-flag se"></div></div><span class="country-name">Sweden (Sverige)</span><span class="dial-code">+46</span></li><li class="country standard" tabindex="-1" id="iti-item-ch" role="option" data-dial-code="41" data-country-code="ch"><div class="flag-box"><div class="iti-flag ch"></div></div><span class="country-name">Switzerland (Schweiz)</span><span class="dial-code">+41</span></li><li class="country standard" tabindex="-1" id="iti-item-sy" role="option" data-dial-code="963" data-country-code="sy"><div class="flag-box"><div class="iti-flag sy"></div></div><span class="country-name">Syria (‫سوريا‬‎)</span><span class="dial-code">+963</span></li><li class="country standard" tabindex="-1" id="iti-item-tw" role="option" data-dial-code="886" data-country-code="tw"><div class="flag-box"><div class="iti-flag tw"></div></div><span class="country-name">Taiwan (台灣)</span><span class="dial-code">+886</span></li><li class="country standard" tabindex="-1" id="iti-item-tj" role="option" data-dial-code="992" data-country-code="tj"><div class="flag-box"><div class="iti-flag tj"></div></div><span class="country-name">Tajikistan</span><span class="dial-code">+992</span></li><li class="country standard" tabindex="-1" id="iti-item-tz" role="option" data-dial-code="255" data-country-code="tz"><div class="flag-box"><div class="iti-flag tz"></div></div><span class="country-name">Tanzania</span><span class="dial-code">+255</span></li><li class="country standard" tabindex="-1" id="iti-item-th" role="option" data-dial-code="66" data-country-code="th"><div class="flag-box"><div class="iti-flag th"></div></div><span class="country-name">Thailand (ไทย)</span><span class="dial-code">+66</span></li><li class="country standard" tabindex="-1" id="iti-item-tl" role="option" data-dial-code="670" data-country-code="tl"><div class="flag-box"><div class="iti-flag tl"></div></div><span class="country-name">Timor-Leste</span><span class="dial-code">+670</span></li><li class="country standard" tabindex="-1" id="iti-item-tg" role="option" data-dial-code="228" data-country-code="tg"><div class="flag-box"><div class="iti-flag tg"></div></div><span class="country-name">Togo</span><span class="dial-code">+228</span></li><li class="country standard" tabindex="-1" id="iti-item-tk" role="option" data-dial-code="690" data-country-code="tk"><div class="flag-box"><div class="iti-flag tk"></div></div><span class="country-name">Tokelau</span><span class="dial-code">+690</span></li><li class="country standard" tabindex="-1" id="iti-item-to" role="option" data-dial-code="676" data-country-code="to"><div class="flag-box"><div class="iti-flag to"></div></div><span class="country-name">Tonga</span><span class="dial-code">+676</span></li><li class="country standard" tabindex="-1" id="iti-item-tt" role="option" data-dial-code="1868" data-country-code="tt"><div class="flag-box"><div class="iti-flag tt"></div></div><span class="country-name">Trinidad and Tobago</span><span class="dial-code">+1868</span></li><li class="country standard" tabindex="-1" id="iti-item-tn" role="option" data-dial-code="216" data-country-code="tn"><div class="flag-box"><div class="iti-flag tn"></div></div><span class="country-name">Tunisia (‫تونس‬‎)</span><span class="dial-code">+216</span></li><li class="country standard" tabindex="-1" id="iti-item-tr" role="option" data-dial-code="90" data-country-code="tr"><div class="flag-box"><div class="iti-flag tr"></div></div><span class="country-name">Turkey (Türkiye)</span><span class="dial-code">+90</span></li><li class="country standard" tabindex="-1" id="iti-item-tm" role="option" data-dial-code="993" data-country-code="tm"><div class="flag-box"><div class="iti-flag tm"></div></div><span class="country-name">Turkmenistan</span><span class="dial-code">+993</span></li><li class="country standard" tabindex="-1" id="iti-item-tc" role="option" data-dial-code="1649" data-country-code="tc"><div class="flag-box"><div class="iti-flag tc"></div></div><span class="country-name">Turks and Caicos Islands</span><span class="dial-code">+1649</span></li><li class="country standard" tabindex="-1" id="iti-item-tv" role="option" data-dial-code="688" data-country-code="tv"><div class="flag-box"><div class="iti-flag tv"></div></div><span class="country-name">Tuvalu</span><span class="dial-code">+688</span></li><li class="country standard" tabindex="-1" id="iti-item-vi" role="option" data-dial-code="1340" data-country-code="vi"><div class="flag-box"><div class="iti-flag vi"></div></div><span class="country-name">U.S. Virgin Islands</span><span class="dial-code">+1340</span></li><li class="country standard" tabindex="-1" id="iti-item-ug" role="option" data-dial-code="256" data-country-code="ug"><div class="flag-box"><div class="iti-flag ug"></div></div><span class="country-name">Uganda</span><span class="dial-code">+256</span></li><li class="country standard" tabindex="-1" id="iti-item-ua" role="option" data-dial-code="380" data-country-code="ua"><div class="flag-box"><div class="iti-flag ua"></div></div><span class="country-name">Ukraine (Україна)</span><span class="dial-code">+380</span></li><li class="country standard" tabindex="-1" id="iti-item-ae" role="option" data-dial-code="971" data-country-code="ae"><div class="flag-box"><div class="iti-flag ae"></div></div><span class="country-name">United Arab Emirates (‫الإمارات العربية المتحدة‬‎)</span><span class="dial-code">+971</span></li><li class="country standard" tabindex="-1" id="iti-item-gb" role="option" data-dial-code="44" data-country-code="gb"><div class="flag-box"><div class="iti-flag gb"></div></div><span class="country-name">United Kingdom</span><span class="dial-code">+44</span></li><li class="country standard" tabindex="-1" id="iti-item-us" role="option" data-dial-code="1" data-country-code="us"><div class="flag-box"><div class="iti-flag us"></div></div><span class="country-name">United States</span><span class="dial-code">+1</span></li><li class="country standard" tabindex="-1" id="iti-item-uy" role="option" data-dial-code="598" data-country-code="uy"><div class="flag-box"><div class="iti-flag uy"></div></div><span class="country-name">Uruguay</span><span class="dial-code">+598</span></li><li class="country standard" tabindex="-1" id="iti-item-uz" role="option" data-dial-code="998" data-country-code="uz"><div class="flag-box"><div class="iti-flag uz"></div></div><span class="country-name">Uzbekistan (Oʻzbekiston)</span><span class="dial-code">+998</span></li><li class="country standard" tabindex="-1" id="iti-item-vu" role="option" data-dial-code="678" data-country-code="vu"><div class="flag-box"><div class="iti-flag vu"></div></div><span class="country-name">Vanuatu</span><span class="dial-code">+678</span></li><li class="country standard" tabindex="-1" id="iti-item-va" role="option" data-dial-code="39" data-country-code="va"><div class="flag-box"><div class="iti-flag va"></div></div><span class="country-name">Vatican City (Città del Vaticano)</span><span class="dial-code">+39</span></li><li class="country standard" tabindex="-1" id="iti-item-ve" role="option" data-dial-code="58" data-country-code="ve"><div class="flag-box"><div class="iti-flag ve"></div></div><span class="country-name">Venezuela</span><span class="dial-code">+58</span></li><li class="country standard" tabindex="-1" id="iti-item-vn" role="option" data-dial-code="84" data-country-code="vn"><div class="flag-box"><div class="iti-flag vn"></div></div><span class="country-name">Vietnam (Việt Nam)</span><span class="dial-code">+84</span></li><li class="country standard" tabindex="-1" id="iti-item-wf" role="option" data-dial-code="681" data-country-code="wf"><div class="flag-box"><div class="iti-flag wf"></div></div><span class="country-name">Wallis and Futuna (Wallis-et-Futuna)</span><span class="dial-code">+681</span></li><li class="country standard" tabindex="-1" id="iti-item-eh" role="option" data-dial-code="212" data-country-code="eh"><div class="flag-box"><div class="iti-flag eh"></div></div><span class="country-name">Western Sahara (‫الصحراء الغربية‬‎)</span><span class="dial-code">+212</span></li><li class="country standard" tabindex="-1" id="iti-item-ye" role="option" data-dial-code="967" data-country-code="ye"><div class="flag-box"><div class="iti-flag ye"></div></div><span class="country-name">Yemen (‫اليمن‬‎)</span><span class="dial-code">+967</span></li><li class="country standard" tabindex="-1" id="iti-item-zm" role="option" data-dial-code="260" data-country-code="zm"><div class="flag-box"><div class="iti-flag zm"></div></div><span class="country-name">Zambia</span><span class="dial-code">+260</span></li><li class="country standard" tabindex="-1" id="iti-item-zw" role="option" data-dial-code="263" data-country-code="zw"><div class="flag-box"><div class="iti-flag zw"></div></div><span class="country-name">Zimbabwe</span><span class="dial-code">+263</span></li><li class="country standard" tabindex="-1" id="iti-item-ax" role="option" data-dial-code="358" data-country-code="ax"><div class="flag-box"><div class="iti-flag ax"></div></div><span class="country-name">Åland Islands</span><span class="dial-code">+358</span></li></ul></div><input placeholder="(33) 23658792" class="form-control input-sm" id="phone" type="text" name="os2" autocomplete="off" data-intl-tel-input-id="0"></div></div>
										<span id="phone-success" class="glyphicon glyphicon-ok form-control-feedback" style="margin-right:14px;margin-top: 24px; display: none;" aria-hidden="true"></span>
										<span id="phone-error" class="glyphicon glyphicon-remove form-control-feedback" style="margin-right:14px;margin-top: 24px; display: none;" aria-hidden="true"></span>
									</div>
									<span>Email</span>
									<input type="email" class="form-control" placeholder="ejemplo@hotmail.com">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Informacion adicional</div>
								<div class="p-4">
									<span>Hotel / Domicilio a recogerle:</span>
									<input type="text" class="form-control">
									<span>Indicaciones especiales</span>
									<textarea type="text" class="form-control" placeholder="Escriba aquí si tiene algun requerimiento especial para su tour"></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2" style="border: .5px solid;background-image: url('https://www.elauditor.com.ar/media/wysiwyg/mercadopago.jpg');height: 384px;border-radius:10px;">
			</div>
		</div>  
		<div class="row footer mt-3">
			<div class="col-md-6 offset-md-2">
				<div class="row">
					<div class="col-6">
					</div>
					<div class="col-6">
						<div class="row">
							<div class="col-8" style="justify-content: right;display: flex;">
							    <button type="button" class="btn btn-lg btn-primary" onclick="step1Prew();">Atras</button> 
							</div>
							<div class="col-4" style="justify-content: center;display: flex;">
								<button type="button" class="btn btn-lg btn-primary" onclick="step2();">Siguiente</button>  
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 


<!-- MENU METODO PAGO -->
<div id="pago" style="display:none;"> 
		<div class="row main ">
			<div class="col-md-6 offset-md-2">
				<div class="card" style="">
					<h5 class="card-header" style="background-color:#001C63;color:white;">SHOPPING BAG </h5>
					<div class="card-body">
						<div class="row">
							<div class="col-3">
								<div class="row">
									<div class="col-12 mb-2" id="tarjeta" onclick="tarjeta();"><img src="https://www.gdltours.com/imagenes/pagos.png" id="imgPago1"></div>
									<div class="col-12 mb-2" id="cash" onclick="cash();"><img src="https://www.gdltours.com/imagenes/cash.png" id="imgPago2"></div>
									<div class="col-12 mb-2" id="paypal" onclick="paypal();"><img src="https://www.gdltours.com/imagenes/paypal.png" id="imgPago3"></div>
									<div class="col-12 mb-2" id="spei" onclick="spei(0);"><img src="https://www.gdltours.com/imagenes/spei.png" id="imgPago4"></div>
								</div>
							</div>
							<div class="col-9">
								
								<!-- SPEI -->
								<div id="divSpeiPrew" class="row" style="display:none;">
									<div class="col-12" style="text-align:center;">
										<img src="https://www.gdltours.com/imagenes/spei.png" style="width:200px;heigth:200px;">
									</div>
									<div class="col-12">
										<p style="padding: 3px;">- Para realizar tu pago requieres tener cuenta bancaria y banca en línea.<br>
											- Te enviaremos una CLABE para la transferencia a tu correo.<br>
											- No requieres enviarnos ningún comprobante.<br>
										- Recibirás tu guía de envío 24 hrs hábiles después de realizar la transferencia.</p>
										<p style="padding: 3px;"><b>Nota:</b>&nbsp;&nbsp;Tienes 48hrs naturales para realizar tu pago de lo contrario se cancelará tu pedido.</p>
									</div>
									<div class="col-12" style="text-align:center;">
										<button type="button" class="btn btn-warning" onclick="spei(1);">Realizar reservación</button>
									</div>
								</div>
								<div id="divSpei" style="display:none;">
									<div class="order-confirm-details_box light-gray-bg">
										<p style="padding-bottom: 5px;"><strong>Tu reservación ha sido realizada</strong></p>
										<p style="padding-bottom: 5px;">Método de pago: Transferencia SPEI</p>
										<p>CLABE: <span style="color: #f99d1c; font-size:15px;">646180111804408453</span></p>
										<p>Nombre del banco: <span style="color: #f99d1c; font-size:15px;">Banorte</span></p>
										<p>Nombre del beneficiario: <span style="color: #f99d1c; font-size:15px;">Panoramex Tours &amp; Travel </span></p>
										<p>Monto a pagar: <span style="color: #f99d1c; font-size:15px;">$6698.00 </span></p> 
										<p style="padding-bottom: 5px;"><br><strong>INSTRUCCIONES</strong></p>
										<p style="padding-bottom: 5px;">1. Accede a tu banca en línea.</p>
										<p style="padding-bottom: 5px;">2. Da de alta la CLABE en esta ficha. El banco deberá de ser STP.</p>
										<p style="padding-bottom: 5px;">3. Realiza la transferencia correspondiente por la cantidad exacta en esta ficha, de lo contrario se rechazará el cargo.</p>
										<p style="padding-bottom: 5px;">4. Al confirmar tu pago, el portal de tu banco generará un comprobante digital. En el podrás verificar que se haya realizado correctamente. Conserva este comprobante de pago.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2" style="border: .5px solid;background-image: url('https://www.elauditor.com.ar/media/wysiwyg/mercadopago.jpg');height: 384px;border-radius:10px;">
			</div>
		</div>
		<div class="row footer mt-3">
			<div class="col-md-6 offset-md-2">
				<div class="row">
					<div class="col-6">

					</div>
					<div class="col-6">
						<div class="row">
							<div class="col-8" style="justify-content: right;display: flex;">
								<button type="button" class="btn btn-lg btn-primary" onclick="step2Prew();">Atras</button> 
							</div>
							<div class="col-4" style="justify-content: center;display: flex;">
								<button type="button" class="btn btn-lg btn-primary" onclick="step3();">Siguiente</button>  
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<!--                        MODAL                -->
<div class="modal fade" id="myModal" data-backdrop="static">
      <div class="modal-dialog modal-md" role="document" id="modalLog">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="text-align: end;margin-right: 20px;margin-bottom: -10px;">
            <span aria-hidden="true">×</span>
          </button>
         <div class="modal-body">
                            <div class="row LM">
                               <div class="col-12">
                                   <div class="row LM" id="rowPrincipal" style="border: outset 1px;margin-top: 4px;">
                                     <input type="hidden" id="mesActualInput" value="01" name="31">
                                     <input type="hidden" id="añoActualInput" value="2020">
                                       <div class="col-12">
                                           <div class="row LM">
                                               <div class="col-1" style="font-size: 25px;">
                                                   <i class="fas fa-caret-left" id="preview"></i>
                                               </div>
                                               <div class="col-9" id="colFecha" onclick="fechaAños();">
                                                   <h4 style="text-align: center;">Enero   2020</h4>
                                                   </div>
                                                    <div class="col-1" style="text-align: right;font-size: 25px;">
                                                   <i class="fas fa-caret-right" onclick="next();" id="next" style="cursor:pointer;"></i>
                                               </div>
                                          </div>
                                       </div>
                                        <div class="col-12">
                                          <div class="calendar">
                                              <div class="calendar-square LM"><p class="days">Dom</p></div>
                                              <div class="calendar-square LM"><p class="days">Lun</p></div>
                                              <div class="calendar-square LM"><p class="days">Mar</p></div>
                                              <div class="calendar-square LM"><p class="days">Mie</p></div>
                                              <div class="calendar-square LM"><p class="days">Jue</p></div>
                                              <div class="calendar-square LM"><p class="days">Vie</p></div>
                                              <div class="calendar-square LM"><p class="days">Sab</p></div>
                                        </div>
                                        </div>
                                         <div class="col-12" style="margin-bottom: 15px;">
                                              <div class="calendar"><div class="calendar-square"><p class="extra"> 29</p></div><div class="calendar-square"><p class="extra"> 30</p></div><div class="calendar-square"><p class="extra"> 31</p></div><div class="calendar-square" id="01012020"><p class="inactive" id="3">1</p></div><div class="calendar-square" id="02012020"><p class="inactive" id="4">2</p></div><div class="calendar-square" id="03012020"><p class="inactive" id="5">3</p></div><div class="calendar-square" id="04012020"><p class="inactive" id="6">4</p></div><div class="calendar-square" id="05012020"><p class="inactive" id="71">5</p></div><div class="calendar-square" id="06012020"><p class="inactive">6</p></div><div class="calendar-square" id="07012020"><p class="inactive" id="21">7</p></div><div class="calendar-square" id="08012020"><p class="inactive" id="31">8</p></div><div class="calendar-square" id="09012020"><p class="inactive" id="41">9</p></div><div class="calendar-square" id="10012020"><p class="inactive" id="51">10</p></div><div class="calendar-square" id="11012020" onclick="seleccionar(this)"><p class="active" id="61">11</p></div><div class="calendar-square" id="12012020" onclick="seleccionar(this)"><p class="active" id="72">12</p></div><div class="calendar-square" id="13012020"><p class="inactive">13</p></div><div class="calendar-square" id="14012020" onclick="seleccionar(this)"><p class="active" id="22">14</p></div><div class="calendar-square" id="15012020" onclick="seleccionar(this)"><p class="active" id="32">15</p></div><div class="calendar-square" id="16012020" onclick="seleccionar(this)"><p class="active" id="42">16</p></div><div class="calendar-square" id="17012020" onclick="seleccionar(this)"><p class="active" id="52">17</p></div><div class="calendar-square" id="18012020" onclick="seleccionar(this)"><p class="active" id="62">18</p></div><div class="calendar-square" id="19012020" onclick="seleccionar(this)"><p class="active" id="73">19</p></div><div class="calendar-square" id="20012020"><p class="inactive">20</p></div><div class="calendar-square" id="21012020" onclick="seleccionar(this)"><p class="active" id="23">21</p></div><div class="calendar-square" id="22012020" onclick="seleccionar(this)"><p class="active" id="33">22</p></div><div class="calendar-square" id="23012020" onclick="seleccionar(this)"><p class="active" id="43">23</p></div><div class="calendar-square" id="24012020" onclick="seleccionar(this)"><p class="active" id="53">24</p></div><div class="calendar-square" id="25012020" onclick="seleccionar(this)"><p class="active" id="63">25</p></div><div class="calendar-square" id="26012020" onclick="seleccionar(this)"><p class="active" id="74">26</p></div><div class="calendar-square" id="27012020"><p class="inactive">27</p></div><div class="calendar-square" id="28012020" onclick="seleccionar(this)"><p class="active" id="24">28</p></div><div class="calendar-square" id="29012020" onclick="seleccionar(this)"><p class="active" id="34">29</p></div><div class="calendar-square" id="30012020" onclick="seleccionar(this)"><p class="active" id="44">30</p></div><div class="calendar-square" id="31012020" onclick="seleccionar(this)"><p class="active" id="54">31</p></div><div class="calendar-square"> <p class="extra">1</p> </div></div>
                                                       </div>
                                                 </div>
                                               </div> <div class="col-12" style="margin-top: 10px;margin-bottom: 20px;">
                                                 <div class="row colores">
                                                     <div class="col-4">
                                                         <div class="row LM">
                                                             <div class="col-6"><div class="rectangulo" style="background: rgb(237, 246, 246);"></div></div>
                                                             <div class="col-6"><p class="pColor">Active</p></div>
                                                         </div>
                                                     </div>
                                                     <div class="col-4">
                                                        <div class="row LM">
                                                             <div class="col-6"><div class="rectangulo" style=" background: repeating-linear-gradient(-45deg, rgb(255, 255, 255), rgb(255, 255, 255) 3px, rgb(0, 0, 0) 3px, rgb(235, 235, 235) 4px);"></div> </div>
                                                             <div class="col-6"><p class="pColor">Inactive</p></div>
                                                        </div>
                                                        
                                                     </div>
                                                     <div class="col-4">
                                                         <div class="row LM">
                                                             <div class="col-6"><div class="rectangulo" style="background: #ffa500"></div></div>
                                                             <div class="col-6"><p class="pColor">Event</p></div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                            <div class="col-12" style="display:none;" id="colInfo">
                                                <hr>
                                                  <div class="row LM">
                                                      <div class="col-12">
                                                      </div>
                                                      <div class="col-8" style="text-align:center;" id="colDiaElegido">
                                                          <p style="font-size: 16px;margin-bottom:0px;">Jueves, 20 noviembre 2019</p>
                                                      </div>
                                                      <div class="col-4">
                                                          <button type="button" class="btn btn-outline-success" style="width:90px;border-color:rgb(0, 132, 137);color:rgb(0, 132, 137);" onclick="diaSelects();" data-dismiss="modal" aria-label="Close">Elegir</button>
                                                      </div>
                                                 </div>
                                                 <hr>
                                              </div>
                                              </div></div>
        </div>
      </div>
    </div>
 
<div class="modal fade" id="modalMenu" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document" id="modalMenu">
        <div class="modal-content LM">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Extras</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="text-align: end;margin-right: 20px;margin-bottom: -10px;">
            <span aria-hidden="true">×</span>
          </button>
          </div>
          <hr>
            <div class="modal-body-Menu-Movil">
                  <div class="scrolling-wrapper">
                       <div class="card LM">
                          <div class="front">
                                   <div class="card-body">
                                         <img src="https://vivanda.vteximg.com.br/arquivos/ids/174306-1000-1000/1207249001.jpg?v=636619039701830000" id="imgProduct">
                                      <span id="spanPrecio" style="color:black;">$200 mxn </span>
                                      <a href="#" id="buttonProducto" class="btn btn-outline-success" style="margin-top: 9px;" onclick="menuList();" data-dismiss="modal" aria-label="Close">Elegir</a> 
                                  </div>
                             </div>
                          <div class="back">
                                   <div class="content">
                                     <h3 class="cardTitle" style="color:darkgray;font-size:12px;text-align:center;">Botella de tequila de 750ml de la reserva de la casa</h3>
                                     <br>
                                     <p id="happy"></p>
                                   </div>
                                 </div>
                       </div>
                       <div class="card LM">
                                <div class="front">
                                   <div class="card-body">
                                      <img src="https://geant.vteximg.com.br/arquivos/ids/219780-1000-1000/591229.jpg?v=636681930981800000" id="imgProduct">
                                      <span id="spanPrecio" style="color:black;">$200 mxn </span>
                                      <a href="#" id="buttonProducto" class="btn btn-outline-success" style="margin-top: 9px;" onclick="menuList();" data-dismiss="modal" aria-label="Close">Elegir</a> 
                                  </div>
                             </div>
                                <div class="back">
                                   <div class="content">
                                     <h3 class="cardTitle" style="color:darkgray;font-size:12px;text-align:center;">Botella de tequila de 750ml de la reserva de la casa</h3>
                                     <br>
                                     <p id="happy"></p>
                                   </div>
                                 </div>
                              </div>
                       <div class="card LM">
                                <div class="front">
                                   <div class="card-body">
                                         <img src="https://www.heb.com.mx/media/catalog/product/cache/20/image/d954a60aa48ef57022b0eb878e93bc1f/j/u/jugos-y-nectare-guayaba-botella-250-ml_x1.jpg" id="imgProduct">
                                      <span id="spanPrecio" style="color:black;">$200 mxn </span>
                                      <a href="#" id="buttonProducto" class="btn btn-outline-success" style="margin-top: 9px;" onclick="menuList();" data-dismiss="modal" aria-label="Close">Elegir</a> 
                                  </div>
                             </div>
                                <div class="back">
                                   <div class="content">
                                     <h3 class="cardTitle" style="color:darkgray;font-size:12px;text-align:center;">Botella de tequila de 750ml de la reserva de la casa</h3>
                                     <br>
                                     <p id="happy"></p>
                                   </div>
                                 </div>
                              </div>   
                       <div class="card LM">
                                <div class="front">
                                   <div class="card-body">
                                         <img src="https://www.superama.com.mx/Content/images/products/img_large/0750101116765L1.jpg" id="imgProduct">
                                      <span id="spanPrecio" style="color:black;">$200 mxn </span>
                                      <a href="#" id="buttonProducto" class="btn btn-outline-success" style="margin-top: 9px;" onclick="menuList();" data-dismiss="modal" aria-label="Close">Elegir</a> 
                                  </div>
                             </div>
                                <div class="back">
                                   <div class="content">
                                     <h3 class="cardTitle" style="color:darkgray;font-size:12px;text-align:center;">Botella de tequila de 750ml de la reserva de la casa</h3>
                                     <br>
                                     <p id="happy"></p>
                                   </div>
                                 </div>
                              </div>
                       <div class="card LM">
                                <div class="front">
                                   <div class="card-body">
                                         <img src="https://img2.freepng.es/20180505/ibw/kisspng-nachos-salsa-cheese-fries-mexican-cuisine-bacon-e-5aee106cb1dbc7.3414272015255512127285.jpg" id="imgProduct">
                                      <span id="spanPrecio" style="color:black;">$200 mxn </span>
                                      <a href="#" id="buttonProducto" class="btn btn-outline-success" style="margin-top: 9px;" onclick="menuList();" data-dismiss="modal" aria-label="Close">Elegir</a> 
                                  </div>
                             </div>
                                <div class="back">
                                   <div class="content">
                                     <h3 class="cardTitle" style="color:darkgray;font-size:12px;text-align:center;">Botella de tequila de 750ml de la reserva de la casa</h3>
                                     <br>
                                     <p id="happy"></p>
                                   </div>
                                 </div>
                              </div> 
                       <div class="card LM">
                                <div class="front">
                                   <div class="card-body">
                                         <img src="https://ortopedix.mx/wp-content/uploads/6224.png" id="imgProduct">
                                      <span id="spanPrecio" style="color:black;">$200 mxn </span>
                                      <a href="#" id="buttonProducto" class="btn btn-outline-success" style="margin-top: 9px;" onclick="menuList();" data-dismiss="modal" aria-label="Close">Elegir</a> 
                                  </div>
                             </div>
                                <div class="back">
                                   <div class="content">
                                     <h3 class="cardTitle" style="color:darkgray;font-size:12px;text-align:center;">Botella de tequila de 750ml de la reserva de la casa</h3>
                                     <br>
                                     <p id="happy"></p>
                                   </div>
                                 </div>
                              </div>     
                       <div class="card LM">
                                <div class="front">
                                   <div class="card-body">
                                         <img src="http://assets.stickpng.com/thumbs/585e5e47cb11b227491c33ee.png" id="imgProduct">
                                      <span id="spanPrecio" style="color:black;">$200 mxn </span>
                                      <a href="#" id="buttonProducto" class="btn btn-outline-success" style="margin-top: 9px;" onclick="menuList();" data-dismiss="modal" aria-label="Close">Elegir</a> 
                                  </div>
                             </div>
                                <div class="back">
                                   <div class="content">
                                     <h3 class="cardTitle" style="color:darkgray;font-size:12px;text-align:center;">Botella de tequila de 750ml de la reserva de la casa</h3>
                                     <br>
                                     <p id="happy"></p>
                                   </div>
                                 </div>
                              </div>
                       <div class="card LM">
                                <div class="front">
                                   <div class="card-body">
                                         <img src="https://toppng.com/uploads/preview/botella-sustentable-ciel-botella-de-agua-ciel-11563166514iv7b6pa4o8.png" id="imgProduct">
                                      <span id="spanPrecio" style="color:black;">$200 mxn </span>
                                      <a href="#" id="buttonProducto" class="btn btn-outline-success" style="margin-top: 9px;" onclick="menuList();" data-dismiss="modal" aria-label="Close">Elegir</a> 
                                  </div>
                             </div>
                                <div class="back">
                                   <div class="content">
                                     <h3 class="cardTitle" style="color:darkgray;font-size:12px;text-align:center;">Botella de tequila de 750ml de la reserva de la casa</h3>
                                     <br>
                                     <p id="happy"></p>
                                   </div>
                                 </div>
                              </div>
                </div>
            </div>
            <div class="modal-body-Menu">
                   <div class="row">
                               <div class="col-lg-3 col-6 cardContainer">
                             <div class="card LM">
                                <div class="front">
                                   <div class="card-body">
                                         <img src="https://vivanda.vteximg.com.br/arquivos/ids/174306-1000-1000/1207249001.jpg?v=636619039701830000" id="imgProduct">
                                      <span id="spanPrecio" style="color:black;">$200 mxn </span>
                                      <a href="#" id="buttonProducto" class="btn btn-outline-success" style="margin-top: 9px;" data-dismiss="modal" onclick="menuList();">Elegir</a> 
                                  </div>
                             </div>
                                <div class="back">
                                   <div class="content">
                                     <h3 class="cardTitle" style="color:darkgray;font-size:12px;text-align:center;">Botella de tequila de 750ml de la reserva de la casa</h3>
                                     <br>
                                     <p id="happy"></p>
                                   </div>
                                 </div>
                              </div>
                            </div>
                               <div class="col-lg-3 col-6 cardContainer">
                                <div class="card LM">
                                  <div class="card-body">
                                      <div class="col-12">
                                         <img src="https://geant.vteximg.com.br/arquivos/ids/219780-1000-1000/591229.jpg?v=636681930981800000" id="imgProduct">
                                      </div>
                                  </div>
                                <div class="col-12" style="border-top:1px solid alicebluedashed;border-top: 1px solid aliceblue;">
                                  <div class="row">
                                    <div class="col-12">
                                      <span id="spanPrecio">$30 mxn </span>
                                    </div>
                                    <div class="col-12">
                                      <a href="#" id="buttonProducto" class="btn btn-outline-success" style="margin-top: 9px;" data-dismiss="modal">Elegir</a> 
                                     </div>
                                  </div>
                                </div>
                                </div>   
                               </div>
                               <div class="col-lg-3 col-6 cardContainer">
                                <div class="card LM">
                                  <div class="card-body">
                                      <div class="col-12">
                                              <img src="https://www.heb.com.mx/media/catalog/product/cache/20/image/d954a60aa48ef57022b0eb878e93bc1f/j/u/jugos-y-nectare-guayaba-botella-250-ml_x1.jpg" id="imgProduct">
                                      </div>
                                  </div>
                                <div class="col-12" style="border-top:1px solid alicebluedashed;border-top: 1px solid aliceblue;">
                                  <div class="row">
                                    <div class="col-12">
                                      <span id="spanPrecio">$20 mxn </span>
                                    </div>
                                    <div class="col-12">
                                      <a href="#" id="buttonProducto" class="btn btn-outline-success" style="margin-top: 9px;">Elegir</a> 
                                     </div>
                                  </div>
                                </div>
                                </div>   
                               </div>
                               <div class="col-lg-3 col-6 cardContainer">
                                <div class="card LM">
                                  <div class="card-body">
                                      <div class="col-12">
                                          <img src="https://www.superama.com.mx/Content/images/products/img_large/0750101116765L1.jpg" id="imgProduct">
                                      </div>
                                  </div>
                                <div class="col-12" style="border-top:1px solid alicebluedashed;border-top: 1px solid aliceblue;">
                                  <div class="row">
                                    <div class="col-12">
                                      <span id="spanPrecio">$45 mxn </span>
                                    </div>
                                    <div class="col-12">
                                      <a href="#" id="buttonProducto" class="btn btn-outline-success" style="margin-top: 9px;">Elegir</a> 
                                     </div>
                                  </div>
                                </div>
                                </div>   
                               </div>
                               <div class="col-lg-3 col-6 cardContainer">
                                <div class="card LM">
                                  <div class="card-body">
                                      <div class="col-12">
                                          <img src="https://img2.freepng.es/20180505/ibw/kisspng-nachos-salsa-cheese-fries-mexican-cuisine-bacon-e-5aee106cb1dbc7.3414272015255512127285.jpg" id="imgProduct">
                                      </div>
                                  </div>
                                <div class="col-12" style="border-top:1px solid alicebluedashed;border-top: 1px solid aliceblue;">
                                  <div class="row">
                                    <div class="col-12">
                                      <span id="spanPrecio">$200 mxn </span>
                                    </div>
                                    <div class="col-12">
                                      <a href="#" id="buttonProducto" class="btn btn-outline-success" style="margin-top: 9px;">Elegir</a> 
                                     </div>
                                  </div>
                                </div>
                                </div>   
                               </div>
                               <div class="col-lg-3 col-6 cardContainer">
                                <div class="card LM">
                                  <div class="card-body">
                                      <div class="col-12">
                                             <img src="https://ortopedix.mx/wp-content/uploads/6224.png" id="imgProduct">
                                      </div>
                                  </div>
                                <div class="col-12" style="border-top:1px solid alicebluedashed;border-top: 1px solid aliceblue;">
                                  <div class="row">
                                    <div class="col-12">
                                      <span id="spanPrecio">$400 mxn </span>
                                    </div>
                                    <div class="col-12">
                                      <a href="#" id="buttonProducto" class="btn btn-outline-success" style="margin-top: 9px;">Elegir</a> 
                                     </div>
                                  </div>
                                </div>
                                </div>   
                               </div>
                               <div class="col-lg-3 col-6 cardContainer">
                                <div class="card LM">
                                  <div class="card-body">
                                      <div class="col-12">
                                            <img src="http://assets.stickpng.com/thumbs/585e5e47cb11b227491c33ee.png" id="imgProduct">
                                      </div>
                                  </div>
                                <div class="col-12" style="border-top:1px solid alicebluedashed;border-top: 1px solid aliceblue;">
                                  <div class="row">
                                    <div class="col-12">
                                      <span id="spanPrecio">$20 mxn </span>
                                    </div>
                                    <div class="col-12">
                                      <a href="#" id="buttonProducto" class="btn btn-outline-success" style="margin-top: 9px;">Elegir</a> 
                                     </div>
                                  </div>
                                </div>
                                </div>   
                               </div>
                               <div class="col-lg-3 col-6 cardContainer">
                                <div class="card LM">
                                  <div class="card-body">
                                      <div class="col-12">
                                              <img src="https://toppng.com/uploads/preview/botella-sustentable-ciel-botella-de-agua-ciel-11563166514iv7b6pa4o8.png" id="imgProduct">
                                      </div>
                                  </div>
                                <div class="col-12" style="border-top:1px solid alicebluedashed;border-top: 1px solid aliceblue;">
                                  <div class="row">
                                    <div class="col-12">
                                      <span id="spanPrecio">$20 mxn </span>
                                    </div>
                                    <div class="col-12">
                                      <a href="#" id="buttonProducto" class="btn btn-outline-success" style="margin-top: 9px;">Elegir</a> 
                                     </div>
                                  </div>
                                </div>
                                </div>   
                               </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="menuList" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document" id="menuList">
        <div class="modal-content LM">
           <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Extras Elegidos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="text-align: end;margin-right: 20px;margin-bottom: -10px;">
              <span aria-hidden="true">×</span>
              </button>
          </div>
          <hr>
            <div class="modal-body-MenuList-Mobile">
                <div class="row">
                    <div class="col-12" style="margin-bottom:20px;">
                        <div class="row">
                            <div class="col-lg-3 col-4">
                                <div class="row">
                                    <div class="col-12">
                                     <img src="https://vivanda.vteximg.com.br/arquivos/ids/174306-1000-1000/1207249001.jpg?v=636619039701830000" id="imgProduct">   
                                    </div>
                                    <div class="col-12" style="justify-content:center;display:flex;">
                                        <span style="font-size: 13px;justify-content: end;display: flex;">$500mxn</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-5">
                               <span style="color:darkgray;">El símbolo del Cuervo, que lleva la marca desde 1795.</span>
                            </div>
                            <div class="col-lg-3 col-3">
                               <button type="button" class="btn btn-outline-danger" style="font-size:small;margin-top:20px;margin-left:-10px;">Quitar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12" style="margin-bottom:20px;">
                        <div class="row">
                            <div class="col-lg-3 col-4">
                                <div class="row">
                                    <div class="col-12">
                                     <img src="https://geant.vteximg.com.br/arquivos/ids/219780-1000-1000/591229.jpg?v=636681930981800000" id="imgProduct">   
                                    </div>
                                    <div class="col-12" style="justify-content:center;display:flex;">
                                        <span style="font-size: 13px;justify-content: end;display: flex;">$500mxn</span>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-lg-6 col-5">
                               <span style="color:darkgray;">El símbolo del Cuervo, que lleva la marca desde 1795.</span>
                            </div>
                            <div class="col-lg-3 col-3">
                               <button type="button" class="btn btn-outline-danger" style="font-size:small;margin-top:20px;margin-left:-10px">Quitar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body-MenuList-Desktop">
            <div class="row">
             <div class="col-lg-3 col-6 cardContainer">
                 <div class="card LM">
                    <div class="front">
                       <div class="card-body">
                             <img src="https://vivanda.vteximg.com.br/arquivos/ids/174306-1000-1000/1207249001.jpg?v=636619039701830000" id="imgProduct">
                          <span id="spanPrecio" style="color:black;">$200 mxn </span>
                          <a href="#" id="buttonProducto" class="btn btn-outline-danger" style="margin-top: 9px;">Quitar</a> 
                      </div>
                 </div>
                    <div class="back">
                       <div class="content">
                         <h3 class="cardTitle" style="color:darkgray;font-size:12px;text-align:center;">Botella de tequila de 750ml de la reserva de la casa</h3>
                         <br>
                         <p id="happy"></p>
                       </div>
                     </div>
                  </div>
              </div>
             <div class="col-lg-3 col-6 cardContainer">
              <div class="card LM">
                 <div class="front">
                    <div class="card-body">
                          <img src="https://geant.vteximg.com.br/arquivos/ids/219780-1000-1000/591229.jpg?v=636681930981800000" id="imgProduct">
                       <span id="spanPrecio" style="color:black;">$200 mxn </span>
                       <a href="#" id="buttonProducto" class="btn btn-outline-danger" style="margin-top: 9px;">Quitar</a> 
                   </div>
                 </div>
                 <div class="back">
                    <div class="content">
                      <h3 class="cardTitle" style="color:darkgray;font-size:12px;text-align:center;">Botella de tequila de 750ml de la reserva de la casa</h3>
                      <br>
                      <p id="happy"></p>
                    </div>
                  </div>
               </div>
             </div>
            </div>
          </div>
        </div>
    </div>
 </div>
 </body>
</html>

<style>
.modal-body-MenuList-Mobile{
    display:none;
}
#bSub{
    font-size:16px;
    animation : mymove ease-in 1s;
}
#precioOculto{
    
}

@keyframes mymove {
to{
    font-size:16px;
}
from{
    font-size: 28px;    
}
}

#extrasList{ 
    margin-top:23%;
}

#buttonDelete{
    cursor:pointer;
}


.modal-body-Menu-Movil{
    display:none;
}
    
.modal-body-Menu{
    display:block;
}

.scrolling-wrapper {
  overflow-x: scroll;
  overflow-y: hidden;
  white-space: nowrap;
}

.card.LM {
    display: inline-block;
    white-space: initial;
}

.modal-content.LM{
    max-height: 500px;
}



/*-----------------FLIP CARD---------------------*/

.animation, #buttonDelete {
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
 
.cardContainer{
    
  -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  transition: all .3s ease;

  
  /*depth of the elements */
  -webkit-perspective: 800px;
  -moz-perspective: 800px;
  -o-perspective: 800px;
  perspective: 800px;

  /*border: 1px solid #ff0000;*/
  padding-left: 1%;
}

.card.LM{
  cursor: pointer;
  
  /*transition effects */
  -webkit-transition: -webkit-transform 0.6s;
  -moz-transition: -moz-transform 0.6s;
  -o-transition: -o-transform 0.6s;
  transition: transform 0.6s;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  -o-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.card.LM.flipped 
{
  -webkit-transform: rotateY( 180deg );
  -moz-transform: rotateY( 180deg );
  -o-transform: rotateY( 180deg );
  transform: rotateY( 180deg );
}

.card.LM .front,
.card.LM .back{
  display: block;
  height: 100%;
  width: 100%;
  color: white;
  text-align: center;
  position: absolute;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden;
  box-shadow: 3px 5px 20px 2px rgba(0, 0, 0, 0.25);
  -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, 0.16), 0 2px 5px rgba(0, 0, 0, 0.26);
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.16), 0 2px 5px rgba(0, 0, 0, 0.26);
}


.card.LM .back{
  width: 100%;
  padding-left: 3%;
  padding-right: 3%;
  font-size: 16px;
  text-align: left;
  line-height: 25px;
  background: #fff;
  -webkit-transform: rotateY( 180deg );
  -moz-transform: rotateY( 180deg );
  -o-transform: rotateY( 180deg );
  transform: rotateY( 180deg );
}

/*-----------------------------------------------------------------------------------*/


/*.card.LM:hover {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
  border-color: #28a745;
}*/

#buttonProducto{    
    font-size:small;
}

#spanPrecio{
    font-size:small;
}

.card.LM{
width: 150px;
height: 190px;
margin-bottom: 10px;
margin-left: 10px;
}

#imgProduct{
width: 90px;
height: 80px;
}

.modal-body-Menu{
text-align:center;    

}

#myModal {
  padding: 0px !important;
  display:flex !immportant;
}

.modal-full{
 min-width: 100%;
 margin: 0;
 padding:0;
}   

.modal-full .modal-content {
  min-height: 100vh;
  padding:0;
  
}	

#dateForm{
  outline: 0;
  border-width: 0 0 2px;
  border-color: #07c;
  border-radius:0px !important;
}

#divImgPrecio{
	display:none;
	text-align:center;
}

#botoness{
	display:none;
}

#eliminar{
	color: red;
	border-color:red;
}

#dateForm{
	width:93%;
}

#divPagos{
    display:none;
}
#tituloCel{
    display:none;
}
.list-group-item{
    margin:10px;
   /* border:0px !important;*/
}
.list-group-flush .list-group-item{
    border-radius:10px;
}


@media only screen and (min-width: 300px) and (max-width: 768px){
    .modal-body-MenuList-Mobile{
    display:block;
    }
    
    .modal-body-MenuList-Desktop{
    display:none;
    }
    
    #extrasList{
    margin-top:5%;
    } 
    
    .modal-body-Menu-Movil{
        display:block;
    }
    
    .modal-body-Menu{
        display:none;
    }
			
	#h3Tittle{
		font-size:1.10rem;
		text-align:center !important;
		font-weight: bold;
	}
	
	#imgCard{
		width:80px !important;
		height:70px !important;
	}
	
	.list-group-item{
		padding: .75rem 0rem;
	}
	
	
	#infoContacto{
		display:none;
	}
/*	#divDate{
				margin-top:20px;
	}*/
			
    #colFecha{
        margin-top: 5px;
    }
    #tituloCel{
	  display:block;
   }
   #tituloPC{
       display:none;
   }
   .md-stepper-horizontal .md-step{
       padding:0px !important;
   }
   .card.LM{

margin-left: 0px;
}
	     	
}
/*-----------------------------------------------------------------------------------------*/

.minus, .plus{
	width: 25px;
	height: 25px;
	background:#f2f2f2;
	border-radius: 33px;
	padding: 0px 5px 8px 5px;
	border: 1px solid #ddd;
	display: inline-block;
	vertical-align: middle;
	text-align: center;
	position:relative;
    top:-15%;
}
#input{
	height: 25px;
	width: 60px;
	text-align: center;
	font-size: 15px;
	border: 1px solid #ddd;
	border-radius: 10px;
	display: inline-block;
	vertical-align: middle;
}

#imgPago1,#imgPago2,#imgPago3,#imgPago4{
	width: 150px;
	cursor: pointer;
	justify-content: center;
	display: flex;
	border: 1px solid;
	border-style: solid;
	/*margin-top: 90%;*/
	text-align: center;
	height: 100px;
}


		
/*-----------------------------------------------------------------------------*/			
.input-stepper {
  background: white;
  /*border: 2px solid #dedede;*/
  display: inline-block;
  font-size: 20px;
  margin-bottom: 20px;
  padding: 5px;
}

.input-stepper button {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: transparent;
  border: none;
  cursor: pointer;
  font-size: 20px;
}

.input-stepper button[disabled] {
  cursor: not-allowed;
  opacity: .4;
}

.input-stepper button i {
   color: #07c;
}

.input-stepper input {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border: none;
  font-size: 20px;
  text-align: center;
  width: 36px;
}

/*-----------------------------------------------------------------------------*/		
		
		
		html, body {
			overflow-x:hidden;
		}
		.md-stepper-horizontal {
			display:table;
			width:100%;
			margin:0 auto;
			background-color:#FFFFFF;
			box-shadow: 0 3px 8px -6px rgba(0,0,0,.50);
		}
		.md-stepper-horizontal .md-step {
			display:table-cell;
			position:relative;
			padding:24px;
		}
		.md-stepper-horizontal .md-step:hover,
		.md-stepper-horizontal .md-step:active {
			background-color:rgba(0,0,0,0.04);
		}
		.md-stepper-horizontal .md-step:active {
			border-radius: 15% / 75%;
		}
		.md-stepper-horizontal .md-step:first-child:active {
			border-top-left-radius: 0;
			border-bottom-left-radius: 0;
		}
		.md-stepper-horizontal .md-step:last-child:active {
			border-top-right-radius: 0;
			border-bottom-right-radius: 0;
		}
		.md-stepper-horizontal .md-step:hover .md-step-circle {
			background-color:#757575;
		}
		.md-stepper-horizontal .md-step:first-child .md-step-bar-left,
		.md-stepper-horizontal .md-step:last-child .md-step-bar-right {
			display:none;
		}
		.md-stepper-horizontal .md-step .md-step-circle {
			width:30px;
			height:30px;
			margin:0 auto;
			background-color:#999999;
			border-radius: 50%;
			text-align: center;
			line-height:30px;
			font-size: 16px;
			font-weight: 600;
			color:#FFFFFF;
		}
		.md-stepper-horizontal.green .md-step.active .md-step-circle {
			background-color:#FA3C3D;
		}
		.md-stepper-horizontal.orange .md-step.active .md-step-circle {
			background-color:#FA3C3D;
		}
		.md-stepper-horizontal .md-step.active .md-step-circle {
			background-color: rgb(33,150,243);
		}
		.md-stepper-horizontal .md-step.done .md-step-circle:before {
			font-family:'FontAwesome';
			font-weight:100;
			content: "\f00c";
		}
		.md-stepper-horizontal .md-step.done .md-step-circle *,
		.md-stepper-horizontal .md-step.editable .md-step-circle * {
			display:none;
		}
		.md-stepper-horizontal .md-step.editable .md-step-circle {
			-moz-transform: scaleX(-1);
			-o-transform: scaleX(-1);
			-webkit-transform: scaleX(-1);
			transform: scaleX(-1);
		}
		.md-stepper-horizontal .md-step.editable .md-step-circle:before {
			font-family:'FontAwesome';
			font-weight:100;
			content: "\f040";
		}
		.md-stepper-horizontal .md-step .md-step-title {
			margin-top:16px;
			font-size:16px;
			font-weight:600;
		}
		.md-stepper-horizontal .md-step .md-step-title,
		.md-stepper-horizontal .md-step .md-step-optional {
			text-align: center;
			color:rgba(0,0,0,.26);
		}
		.md-stepper-horizontal .md-step.active .md-step-title {
			font-weight: 600;
			color:rgba(0,0,0,.87);
		}
		.md-stepper-horizontal .md-step.active.done .md-step-title,
		.md-stepper-horizontal .md-step.active.editable .md-step-title {
			font-weight:600;
		}
		.md-stepper-horizontal .md-step .md-step-optional {
			font-size:12px;
		}
		.md-stepper-horizontal .md-step.active .md-step-optional {
			color:rgba(0,0,0,.54);
		}
		.md-stepper-horizontal .md-step .md-step-bar-left,
		.md-stepper-horizontal .md-step .md-step-bar-right {
			position:absolute;
			top:36px;
			height:1px;
			border-top:1px solid #DDDDDD;
		}
		.md-stepper-horizontal .md-step .md-step-bar-right {
			right:0;
			left:50%;
			margin-left:20px;
		}
		.md-stepper-horizontal .md-step .md-step-bar-left {
			left:0;
			right:50%;
			margin-right:20px;
		}
	</style>
<script>
 
$('.card').click(function(){
   $(this).toggleClass('flipped');
});
        
$('#buttonDelete').on('click', 
   function(){
    $(this).toggleClass('flipped')
    //$(this).css('background-color','red');
    //$(this).css('color','#000');
     }
  )

/*--------------------------    --------------------------------------------------*/
var id = localStorage.getItem("idSession");

if( id == null || id == ""){    
    var idSession = Math.floor(Math.random() * 1000000);
    localStorage.setItem("idSession",idSession);
}

var priceFijoAdulto = 990;
var priceMenor = 0;
var priceFijoMenor = 590;
var total = 0;
var listCont = 0;
var cntSt = 20, cntSi = 0;

if(screen.width > 1200){
    console.log("mayor de 1200");
 $('#modalLog').removeClass("modal-dialog modal-full");
 $('#modalLog').addClass("modal-dialog modal-md");
 
}else{  
    console.log("menor de 1200");
 $('#modalLog').removeClass("modal-dialog modal-md");
 $('#modalLog').addClass("modal-dialog modal-full");
} 
 
var calendar = {
        id: "dateForm",
       datesClose: ['2019-12-05'],
       daysWeekClose: [1],
       rango: false,
       excepcion : ["2019-12-30","2019-12-23",'2019-12-05'],
       diasAnteriores : true,
     };
var calendario = crearCalendario(calendar);
$('.modal-body').html(calendario);
diasInactivosFuncion();


var stepper = function () {
  var stepperNumber,
      minusButton;
   
  return {
    
    allSteppers: $( '.input-stepper' ),
  
    // check to see if the input is at '0'...
    checkStepperNumber: function ( thisStepper ) {
      stepperInput = $( thisStepper ).find( 'input' );
      stepperNumber = stepperInput.val();
      decrementButton = $( thisStepper ).find( 'button.minus' );

      if ( stepperNumber === '0' || stepperNumber <= 0 ) {
        // if so, disable the minus button. 
        decrementButton.prop( 'disabled', true );
        stepperInput.val( 0 );
      } else {
        // if number is positive, enable the minus button
        decrementButton.prop( 'disabled', false );
      }

    },

    init: function () {
      stepper.allSteppers.each( function ( index, element ) {
        var thisStepperInput = $( element ).find( 'input' );
        var thisMinusButton = $( element ).find( 'button.minus' );

        if ( thisStepperInput.val() === '0' || thisStepperInput.val() <= 0 ) {
          thisMinusButton.prop( 'disabled', true );
          thisStepperInput.val( 0 );
        } else {
          // if number is positive, enable the minus button
          thisMinusButton.prop( 'disabled', false );
        }
      });
    }
    
  }
}();

// on button.plus click ...
$( '.input-stepper button.plus' ).on( 'click', function ( e ) {
  thisStepper = $( e.target ).closest( '.input-stepper' );
  stepperInput = thisStepper.find( 'input' );
  
  // check the input value
  stepperNumber = stepperInput.val();
  
  // increment the input value
  stepperNumber++;
  stepperInput.val( stepperNumber );
  
  // then check the stepper number
  stepper.checkStepperNumber( thisStepper );
});

// on button.minus click ...
$( '.input-stepper button.minus' ).on( 'click', function ( e ) {
  thisStepper = $( e.target ).closest( '.input-stepper' );
  stepperInput = thisStepper.find( 'input' );
  
  // check the input value
  stepperNumber = stepperInput.val();
  
  // decrement the input value
  stepperNumber--;
  stepperInput.val( stepperNumber );
  
  // then check the stepper number
  stepper.checkStepperNumber( thisStepper );
});

// on input field blur ...
$( '.input-stepper input' ).on( 'blur', function ( e ) {
  thisStepper = $( e.target ).closest( '.input-stepper' );
  // check the stepper number
  stepper.checkStepperNumber( thisStepper );
});

// check the stepper number on load
if ( $( '.input-stepper' ).length ) {
  stepper.init();
 }
 
/*-----------------------------------------------------------------------------*/


var input = document.querySelector("#phone");
window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
  });

function step1(){
		//	$('#compra').css('display','none');
		$('#compra').hide(300);
		//	$('#datos').css('display','block');
			$('#datos').show(300);
			$('#right1').css('border-color','#FA3C3D');
			$('#left2').css('border-color','#FA3C3D');
			$('#active2').removeClass('md-step');
			$('#active2').addClass('md-step active');
			$('#infoPanelTitulo').text("Informacion del pedido");
			$('#infoPanelContenido').html("<b>Total:          $1200</b>");
			
		}

function step1Prew(){
			$('#active2').removeClass('md-step active');
			$('#active2').addClass('md-step');
			
			$('#compra').show(300);
			//$('#compra').css('display','block');
			//$('#datos').css('display','none');
			$('#datos').hide(300);
			
			$('#right1').css('border-color','');
			$('#left2').css('border-color','');
			
			
			$('#infoContacto').html("<p style='margin-top:20px;' id='infoPanelTitulo'>¿Alguna duda? contactanos:</p><p id='infoPanelContenido'><u>+52 3310902421</u></p>");

		}

function step2(){
			$('#datos').hide(300);
			//$('#datos').css('display','none');
			//$('#pago').css('display','block');
			$('#pago').show(300);
			
			$('#right2').css('border-color','#FA3C3D');
			$('#left3').css('border-color','#FA3C3D');
			
			$('#active3').removeClass('md-step');
			$('#active3').addClass('md-step active');
			
			
		}

function step2Prew(){
			$('#active3').removeClass('md-step active');
			$('#active3').addClass('md-step');
			
			$('#datos').show(300);
			//$('#datos').css('display','block');
			//$('#pago').css('display','none');
			$('#pago').hide(300);
			
			$('#right2').css('border-color','');
			$('#left3').css('border-color','');
			
		}

function step3(){
			
		}

function cash(){
			$('#cash').css('opacity','1.0');
			$('#paypal').css('opacity','0.2');
			$('#spei').css('opacity','0.2');
			$('#tarjeta').css('opacity','0.2');
			
			$('#imgPago2').css('border','3px solid green');
			$('#imgPago1').css('border','1px solid ');
			$('#imgPago3').css('border','1px solid ');
			$('#imgPago4').css('border','1px solid ');
			
			$('#divSpei').css('display','none');
			$('#divSpeiPrew').css('display','none');
			
		}

function paypal(){
			$('#paypal').css('opacity','1.0');
			$('#cash').css('opacity','0.2');
			$('#spei').css('opacity','0.2');
			$('#tarjeta').css('opacity','0.2');
			
			$('#imgPago3').css('border','3px solid green');
			$('#imgPago2').css('border','1px solid ');
			$('#imgPago1').css('border','1px solid ');
			$('#imgPago4').css('border','1px solid ');
			
			
			$('#divSpei').css('display','none');
			$('#divSpeiPrew').css('display','none');
		}

function spei(data){
			var x = data;
			$('#spei').css('opacity','1.0');
			$('#paypal').css('opacity','0.2');
			$('#cash').css('opacity','0.2');
			$('#tarjeta').css('opacity','0.2');
			
			$('#imgPago4').css('border','3px solid green');
			$('#imgPago2').css('border','1px solid ');
			$('#imgPago3').css('border','1px solid ');
			$('#imgPago1').css('border','1px solid ');
			
			if(x==0){
				$('#divSpei').css('display','none');
				$('#divSpeiPrew').css('display','block');
			}else if(x==1){
				$('#divSpeiPrew').css('display','none');
				$('#divSpei').css('display','block');
			}
			
			
			

		}

function tarjeta(){
			$('#tarjeta').css('opacity','1.0');
			$('#paypal').css('opacity','0.2');
			$('#spei').css('opacity','0.2');
			$('#cash').css('opacity','0.2');
			
			$('#imgPago1').css('border','3px solid green');
			$('#imgPago2').css('border','1px solid ');
			$('#imgPago3').css('border','1px solid ');
			$('#imgPago4').css('border','1px solid ');
			
			$('#divSpei').css('display','none');
			$('#divSpeiPrew').css('display','none');
			
		}
		
function plusAdultoPrice(){
       // $('#subTotal').css('display','none');
        inputAdulto = $('#inputAdulto').val();
        inputAdulto = parseInt(inputAdulto) + 1;
        priceAdulto = priceFijoAdulto * inputAdulto;
        console.log(priceMenor);
        total = priceAdulto + priceMenor;
        console.log(total);
        
        $('#subTotal').html("<b id='bSub'> "+ total +"mxn</b>");
       $('#precioOculto').html("<b id='bSub'> "+ total +"mxn</b>");
       
       
	    
	    $('#subTotal').css('display','none');
	    $('#precioOculto').css('display','block');
	    
		 addEventListener("animationend",function(){
        //$('#subTotal').css('display','block');
	    //$('#precioOculto').css('display','none');
        })
         
        
		}
	
function minusAdultoPrice(){
        
        inputAdulto = $('#inputAdulto').val();
        inputAdulto = parseInt(inputAdulto) - 1;
        priceAdulto = priceFijoAdulto * inputAdulto;
        
        total = priceAdulto + priceMenor;
        
        $('#subTotal').html("<b id='bSub'> "+ total +"mxn</b>");
       $('#precioOculto').html("<b id='bSub'> "+ total +"mxn</b>");
       
       
	    
	    $('#subTotal').css('display','none');
	    $('#precioOculto').css('display','block');
		}

function plusMenorPrice(){
        
        inputMenor = $('#inputMenor').val();
        inputMenor = parseInt(inputMenor) + 1;
        priceMenor = priceFijoMenor * inputMenor;
        
        total = priceAdulto + priceMenor;
        
        $('#subTotal').html("<b id='bSub'> "+ total +"mxn</b>");
       $('#precioOculto').html("<b id='bSub'> "+ total +"mxn</b>");
       
       
	    
	    $('#subTotal').css('display','none');
	    $('#precioOculto').css('display','block');
		}
		
function minusMenorPrice(){
        
        inputMenor = $('#inputMenor').val();
        inputMenor = parseInt(inputMenor) - 1;
        priceMenor = priceFijoMenor * inputMenor;
        
        total = priceAdulto + priceMenor;
        
        $('#subTotal').html("<b id='bSub'> "+ total +"mxn</b>");
       $('#precioOculto').html("<b id='bSub'> "+ total +"mxn</b>");
       
       
	    
	    $('#subTotal').css('display','none');
	    $('#precioOculto').css('display','block');
        
		}
		 
function deleteButton(){    
		    $('#buttonDelete').css('background-color','#d11a2a');
		    $('#buttonDelete').css('color','#fff');
		    $('#buttonDelete').html("<span id='confirmar'>¿Confirmar? <i class='fas fa-times' style='color: #fff;margin-left:15px;font-size:18px;' onclick='eliminados();'></i> </span>");
		    
		    if(screen.width < 500){
                 
		        $(".fas.fa-times").css({
                  fontSize: 20
                 });               

                 
                 $("#confirmar").css({
                     fontSize:14
                 })
		    }
		
		    setTimeout(function(){ 
		    $('#buttonDelete').css('background-color','#fff');
		    //$('#buttonDelete').css('color','#fff');
		    $('#buttonDelete').html("<span style='color:darkgray;'>Quitar  </span><i class='fas fa-trash-alt' style='color: darkgray;'></i>");
		      
		        
		    }, 2000); 
		}
        
function menuList(){
           listCont ++ ;
           
           $('#extrasList').html("<span style='color:rgb(0, 132, 137);cursor:pointer;'> Extras Elegidos <i class='fas fa-briefcase'></i> (" + listCont + ")</span>")
           
        }
        
function eliminado(){
            alert("confirmado");
        }

function eliminados(){
            alert("cancelado");
        }
        


/*
function doStuffwTimeout(){
  setTimeout(function(){
    if(cntSt>14){
      cntSt = cntSt - 1 ;
      console.log('setTimeout() executed, cntSt=' + cntSt);
      $('#bSub').css('font-size', cntSt);
      doStuffwTimeout();
    }
  },150);
}*/

</script>