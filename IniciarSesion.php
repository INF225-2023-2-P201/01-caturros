<?php
session_start();

include('bdd/bdd.php');
if (isset($_POST['Usuario']) && isset($_POST['Contraseña'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $Usuario = validate($_POST['Usuario']);
    $Contraseña = validate($_POST['Contraseña']);

    if (empty($Usuario)){
        header("location: sesion.php?error=" . urlencode("No se ingresó un usuario"));
        exit();
    } elseif(empty($Contraseña)){
        header("location: sesion.php?error=" . urlencode("No se ingresó una contraseña"));
        exit();
    } else {
        $sql = "SELECT usuario, clave FROM admin WHERE usuario = '$Usuario'";
        $result = mysqli_query($conex, $sql);
        
        if ($result) {
            if (mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if (password_verify($Contraseña, $row['clave'])) {
                    // Contraseña válida
                    $_SESSION['Usuario'] = $row['usuario'];
                    header("Location: index.php");
                    exit();
                } else {
                    // Contraseña incorrecta
                    header("Location: sesion.php?error=" . urlencode("Usuario o Contraseña incorrectas"));
                    exit();
                }
            }
        } else {
            die('Error en la consulta: ' . mysqli_error($conex));
        }
    }
    header("Location: sesion.php?error=" . urlencode("Usuario o Contraseña incorrectas"));
    exit();
} else {
    header("Location: sesion.php");
    exit();
}
?>
