<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Triage</title>
  <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/flat-icon/flaticon.css">
  <link rel="stylesheet" href="temp/styles/styles.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2.min.css">
  <link href="assets/plugins/bootstrap-toggle-master/stylesheet.css" rel="stylesheet">
  <link href="assets/plugins/bootstrap-toggle-master/css/bootstrap-toggle.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/animate/animate.css">
  <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.min.css">
</head>
<body>
  <div class="main-wrapper">
    <header class="header header--bg">
      <div class="container">
        <nav class="navbar">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="#">Triage</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav pull-right">
              <li><a href="#">Inicio</a></li>
            </ul>
          </div>
        </nav>
        <div class="header__content text-center">
          <h1 class="header__content__title">Clasificacion del Triage</h1>
          
          <table class="ciclo bounceIn triage">
								   <?php
						   			for($i=1;$i<=5;$i++){
                      
										?>
										<tr>
											<?php
                      $j=1;
											while($j<=2){
                        if ($j == 2) {
                          
                          if($i==1){
                            
                            $res = "REANIMACION. Atencion inmediata";
                          }
                          if($i==2){
                            
                            $res = "EMERGENCIA. Hasta 15 minutos de espera";
                          }
                          if($i==3){
                            
                            $res = "URGENCIA. Hasta 30 minutos de espera";
                          }
                          if($i==4){
                            
                            $res = "PRIORITARIO. Hasta 60 minutos de espera";
                          }
                          if($i==5){
                            
                            $res = " NO URGENTE. Hasta 120 minutos de espera";
                          }
                        }
                        if($j==1){
                          $color="rojo";
                          $res = "Nivel ".$i; 
                        }
                        if($i==2){
                          $color="naranja";
                        }
                        if($i==3){
                          $color="amarillo";
                        }
                        if($i==4){
                          $color="verde";
                        }
                        if($i==5){
                          $color="azul";
                        }						
												?>
												<td class="<?php echo $color ?>"> <?php echo  $res ?> </td>
                        <?php	
                        $j++;
											}
											?>
										</tr>
										<?php
									   }
						   		?>
							</table>
          

        </div>
      </div>
    </header>
    
    <section class="service">
    <form role="form" class="interno" action="resultado.php" method="POST">
      <div class="container">
      <div class="page-section text-center">
      <h2 class="page-section__title">Datos del paciente</h2>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="thumbnail">
                <i class="material-icons">text_fields</i>
                <p class="service__title1">Nombre:</p>
                <input type="text" name="nom" class="form-control select1" required>
              </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="thumbnail">
                <i class="material-icons">view_comfy</i>
                <p class="service__title1">Edad:</p>
                <input type="number" name="edad" class="form-control select1" required>
              </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="thumbnail">
                <i class="material-icons">wc</i>
                <p class="service__title1">Sexo:</p>
                <select name="sex" class="form-control select1" required>
                  <option value="H">Masculino</option>
                  <option value="M">Femenino</option>
                </select>
              </div>
      </div>
      </div>
        <div class="page-section text-center">
          <h2 class="page-section__title">Sintomas</h2>
          <p class="page-section__paragraph">Seleccione el sintoma que tiene el paciente</p>
          <div class="row gutters-40">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="thumbnail">
                <i class="material-icons">filter_5</i>
                <p class="service__title1">¿Tiene fiebre?</p>
                <select name="preg1" class="form-control select1" required>
                  <option value="no">No</option>
                  <option value="si">Si</option>
                </select>
                <p class="service__paragraph">Aumento temporal de la temperatura corporal promedio</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="thumbnail">
                <i class="material-icons">filter_5</i>
                <p class="service__title1">¿Tiene dolor de cabeza?</p>
                <select name="preg2" class="form-control select1" required>
                  <option value="no">No</option>
                  <option value="si">Si</option>
                </select>
                <p class="service__paragraph">Sensación dolorosa en cualquier parte de la cabeza</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="thumbnail">
                <i class="material-icons">filter_5</i>
                <p class="service__title1">¿Tiene dolor de garganta?</p>
                <select name="preg3" class="form-control select1" required>
                  <option value="no">No</option>
                  <option value="si">Si</option>
                </select>
                <p class="service__paragraph">Irritación en la garganta que puede ocurrir o no al tragar</p>
              </div>
            </div>
          </div>
          <div class="row gutters-40">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="thumbnail">
                <i class="material-icons">filter_5</i>
                <p class="service__title1">¿Tiene irritacion en los ojos?</p>
                <select name="preg4" class="form-control select1" required>
                  <option value="no">No</option>
                  <option value="si">Si</option>
                </select>
                <p class="service__paragraph">Ojos rojos, ojos llorosos</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="thumbnail">
                <i class="material-icons clas2">filter_4</i>
                <p class="service__title2">¿Presenta dolores inespecíficos leves?</p>
                <select name="preg5" class="form-control select1" required>
                  <option value="no">No</option>
                  <option value="si">Si</option>
                </select>
                <p class="service__paragraph">Dolores en cualquier parte del cuerpo</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="thumbnail">
                <i class="material-icons clas2">filter_4</i>
                <p class="service__title2">¿Presenta traumatismos y esguinces leves?</p>
                <select name="preg6" class="form-control select1" required>
                  <option value="no">No</option>
                  <option value="si">Si</option>
                </select>
                <p class="service__paragraph">Lesión, en alguna parte del cuerpo</p>
              </div>
            </div>

            <div class="row gutters-40">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="thumbnail">
                  <i class="material-icons clas2">filter_4</i>
                  <p class="service__title2">¿Presenta otalgia?</p>
                  <select name="preg7" class="form-control select1" required>
                    <option value="no">No</option>
                    <option value="si">Si</option>
                  </select>
                  <p class="service__paragraph"><b> Otalgia: </b>dolor de oído</p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="thumbnail">
                  <i class="material-icons clas2">filter_4</i>
                  <p class="service__title2">¿Presenta Odontalgias?</p>
                  <select name="preg8" class="form-control select1" required>
                    <option value="no">No</option>
                    <option value="si">Si</option>
                  </select>
                  <p class="service__paragraph"><b>Odontalgias:</b> dolor dental</p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="thumbnail">
                  <i class="material-icons clas3">filter_3</i>
                  <p class="service__title3">¿Presenta hipertensión arterial?</p>
                  <select name="preg9" class="form-control select1" required>
                    <option value="no">No</option>
                    <option value="si">Si</option>
                  </select>
                  <p class="service__paragraph">Presión arterial por encima de 140/90</p>
                </div>
              </div>
            </div>

              <div class="row gutters-40">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <div class="thumbnail">
                    <i class="material-icons clas3">filter_3</i>
                    <p class="service__title3">¿Presenta dolor abdominal?</p>
                    <select name="preg10" class="form-control select1" required>
                      <option value="no">No</option>
                      <option value="si">Si</option>
                    </select>
                    <p class="service__paragraph">Dolor del abdomen o de la pared muscular externa</p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <div class="thumbnail">
                    <i class="material-icons clas3">filter_3</i>
                    <p class="service__title3">¿Presenta heridas sin signos de gravedad?</p>
                    <select name="preg11" class="form-control select1" required>
                      <option value="no">No</option>
                      <option value="si">Si</option>
                    </select>
                    <p class="service__paragraph">Lesión que se produce en alguna parte del cuerpo</p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <div class="thumbnail">
                    <i class="material-icons clas3">filter_3</i>
                    <p class="service__title3">¿Presenta ingesta medicamentosa?</p>
                    <select name="preg12" class="form-control select1" required>
                      <option value="no">No</option>
                      <option value="si">Si</option>
                    </select>
                    <p class="service__paragraph">Automedicacion </p>
                  </div>
                </div>
              </div>

              <div class="row gutters-40">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <div class="thumbnail">
                    <i class="material-icons clas4">filter_2</i>
                    <p class="service__title4">¿Presenta estatus convulsivo?</p>
                    <select name="preg13" class="form-control select1" required>
                      <option value="no">No</option>
                      <option value="si">Si</option>
                    </select>
                    <p class="service__paragraph">Contracción involuntaria de un músculo</p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <div class="thumbnail">
                    <i class="material-icons clas4">filter_2</i>
                    <p class="service__title4">¿Presenta isquemia?</p>
                    <select name="preg14" class="form-control select1" required>
                      <option value="no">No</option>
                      <option value="si">Si</option>
                    </select>
                    <p class="service__paragraph"><b>Isquemia:</b> disminución de la circulación de sangre</p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <div class="thumbnail">
                    <i class="material-icons clas4">filter_2</i>
                    <p class="service__title4">¿Presenta estados de agitación?</p>
                    <select name="preg15" class="form-control select1" required>
                      <option value="no">No</option>
                      <option value="si">Si</option>
                    </select>
                    <p class="service__paragraph">Moverse de forma brusca</p>
                  </div>
                </div>
              </div>

              <div class="row gutters-40">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <div class="thumbnail">
                    <i class="material-icons clas4">filter_2</i>
                    <p class="service__title4">¿Presenta taquicardia, pulso filiforme?</p>
                    <select name="preg16" class="form-control select1" required>
                      <option value="no">No</option>
                      <option value="si">Si</option>
                    </select>
                    <p class="service__paragraph">Corazon acelerado</p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <div class="thumbnail">
                    <i class="material-icons clas5">filter_1</i>
                    <p class="service__title5">¿Presenta respiración ausente, o superficial?</p>
                    <select name="preg17" class="form-control select1" required>
                      <option value="no">No</option>
                      <option value="si">Si</option>
                    </select>
                    <p class="service__paragraph">Respiracion lenta y moribunda</p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <div class="thumbnail">
                    <i class="material-icons clas5">filter_1</i>
                    <p class="service__title5">¿Presenta pulsos periféricos o muy débiles?</p>
                    <select name="preg18" class="form-control select1" required>
                      <option value="no">No</option>
                      <option value="si">Si</option>
                    </select>
                    <p class="service__paragraph">Ritmo cardiaco debil</p>
                  </div>
                </div>
              </div>

              <div class="row gutters-40">
                <div class="col-md-4">
                  <div class="thumbnail">
                    <i class="material-icons clas5">filter_1</i>
                    <p class="service__title5">¿Presenta cianosis central y periférica?</p>
                    <select name="preg19" class="form-control select1" required>
                      <option value="no">No</option>
                      <option value="si">Si</option>
                    </select>
                    <p class="service__paragraph"><b>Cianosis: </b>coloración azul o lívida de la piel</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <i class="material-icons clas5">filter_1</i>
                    <p class="service__title5">¿Presenta palidez grisácea, livideces?</p>
                    <select name="preg20" class="form-control select1" required>
                      <option value="no">No</option>
                      <option value="si">Si</option>
                    </select>
                    <p class="service__paragraph">Pérdida anormal del color de la piel</p>
                  </div>
                  <button type="submit" class="button button--hover">Clasificar <i class="fas fa-check"></i></button>
                </div>
              </div>
          </div>
        </div>
      </div>
      </form>
    </section>
    
      
    <footer class="footer footer--bg">
        <div class="container">
          <div class="page-section">
            <div class="row gutters-100">
              <div class="col-xs-4 col-x-4 col-md-4">
                  
              </div>
              <div class="col-xs-6 col-x-6 col-md-6 col-lg-6 ">
                <div class="footer__fourth center">
                  <h4 class="footer__title">INTEGRANTES</h4>
                  <div class="row">
                    <ul>
                      <li><a href="#"><img src="imagenes/maiin.jpg" width="100px" alt="Jose Luis Escalona"></a></li>
                      <li><a href="#">----------</a></li>
                      <li><a href="#"><img src="imagenes/chope.jpg" width="100px" alt="Jose Luis Olvera"></a></li>
                    </ul>
                  </div>
                  <div class="row">
                    <ul>
                      <li><a href="#">Jose Luis Escalona</a></li>
                      <li><a href="#"></a>---</li>
                      <li><a href="#">Jose Luis Olvera</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <hr class="footer__horizontal-bar">
            <p class="footer__bottom-paragraph">&copy; Copyright 2019 <a href="#" style="color: #00aafe;font-weight:bold;">Equipo #2- Jose Luis Margarito Escalona Garza y Jose Luis Olvera Escalona</a>. All Rights Reserved</p>
          </div>
        </div>
      </footer>
  </div>
    
    
  

  <script src="assets/jquery/jquery-3.2.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/plugins/select2/select2.min.js"></script>
  <script src="assets/plugins/bootstrap-toggle-master/doc/script.js"></script>
  <script src="assets/plugins/bootstrap-toggle-master/js/bootstrap-toggle.js"></script>
  <script src="assets/fontawesome/js/all.js"></script>
	<script>
		$(".select2").select2();
	</script>
</body>
</html>





