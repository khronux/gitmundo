<HTML>
	
<HEAD>

		<!-- 8A Ing DGS -->
		<!-- Es importante aplicar UTF-8 para el uso de caracteres especiales -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<script>
		msg = " 8A Ing DGS";
		msg = " - Héctor Herrera -" + msg;position = 0;
		function scrolltitle() {
			document.title = msg.substring(position, msg.length) + msg.substring(0, position); position++;
			if (position > msg.length) position = 0
				window.setTimeout("scrolltitle()",170);
		}
		scrolltitle();
	</script>
		
</HEAD>

<!-- el formato de tamaño primero ancho y luego altura-->
<body>

<marquee> Prueba de envío de un e-mail </marquee>

<?php

	/*
	
	Es importante mencionar que deberá verificarse que el archivo php.ini ubicado en
	xampp\php\
	en el bloque [mail function] tenga activa la línea del SMTP en localhost además
	de que el puerto smtp sea el 25
	Verificar que esté corriendo el Test Mail Server Tool
	el uso de la función mail() va de la siguiente manera:
	mail(to,subject,message,headers_with_from);
	en otras palabras:
	mail(para_quien,asundo_del_correo,mensaje_del_correo,cabeceras_adicionales_con_From);
	es importante mantener el header From: porque de lo contrario no funciona
	*/

	
	$de = "noReplay@misitio.com";
	$para = "mrkimu@misitio.com";
	$cabeceras = "From: " . $de;
	$asunto = "correo de prueba";
	$mensaje = "Probando la función mail en localhost";
	
	
	mail($para , $asunto , $mensaje , $cabeceras);
	

	// mail("mrkimu@misitio.com","correo de prueba","Probando la función mail en localhost","From: noReplay@misitio.com");

?>

</body>
</HTML>

