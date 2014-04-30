<?php
	
	$conexion=mysql_connect('localhost','Administrador','go3sa*!?C7lb') or die(mysql_error());
    mysql_select_db('beyer',$conexion);


	$nombre=$_POST['nombre'];
	$cargo=$_POST['cargo'];
	$compania=$_POST['compania'];
	$telefono=$_POST['telefono'];
	$email=$_POST['email'];
	$direccion=$_POST['direccion'];
	$categoria=$_POST['categoria'];
	$servicios=$_POST['servicios'];
	$numEmpleados=$_POST['numEmpleados'];
	$years=$_POST['years'];
	$ingreso=$_POST['ingreso'];
	$primerasMetas=$_POST['primerasMetas'];
	$frustracion1=$_POST['frustracion1'];
	$frustracion2=$_POST['frustracion2'];
	$frustracion3=$_POST['frustracion3'];
	$frustracion4=$_POST['frustracion4'];
	$frustracion5=$_POST['frustracion5'];
	$frustracion6=$_POST['frustracion6'];
	$frustracion7=$_POST['frustracion7'];
	$frustracion8=$_POST['frustracion8'];
	$frustracion9=$_POST['frustracion9'];
	$frustracion10=$_POST['frustracion10'];
	$frustracion11=$_POST['frustracion11'];
	$horas=$_POST['horas'];
	$porcentaje=$_POST['porcentaje'];
	$gananciaAnual=$_POST['gananciaAnual'];
	$deseoNegocio=$_POST['deseoNegocio'];
	$decisiones=$_POST['decisiones'];
	$casoNegocio=$_POST['casoNegocio'];
	$hoy = date("F j, Y, g:i a");
	$sql="INSERT INTO formulario (nombre,cargo,compania,telefono,email,direccion,categoria,servicios,numEmpleados,years,ingreso,primerasMetas,frustracion1,frustracion2,frustracion3,frustracion4,frustracion5,frustracion6,frustracion7,frustracion8,frustracion9,frustracion10,frustracion11,horas,porcentaje,gananciaAnual,deseoNegocio,decisiones,casoNegocio) VALUES ('$nombre','$cargo','$compania','$telefono','$email','$direccion','$categoria','$servicios','$numEmpleados','$years','$ingreso','$primerasMetas','$frustracion1','$frustracion2','frustracion3','$frustracion4','$frustracion5','$frustracion6','$frustracion7','$frustracion8','$frustracion9','$frustracion10','$frustracion11','$horas','$porcentaje','$gananciaAnual','$deseoNegocio','$decisiones','$casoNegocio')";
	mysql_query($sql)or die(mysql_error());


	//echo $sql;
		// Varios destinatarios
		$para  = 'info@beyertucoach.com';
		

		// subject
		$titulo = 'Formulario Conociendo Tu Negocio - '.$hoy.' - '.$compania.'.';

		// message
		$mensaje = '<!doctype html>
					<html lang="es">
					<head>
					    <title>BEYER TU COACH</title>
					    <meta charset="utf-8"/>
					    <meta name="description" content=""/>
					    <meta name="keywords" content="">
					    <link rel="shortcut icon" type="http://www.beyertucoach.com/image/x-icon" href="favicon.ico"/>
					    <meta name="viewport" content="width=device-width,initial-scale=1"/>
					    <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300" rel="stylesheet" type="text/css" />
					   <style>
					   @charset "utf-8";
/* CSS Document */

*, *:after, *:before {
    -moz-box-sizing: border-box;
	box-sizing: border-box;
}

*{
	margin:0;
	padding:0;}
	
body {
	background-color: #E71112;
    font-family: "Open Sans Condensed",Arial,sans-serif;
    overflow-x: hidden;
}



h1 {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1);
    color: #FB8026;
    font-size: 1.9em;
    margin: 62px auto 0;
    padding: 0 0 10px;
    width: 50%;
}




p {
    font-family: "Open Sans Condensed",Arial,sans-serif;
    margin: 16px auto;
    width: auto;
}

.cajaquest {
    background-color: #FFFFFF;
    display: block;
    height: auto;
    margin: 0 auto;
    padding: 1em 10% 0;
    position: relative;
    width: 78%;
}

.cajaquest h1 {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1);
    color: #E71112;
    font-size: 2em;
    margin: 16px auto 0;
    padding: 0 0 10px;
    text-align: center;
    width: 71%;
	text-shadow: 0 5px 0 rgba(0, 0, 0, 0.2);
}

.cajaquest h3 {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1);
    color: rgba(0, 0, 0, 0.23);
    font-size: 1.8em;
    font-style: italic;
    margin: 0 auto;
    padding: 0 0 10px;
    text-align: center;
    width: 71%;
}

