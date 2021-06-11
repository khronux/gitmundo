<?php

	$emailusuario=$_POST['email'];
	$comentusuario=$_POST['comentario'];	
	
	$de = "noReplay@misitio.com";
	$para = $emailusuario;
	$cabeceras = "From: " . $de;
	$asunto = "correo de prueba";
	$mensaje = "Tu comentario ha sido recibido, saludos cordiales.";
	
	
	mail($para , $asunto , $mensaje , $cabeceras);
	

	// mail("mrkimu@misitio.com","correo de prueba","Probando la función mail en localhost","From: noReplay@misitio.com");
	
	//conecto con la base de datos
	$conn = mysqli_connect("localhost","root","");
	//seleciono la bbdd
	mysqli_select_db($conn, "html") or die ("no se encontro la base de datos");
	
	$sql="insert into comentario values (0,'$emailusuario','$comentusuario',now())";
	if($result=mysqli_query($conn, $sql)){
		echo ("<script type='text/javascript'>alert('Comentario enviado con exito.');") ;
		echo("location.replace('index.php');");
		echo("</script>");
	}

?>
