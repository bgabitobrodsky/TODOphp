<?php
require_once 'cn.php';
session_start();
if(isset($_POST['edit'])){
    $bd = cn();
    $id = $_POST['ed-id'];
    $title = $_POST['ed-title'];
    $desc = $_POST['ed-description'];
    $sql = "UPDATE task SET title = '{$title}', description = '{$desc}' WHERE id = '{$id}'";
    $result = mysqli_query($bd,$sql);

    if($result){
        $_SESSION['message'] = "¡Editado con éxito!";
        $_SESSION['message-type'] = "success";
    }else{
        $_SESSION['message'] = "¡Error al editar!";
        $_SESSION['message-type'] = "danger";
    }

    mysqli_close($bd);
}
header('Location: ../');