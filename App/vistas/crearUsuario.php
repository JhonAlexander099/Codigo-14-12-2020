<?php
    declare(strict_types=1);
    use App\Controladores\ControladorUsuario;
    include_once "app/vistas/layout/header.php";
?>
<h1>CREAR USUARIO</h1>
<form method="post" action="index.php?guardar-Usuario">
    <input type="text" name="Nombres" placeholder="Ingrese Nombres">
    <input type="text" name="Apellidos" placeholder="Ingrese Apellidos">
    <input type="number" name="Codigo" placeholder="Ingrese Codigo/DNI">
    <input type="password" name="Password" placeholder="Ingrese Contraseña">
    <select name="Tipo">
        <option value="estudiante">Alumno</option>
        <option value="profesor">Docente</option>
        <option value="administrador">Administrador</option>
    </select>
    <input type="submit" name="submit" value="Guardar">
    </div>
</form>
<?php
if(isset($_POST["submit"])){
    $Nombres = $_POST["Nombres"];
    $Apellidos = $_POST["Apellidos"];
    $Codigo = (int)$_POST["Codigo"];
    $Password = $_POST["Password"];
    $Tipo = $_POST["Tipo"];

    $controladorUsuario = new ControladorUsuario();
    echo $controladorUsuario->crearUsuario($Nombres, $Apellidos, $Codigo, $Password, $Tipo);
}

include_once "app/vistas/layout/footer.php";