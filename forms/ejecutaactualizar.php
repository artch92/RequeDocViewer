<?php
extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
    $myid=$_POST['id'];
    $myusername=$_POST['user'];
	$mymail=$_POST['email'];
	$mypass= $_POST['pass'];
    $mytype= $_POST['type'];
    $mystate= $_POST['state'];
	require("../session/connect_db.php");
	$sentencia="update USUARIOS set NOMBRE_USUARIO='$myusername', EMAIL_USUARIO='$mymail', PASSWORD_USUARIO='$mypass', TIPO_USUARIO=$mytype, ESTADO_USUARIO=$mystate where ID_USUARIO=$myid";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		
		echo "<script>location.href='../admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='../admin.php'</script>";	
	}
?>