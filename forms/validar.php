
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("../session/connect_db.php");

	$myusername=$_POST['log_username'];
	$mypass=$_POST['log_password'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("session/connect_db.php");
    $sql = mysqli_query($mysqli, "SELECT * FROM USUARIOS WHERE (NOMBRE_USUARIO = '$myusername' or EMAIL_USUARIO = '$myusername')");
    if($f=mysqli_fetch_assoc($sql)){
        if(!$f['ESTADO_USUARIO']==0){
            if($mypass==$f['PASSWORD_USUARIO']){
                $_SESSION['id']=$f['ID_USUARIO'];
                $_SESSION['user']=$f['NOMBRE_USUARIO'];
			     $_SESSION['rol']=$f['TIPO_USUARIO'];
            
            if($f['TIPO_USUARIO'] == 1){
                
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='../admin.php'</script>";
                
            }
            else{ 
              header("Location:../dashboard.php");  
            }
			 
        }
        else{
            echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
			echo "<script>location.href='../index.php'</script>";  
        }
        }
        else{
            echo '<script>alert("La cuenta se encuentra Inactiva")</script> ';
			echo "<script>location.href='../index.php'</script>";  
        }
        
    }
    else{
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		echo "<script>location.href='../index.php'</script>";	
	}
?>