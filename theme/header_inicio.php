
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Medical Center</title>
	<!--*********** cambio de hojas de estilo ***************-->
    <link rel="stylesheet" href="../theme/css/style.css" type="text/css">
    <!-- ************** Menu ********************************-->
    <link rel="stylesheet" type="text/css" href="../theme/css/superfish.css" media="screen">
	<!-- Select's -->
    <script type="text/javascript" src="../theme/js/jQuery.js"></script>
	<!--   Slide   -->
	<script type="text/javascript" src="../theme/slide/slide.js"></script>
	<script type="text/javascript" src="../theme/js/funciones.js"></script>
    <!-- ************** Menu ********************************-->
    <script type="text/javascript" src="../theme/js/hoverIntent.js"></script>
	<script type="text/javascript" src="../theme/js/superfish.js"></script>
</head>
<?php  if($_SESSION["tipo"]=="ADMINISTRADOR"){$tipo = "Administrador";}elseif($_SESSION["tipo"]=="ASISTENTE"){$tipo="Asistente";}?>

<html>
<body>

<table id="header" width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1">
        <div style="position:absolute; width:302px; top:30px; background:url(../theme/images/cn-bg.gif);">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="1"><img src="../theme/images/logo.gif" alt="" width="61" height="61" class="logo"/></td>
    <td class="company_name">Medical Center</td>
  </tr>
</table>
        </div>
       <div id="slogan">
       <div style="position:absolute; top:10px; left:378px; margin-left:-400px; width:681px; height:25px; font-size:25px; color:#000; font-family:'Courier New', Courier, monospace;">
  <marquee direction="left" width="100%" scrollamount="7">
    <span class="Estilo9">SITIO EN CONSTRUCCION 2RPC´s GROUP.</span>
  </marquee></div>
</div>
 <img src="../theme/images/p1.jpg" alt="" width="666" height="196"></td>
      <td class="hbg">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>

<!-- Menu -->
<div id="navigator">

<ul class="sf-menu">
			<li class="current">
				<a href="">Inicio</a>
				<ul>
					<li>
						<a href="../mod_inicio/index.php">Principal</a>
					</li>
					<li>
						<a href="../mod_configuracion/login.php">Salir</a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="">Registros</a>
				<ul>
					<li>
						<a href="">Administracion del Sistema</a>
						<ul>
							<li><a href="#">Registrar Usuario Medico y Profecional</a></li>
							<li><a href="#">Configuracion de Usuari&oacute;s</a></li>
							<li><a href="#">Cambiar Contrase&#241;a Usuari&oacute;s</a></li>
						</ul>
					</li>
					
					<li>
						<a href="">Registro Para Pacientes</a>
						<ul>
							<li><a href="#">Registrar Paciente</a></li>
							<li><a href="#">Acualizar Datos de un Paciente</a></li>
							<li><a href="#">Ubicar Paciente</a></li>
						</ul>
					</li>
					
					<li>
						<a href="">Historial</a>
						<ul>
							<li><a href="#">Registrar Historial</a></li>
							<li><a href="#">Editar Historial</a></li>
							<li><a href="#">Buscar Historial </a></li>
						</ul>
					</li>
					
					
				</ul>			
			
			<li>
				<a href="">Informacion</a>
				<ul>
					<li>
						<a href="#">Enfermedades</a>
					</li>
										
				</ul>
			</li>
            
            <li>
				<a href="">Acerca de</a>
				<ul>
					<li>
						<a href="#">Creditos</a>
					</li>
										
				</ul>
			</li>
			
		</ul>


</div>
<!-- Final del menu -->

