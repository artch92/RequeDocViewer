<!DOCTYPE html>


<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto Requerimientos</title>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" type="text/css" href='assets/frameworks/bootstrap-3.3.7/css/bootstrap.min.css' />
    <link href='assets/css/styles.css' rel="stylesheet"/>  
</head>


<!------ Include the above in your HEAD tag ---------->

<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->

<body>
        
    <div class="container" >
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#login" class="active" id="login-form-link">Ingresar</a>
                            </div>
                            <div class="col-xs-6" >
                                <a href="#register" id="register-form-link">Crear Cuenta</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="forms/validar.php" method="post" role="form" style="display: block;">
                                    <img src="assets/img/avatar.png" class="profile-img-card">
                                    <br>
                                    <div class="form-group">
                                        <input type="text" name="log_username" id="log_username" tabindex="1" class="form-control" placeholder="Nombre de Usuario" value="<?php if(isset($_COOKIE[" member_login "])) { echo $_COOKIE["member_login "]; } ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="log_password" id="log_password" tabindex="2" class="form-control" placeholder="Contraseña" value="<?php if(isset($_COOKIE[" member_password "])) { echo $_COOKIE["member_password "]; } ?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <button type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login">Ingresar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form id="register-form" action="forms/registrar.php" method="post" role="form" style="display: none;">
                                    <div id="status_container" class="form-group has-feedback">
                                        <input type="text" name="username" id="username" class="form-control" tabindex="1" placeholder="Nombre de Usuario" required>
                                        <span id="status"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Correo Electrónico" required>
                                    </div>
                                    <div class="form-group">
                                        <input id="password" name="pass" type="password" tabindex="2" class="form-control" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Debe tener almenos 6 cracteres' : ''); if(this.checkValidity()) form.password_repeat.pattern = this.value;" placeholder="Contraseña" required>
                                    </div>
                                    <div class="form-group">
                                        <input id="password_repeat" name="rpass" type="password" tabindex="2" class="form-control" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'La contraseñas deben ser iguales' : '');" placeholder="Repite contraseña" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <button type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register">Registrarse</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>

<script src="assets/js/index_script.js"></script>

