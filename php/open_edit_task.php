<?php
require_once 'cn.php';
session_start();
if(isset($_GET['id'])){
    $bd = cn();
    $id = $_GET['id'];
    $sql = "SELECT * FROM task WHERE id = {$id}";
    $result = mysqli_query($bd,$sql);
    if($result){
        $task = mysqli_fetch_array($result);
        $_SESSION['id'] = $task['id'];
        $_SESSION['title'] = $task['title'];
        $_SESSION['desc'] = $task['description'];
    }else{
        $_SESSION['message'] = "Error al cargar";
        $_SESSION['message-type'] = "danger";
    }

    mysqli_close($bd);
}
header('Location: ../');