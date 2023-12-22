<?php
    require_once("./db-connection.php");
    
    $id = $_GET['id'];

    $sql = " DELETE FROM work WHERE id = $id";

    if(mysqli_query($connect,$sql)){
        //jump to read page for header format
        header("location:create.php");
    }else{
        echo 'delete fail....'.mysqli_error();
    }
?>