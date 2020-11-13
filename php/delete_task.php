<?php 
require_once 'cn.php';
session_start();

if(isset($_GET['id'])){
    $bd = cn();

    $sql = "DELETE FROM task WHERE id = {$_GET['id']}";
    $result = mysqli_query($bd,$sql);

    mysqli_close($bd);
}

if($result){
    $_SESSION['message'] = "Eliminado con éxito";
    $_SESSION['message-type'] = "primary";
}else{
    $_SESSION['message'] = "Error al eliminar";
    $_SESSION['message-type'] = "danger";
}

header("Location: ../");