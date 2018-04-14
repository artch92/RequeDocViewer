<?php

	$username=$_POST['username'];
	$mail=$_POST['email'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

    $username = strtolower ($username);
    $mail = strtolower ($mail);

    if(($username =="")or($mail =="")or($pass =="")or(rpass == "")){
        echo '<script>alert("Ha ingresado un valor vacio, intentelo de nuevo")</script> ';
        echo "<script>location.href='../index.php'</script>";
    }
    else{
      	require("../session/connect_db.php");
        //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	   $checkaccount=mysqli_query($mysqli,"SELECT NOMBRE_USUARIO FROM USUARIOS WHERE (EMAIL_USUARIO='$mail' or NOMBRE_USUARIO ='$username')");      
        if(mysqli_num_rows($checkaccount) == 0){
            if($pass==$rpass){
				//require("connect_db.php");
                //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php"); 
				mysqli_query($mysqli,"INSERT INTO USUARIOS VALUES (NULL, '$username', '$mail', '$pass', 2, 1)");
                echo '<script>alert("Registro realizado con éxito")</script> ';
		          echo "<script>location.href='../index.php'</script>";
            }
            else{
                echo '<script>alert("Las contraseñas no coinciden, intentelo de nuevo")</script> ';
                echo "<script>location.href='../index.php'</script>";
            }
        }
        else{
            echo '<script>alert("Ya existe un usuario con ese nombre de usuario o correo")</script> ';
            echo "<script>location.href='../index.php'</script>";
        }	  
    }
?>