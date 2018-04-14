<?php
if(isset($_POST['username']))
{
    // include Database connection file 
    require("../session/connect_db.php");
 
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
 
    $query = "SELECT NOMBRE_USUARIO FROM USUARIOS WHERE NOMBRE_USUARIO = '$username'";
    if(!$result = mysqli_query($mysqli, $query))
    {
        exit(mysqli_error($mysqli));
    }
 
    if(mysqli_num_rows($result) > 0)
    {
        // username is already exist 
        echo('glyphicon glyphicon-remove form-control-feedback');
    }
    else
    {
        // username is avaialable to use.
        echo('glyphicon glyphicon-ok form-control-feedback');
    }
}
?>