</style>
					    
						
					   
					</head>
					 
					<body>

					    <header>
					      
					   </header>
					  <table class="cajaquest" >

					     <tr>
					        <td><h1>CONOCIENDO TU NEGOCIO</h1>
					                <h3>Querido Empresario.</h3>
					                <p>La informaci&oacute;n contenida en este cuestionario es confidencial para uso interno exclusivo de Beyer tu COACH para beneficio tuyo.  Copias, distribuci&oacute;n o publicaci&oacute;n de este cuestionario est&aacute; estrictamente prohibido.</p>
					                </td>
					     </tr>
					     <tr>
					        <td><h2>1.datos generales:</h2>
					        Nombre :'.$nombre.'<br>
					        Cargo  :'.$cargo.'<br>
					        Nombre de la compa&ntilde;ia  :'.$compania.'<br>
					        Tel&eacute;fono de la Compa&ntilde;&iacute;a  :'.$telefono.'<br>
					        E-mail  :'.$email.'<br>
					        Direcci&oacute;n  :'.$direccion.'<br>

					        </td>
					      </tr>
					     <tr>
					        <td><h2>2. &iquest;Cu&aacute;l de las siguientes categor&iacute;as describe el sector en el que est&aacute; tu negocio? </h2>
					        <p>'.$categoria.'</p>
					        </td>
					       </tr>
					     <tr>  
					        <td><h2>3. Por favor, especifica qu&eacute; tipo de productos o servicios ofreces a tus clientes:</h2>
					        <p>'.$servicios.' </p>
					        </td>
					      </tr>
					     <tr>   
					        <td><h2>4. &iquest;Cu&aacute;ntos empleados tienes en tu negocio?</h2>
					        <p>'.$numEmpleados.' </p>
					        </td>
					      </tr>
					     <tr>   
					        <td><h2>5. &iquest;Cu&aacute;ntos a&ntilde;os tienes en tu Negocio?</h2>
					        <p>'.$years.' </p>
					        </td>
					      </tr>
					     <tr>   
					        <td><h2>6. ¿Cu&aacute;nto es aproximadamente el ingreso anual de tu negocio? en millones de pesos</h2>
					        <p>'.$ingreso.' </p>
					        </td>
					       </tr>
					     <tr>  
					        <td><h2>7. &iquest;Cu&aacute;les fueron tus metas cuando comenzaste tu negocio, o cuando te hiciste cargo de &eacute;ste por primera vez? </h2>
					        <p>'.$primerasMetas.' </p>
					        </td>
					      </tr>
					     <tr>   
					        <td><h2>8. &iquest;De la lista de abajo enumera en orden del uno (1) al diez (10) la opci&oacute;n que te genera mayor frustraci&oacute;n, de manera que uno (1) representa la de mayor importancia y el diez (10) la de menor.   </h2>
					        <p>Necesito constantemente supervisar mi personal y solucionar problemas : '.$frustración1.'</p>
					        <p>No estoy obteniendo suficientes ingresos del negocio. Hay falta de productividad : '.$frustracion2.' </p>
					        <p>Generamos muchos prospectos que nos buscan pero no se cierran ventas, lo que se traduce en pérdida de tiempo y esfuerzo : '.$frustracion3.' </p>
					        <p>Tenemos clientes que compran sólo una (1) vez pero nunca lo vemos otra vez (excepto para Reclamos) : '.$frustracion4.'</p>
					        <p>Estamos en guerra de precios con los competidores y nos enfocamos en los clientes que nos buscan por el precio : '.$frustracion5.' </p>
					        <p>Estamos muy ocupados todo el tiempo pero esto no se traduce en rentabilidad del negocio : '.$frustracion6.' </p>
					        <p>Soy el que más trabaja en el negocio pero el que menos disfruta de vacaciones. Estoy enfadado y cansado de la misma rutina todos los días : '.$frustracion7.' </p>
					        <p>Tenemos problemas en la calidad de nuestros productos o servicios : '.$frustracion8.' </p>
					        <p>Los clientes se quejan con cierta frecuencia : '.$frustracion9.'</p>
					        <p>No veo cómo enfocarme o motivarme en mi negocio. Me falta claridad de visión, de mí mismo y de mi negocio : '.$frustracion10.' </p>
					        <p>>Me la paso remplazando personal porque se van o porque no son buenos elementos : '.$frustracion11.' </p>
					        </td>
					       </tr>
					     <tr> 
					        <td><h2>9. &iquest;Cu&aacute;ntas horas al d&iacute;a le dedicas actualmente a tu negocio?  </h2>
					        <p>'.$horas.' </p>
					        </td>
					      </tr>
					     <tr>  
					        <td><h2>10. &iquest;Cu&aacute;l es el porcentaje de rentabilidad anual actual de tu negocio? </h2>
					        <p>'.$porcentaje.' </p>
					        </td>
					       </tr>
					     <tr>  
					        <td><h2>11. &iquest;Cu&aacute;nto te gustar&iacute;a generar anualmente?</h2>
					        <p>'.$gananciaAnual.' </p>
					        </td>
					      </tr>
					     <tr>   
					        <td><h2>12. Si tuvieras un s&oacute;lo deseo para tu negocio, a realizarse durante los pr&oacute;ximos 30 d&iacute;as, &iquest;Cu&aacute;l ser&iacute;a &eacute;ste?</h2>
					        <p>'.$deseoNegocio.' </p>
					        </td>
					        </tr>
					     <tr>
					        <td><h2>13. &iquest;Qui&eacute;n, adem&aacute;s de ti, est&aacute; involucrado en la toma de decisiones en tu negocio? </h2>
					        <p>'.$decisiones.' </p>
					        </td>
					      </tr>
					     <tr>  
					        <td><h2>14. Marca, &iquest;Cu&aacute;l es tu caso en el Negocio?</h2>
					        <p>'.$casoNegocio.' </p>
					        </td>
					        
					      </tr>
					</table>      
					 
					 
					       
					</body>
</html>
';

		// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Cabeceras adicionales
		$cabeceras .= 'To:Beyer to Coach <info@beyertucoach.com>' . "\r\n";
		$cabeceras .= 'From: Beyer to Coach <info@beyertucoach.com>' . "\r\n";

		// Mail it
		mail($para, $titulo, $mensaje, $cabeceras);

header("location:index.html");

?>