<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width-device-width, initial-scale-1.0, minium-scale=0.5 maximum-scale=1.0">
	<meta name="description" content="Fomentara la renovación constante en la prestación de los servicios de salud como respuesta a los cambios sociales, epidemiológicos y demográficos.">
	<meta name="keywords" content="intranet,imss, portal del imss,jefatura de prestaciones medicas.">
	<title>::: ACCESO ADMINISTRACION PORTAL DE JEFATURA DE SERVICIOS DE PRESTACIONES MEDICAS :::</title>
	<!--COMPATIBILIDAD HTML5 EXPLORER-->
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	  <!--HACK IE7 a IE9-->
			<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
    <!--HACK IE7 a IE9 HTML5-->
      <script>
  document.createElement('header');
  document.createElement('section');
  document.createElement('article');
  document.createElement('aside');
  document.createElement('nav');
  document.createElement('footer');
</script>
<script src="js/jquery-1.10.2.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$("#mostrar").click(function(){
			$('.center').hide("linear");
				$('.center2').show("swing");
		 	});	
			$("#ocultar").click(function(){
			$('.center2').hide("linear");
				$('.center').show("swing");
		 	});				
		});
		</script>
		
	<script src="js/funciones.js"></script>
	<script src="js/modernizr-2.6.2.min.js"></script>
	</head>        
  <body class ="Sky" bgcolor="#c8e2ff" background="imagenes/bg.png">
    <table align="center" width="980px" cellpadding="0" cellspacing="0">
      <tr>
        <td>
          <font color="#000000" face="Helvetica, Arial, Verdana, sans-serif" size="2">
            <table style="background:url(img/banner.png) no-repeat;" width="980px" height="100px" align="center" cellpadding="0" cellspacing="0">
              <tr><td>&nbsp;</td></tr>
            </table>
          </font>
        </td>
      </tr>
      <tr>
        <td>
		<!-- Contenido -->
          <table bgcolor="#FFFFFF" width="980px" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td>
                <font color="#000000" face="Helvetica, Arial, Verdana, sans-serif">
                  <table align="center" style="width:100%;">
	<img src="img/back.jpg" width="980px" height="380px">
                        </table>
        </td>
      </tr>
      <tr>
      <tr>
        <td>
<!-- foot -->
          <table style="background:url(img/footer.png) no-repeat;" width="980px" height="58px" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td>
	<div id="flotante"> 
	

	<div class='center'> 
	<center>
	<span style="font-size:30px;">PORTAL DE JEFATURA DE SERVICIOS DE PRESTACIONES MEDICAS</span>
			<br><br>
		<form method="POST" name="frmAcceso" action="session_init.php"  id="frmAcceso">
		<table align="center" >
		<tr><td colspan="2">FAVOR DE LLENAR SUS DATOS</td></tr>
		<tr><td colspan="2"><br></td></tr>
		<tr><td colspan="4">
		<?php  
		if (isset($_GET['error']))  {
		echo '<div id="mesaje">No se encuentra dentro del sistema, intentelo nuevamente<a href="javascript:cerrar();"><img src="img/close.png" width="20px"></a></div>';
		}
		
		?></td></tr>
		<tr><td>Usuario:</td><td><input type="text" name="usern" placeholder="Usuario"></td></tr>
		<tr><td>Clave:</td><td><input type="password" name="passwd" placeholder="Clave"></td></tr>
		<tr><td colspan="2"><input  type="submit" value="ACCESAR A SISTEMA" id="boton"></td></tr>
		<tr><td colspan="2"><a href="#" id="mostrar">RECUPERAR CONTRASEÑA</a></td></tr>
		</table>
		</form>
	</center>
	</div>
	<div id="recupera" class='center2' style="display:none"> 
	<center>
	<span style="font-size:30px;">PORTAL DE JEFATURA DE SERVICIOS DE PRESTACIONES MEDICAS</span>
			<br><br>	<br><br>
		<form method="POST" name="frmRecupera" action="#"  id="frmRecupera">
		<table align="center" >
		<tr><td colspan="2">RECUPERAR CONTRASEÑA</td></tr>
		
		<tr><td colspan="4">
		</td></tr>
		<tr><td>CORREO:</td><td><input type="text" name="email" placeholder="Correo"></td></tr>
		<tr><td colspan="2"><input  type="submit" value="RECUPERAR CONTRASEÑA" id="boton"></td></tr>
		<tr><td colspan="2"><a href="#" id="ocultar">ACCESAR AL SISTEMA</a></td></tr>
		</table>
		</form>
	</center>
	</div>
</div>		  
	</td>
            </tr>
          </table>
        </td>
      <tr>
      <tr bgcolor="#1a7b68">
        <td align="center">
          <font color="white" face="Soberana-Sans" size="2">
            <br />
           IMSS, Queretaro - Algunos derechos reservados <?php  echo date('Y');?> - Políticas de privacidad - Aviso LEGAL
            <br />
            <br />
          </font>
        </td>
      </tr>
    </table>
  </body>
</html>
