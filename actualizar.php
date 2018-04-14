<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>
    <html lang="en">

    <head>
                <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Proyecto Requerimientos</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet"href='assets/css/styles.css'/>
    </head>

    <body>
        <header class="header">
            <!-- Navbar================================================== -->
            <?php
            include("include/admin_menu.php");
        ?>
        </header>
        <!-- ======================================================================================================================== -->
        <?php
            extract($_GET);
            require("session/connect_db.php");

            $sql=mysqli_query($mysqli, "SELECT * FROM USUARIOS WHERE ID_USUARIO=$id");
           //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
            if($f=mysqli_fetch_assoc($sql)){
            $id=$f['ID_USUARIO'];
            $user=$f['NOMBRE_USUARIO'];
            $pass=$f['PASSWORD_USUARIO'];
            $email=$f['EMAIL_USUARIO'];
            $type=$f['TIPO_USUARIO'];
            $state=$f['ESTADO_USUARIO'];
            }
		?>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h1>Edición de Usuarios</h1>
                                    <form action="forms/ejecutaactualizar.php" method="post">
                                        <h4>Id</h4><input type="text" name="id" value="<?php echo $id ?>" readonly="readonly"><br>
                                        <h4>Usuario</h4><input type="text" name="user" value="<?php echo $user?>"><br>
                                        <h4>Contraseña</h4><input type="text" name="pass" value="<?php echo $pass?>"><br>
                                        <h4>Correo electronico</h4><input type="text" name="email" value="<?php echo $email?>"><br>
                                        <h4>Tipo de Usuario</h4><select name="type">
                                                <option value="1" <?php if ($type==1) echo 'selected="selected"';?>>Administrador</option>
                                                <option value="2" <?php if ($type==2) echo 'selected="selected"';?>>Usuario</option>
                                            </select><br>
                                        <h4>Estado de Usuario</h4><select name="state">
                                                <option value="0" <?php if ($state==0) echo 'selected="selected"';?>>Inactivo</option>
                                                <option value="1" <?php if ($state==1) echo 'selected="selected"';?>>Activo</option>
                                            </select><br>
                                        <br><input type="submit" value="Guardar" class="btn-success">
                                    </form>
                                </div>

                                <div class="span6">
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
