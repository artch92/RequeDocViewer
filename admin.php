<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:dashboard.php");
}
?>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Proyecto Requerimientos</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href='assets/css/styles.css' />
        
    </head>

    <body>
        <header class="header">
            <!-- Navbar================================================== -->
            <?php
            include("include/admin_menu.php");
        ?>
        </header>
        <!-- ======================================================================================================================== -->

        <div class="container" id='wrapper'>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <h2> Administración de usuarios registrados</h2>
                                <!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
                                <hr class="soft" />
                                <h4>Tabla de Usuarios</h4>
                                <div class="row-fluid">

                                    <table class='table table-responsive' cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td>Id</td>
                                            <td>Usuario</td>
                                            <td>Modificar</td>
                                        </tr>
                                        <?php
                                    require("session/connect_db.php");
				                    $sql=("SELECT * FROM USUARIOS");
	                               //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				                    $query=mysqli_query($mysqli,$sql);
                                    $roles = array("Administrador","Usuario",);
                                    $estados = array("Inactivo","Activo",);
				                        while($arreglo=mysqli_fetch_array($query)){
                                            echo "<tr>";
                                            echo "<td>$arreglo[0]</td>";
                                            echo "<td>$arreglo[1]</td>";
                                            
                                            echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='assets/img/modify.png' class='img-rounded'></td>" ;
                                            //echo "<td><a href='admin.php?id=$arreglo[0]&idcambiar=2'><img src='images/switch.png' class='img-rounded'/></a></td>";  
					                       echo "</tr>";
                                        }
					extract($_GET);
                    if(@$idcambiar==2){
						$sqlcambiar="UPDATE USUARIOS SET ESTADO_USUARIO = ESTADO_USUARIO XOR 1 WHERE ID_USUARIO=$id";
						$rescambiar=mysqli_query($mysqli,$sqlcambiar);
						echo '<script>alert("Se ha cambiado el estado del usuario")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin.php'</script>";
					}
			?>
                                    </table>
                                </div>
                                <!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <?php
	               include("include/pie.php");
                ?>
        </footer>



    </body>



    </html>
