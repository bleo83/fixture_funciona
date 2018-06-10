
<?php
error_reporting(0);
session_start();
$con = new mysqli("localhost", "adm_fixture", "catarojo1", "fixture");
if ($con->connect_errno)
{
       echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
       exit();
}
@mysqli_query($con, "SET NAMES 'utf8'");
if ($_POST['user'] == null || $_POST['pass'] == null)
{
    echo '<span>Por favor complete todos los campos.</span>';
}
else
{
    $email = mysqli_real_escape_string($con, $_POST['user']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $consulta = mysqli_query($con, "SELECT email, password FROM user WHERE email = '$email' AND password = '$pass'");
    if (mysqli_num_rows($consulta) > 0)
    {
        $_SESSION["usuario"] = $email;
        echo '<script>location.href = "grupos.php"</script>';
    }
    else
    {
        echo '<span style="color:red">El usuario y/o clave son incorrectas, vuelva a intentarlo.</span><br>';
    }
}
?>
