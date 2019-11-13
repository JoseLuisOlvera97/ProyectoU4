<?php
  include "funciones/funcionValor.php";
  include "funciones/funcionClasificacion.php";
  $nombre = $_POST["nom"];
  $edad = $_POST["edad"];
  $sexo = $_POST["sex"];
	$v1 = $_POST["preg1"];
  $v2 = $_POST["preg2"];
  $v3 = $_POST["preg3"];
  $v4 = $_POST["preg4"];
  $v5 = $_POST["preg5"];
  $v6 = $_POST["preg6"];
  $v7 = $_POST["preg7"];
  $v8 = $_POST["preg8"];
  $v9 = $_POST["preg9"];
  $v10 = $_POST["preg10"];
  $v11 = $_POST["preg11"];
  $v12 = $_POST["preg12"];
  $v13 = $_POST["preg13"];
  $v14 = $_POST["preg14"];
  $v15 = $_POST["preg15"];
  $v16 = $_POST["preg16"];
  $v17 = $_POST["preg17"];
  $v18 = $_POST["preg18"];
  $v19 = $_POST["preg19"];
  $v20 = $_POST["preg20"];
  $res= valor($v1, $v2, $v3, $v4, $v5, $v6, $v7, $v8, $v9, $v10, $v11, $v12, $v13, $v14, $v15, $v16, $v17, $v18, $v19, $v20);
  $clas = clasificacion($res);
  $color=($sexo=='H')?"header--bg":"header--bg1";
  $sexo=($sexo=='H')?"Masculino":"Femenino";
  if($res==0){
    $background = "gris";
  }
  else if($res>=1 && $res<4){
    $background = "azul";
    $img = "imagenes/nivel5.PNG";
  }
  else if($res>=4 && $res<16){
    $background = "verde";
    $img = "imagenes/nivel4.PNG";
  }
  else if($res>=16 && $res<64){
    $background = "amarillo";
    $img = "imagenes/nivel3.PNG";
  }
  else if($res>=64 && $res<256){
    $background = "naranja";
    $img = "imagenes/nivel2.PNG";
  }
  else if($res>=256){
    $background = "rojo";
    $img = "imagenes/nivel1.PNG";
} 
?>
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
  <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/animate/animate.css">
</head>
<body>
  <div class="main-wrapper">
    <header class="header <?php echo $color ?>">
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
              <li><a href="index.php">HOME</a></li>
            </ul>
          </div>
        </nav>
      </div>
        <div class="header__content text-center">
          <h1 class="header__content__title <?php echo $background ?>">Resultado del Triage</h1>
          <div>
            <table class="animated flipInX img1">
              <tr>
                <td class="res"><img src="<?php echo $img ?>" alt=""></td>
              </tr>
              <tr>
                <td class="res"><p class="header__content__paragraph <?php echo $background ?>"><?php echo "El paciente: ".$nombre ?></p></td>
              </tr>
              <tr>
                <td class="res"><p class="header__content__paragraph <?php echo $background ?>"><?php echo "Edad: ".$edad." años" ?></p></td>
              </tr>
              <tr>
                <td class="res"><p class="header__content__paragraph <?php echo $background ?>"><?php echo "Sexo:  ".$sexo ?></p></td>
              </tr>
              <tr>
                <td class="res"><p class="header__content__paragraph <?php echo $background ?>"><?php echo "Estado: ".$clas ?></p></td>
              </tr>
            </table>
          </div>
          <a class="buttonn button--hover animated flipInX img2" href="index.php" >Regresar <i class="fas fa-redo-alt"></i></a>
        </div>
      </div>
    </header>
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
                      <li><a href="">----------</a></li>
                      <li><a href="#"><img src="imagenes/chope.jpg" width="100px" alt="Jose Luis Olvera"></a></li>
                    </ul>
                  </div>
                  <div class="row">
                    <ul>
                      <li><a href="#">Jose Luis Escalona</a></li>
                      <li><a href=""></a>---</li>
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
  <script src="assets/fontawesome/js/all.js"></script>
</body>
</html>





