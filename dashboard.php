<!DOCTYPE html>

<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
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
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <hr class="soft" />
                                <h2>Bienvenido al sistema <strong><?php echo $_SESSION['user'];?></strong>, actualmente no posees derechos de administrador.</h2>
                                <hr class="soft" />
                            </div>

                            <div class="span8">
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
