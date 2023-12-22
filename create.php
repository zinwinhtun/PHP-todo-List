<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo_list</title>
</head>
<body>
    <h1>todo_list</h1>

    <form action="" method="post">
        <label for="name">Name ::</label>
        <input type="text" name="textName" id="name" placeholder="Enter your task.....">
        <button name="addBtn">ADD</button>
    </form>

    <?php

    require_once("db-connection.php");

    if(isset($_POST['addBtn'])){
        $taskName = $_POST['textName']; // declearation POST name
        //text empty validation 
        if($taskName == "" || $taskName == null){
            echo "need to fill...";
        }else {
            //data input in database
            $sql = "INSERT INTO work (name) VALUES ('$taskName')";
            if(mysqli_query($connect,$sql)){
                
            }else{
                echo 'fail';
            }
        }
       
    }

    ?>
    <hr>
    <?php
        require_once('./read.php');
    ?>
    <br>
    <br>
    <hr>

</body>

</html>