<!DOCTYPE html>
<html>
<!-- Navbar
    ================================================== -->    
<nav class="navbar navbar-inverse custom-header" id="myTopnav">
        <div class="container-fluid">
            <div class="navbar-header"><a class='navbar-brand' href="admin.php">ADMINISTRADOR DEL SITIO</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span><img src="assets/img/avatar.png" class="dropdown-image"></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li role="presentation" class="active"><a href="session/desconectar.php"> Cerrar Sesión </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</html>