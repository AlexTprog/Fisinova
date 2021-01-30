
<?php
include("con_db.php");

if(isset($_POST['registrar'])){
    if (strlen ($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['ciclo']) >= 1 && strlen($_POST['curso']) >= 1 && strlen($_POST['celular']) >= 1 && strlen($_POST['equipo']) >= 1) {
        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $ciclo = trim($_POST['ciclo']);
        $curso = trim($_POST['curso']);
        $celular = trim($_POST['celular']);
        $equipo = trim($_POST['equipo']);
        $consulta = "INSERT INTO formularioregistro(nombre, correo, ciclo, curso, celular, equipo) VALUES ('$nombre','$correo','$ciclo','$curso','$celular','$equipo')";
        $resultado = mysqli_query($conex,$consulta);
        if($resultado){
?>
            <h3>Te has inscrito correctamente</h3>
            <?php
}

    }else{
        ?>
        <h3>Por favor complete los campos</h3>
        <?php
    }
}
?>