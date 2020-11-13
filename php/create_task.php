<?php
require_once 'cn.php';
session_start();

if(isset($_POST['save_task'])){

    $bd = cn();
    $title = $_POST['title'];
    $desc = $_POST['description'];

    if(!empty($title)){
        $sql = "INSERT INTO task(title,description) VALUES ('{$title}','{$desc}')";
        $result = mysqli_query($bd,$sql);
    }else{
        $_SESSION['message'] = "El titulo no puede estar vacío";
        $_SESSION['message-type'] = "warning";
        header("Location: ../");
        die();
    }
    
    if($result){
        $_SESSION['message'] = "Guardado con éxito";
        $_SESSION['message-type'] = "success";
    }else{
        $_SESSION['message'] = "Error al guardar";
        $_SESSION['message-type'] = "danger";
    }

    mysqli_close($bd);
}

header("Location: ../");