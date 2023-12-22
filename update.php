<!-- get data => show > edit > update  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        require('./db-connection.php');

        $id = $_GET['id']; 
        $sql = " SELECT * FROM work WHERE id = $id ";
        $query = mysqli_query($connect,$sql);
        $data = mysqli_fetch_assoc($query);

        if(isset($_GET['updateBtn'])){
            $id = $_GET['id'];  
            $taskName = $_GET['taskName'];
           
                $updateSql = " UPDATE work SET name = '$taskName' WHERE id = $id ";
                
                if(mysqli_query($connect,$updateSql)){
                    header("location:create.php");
                }else {
                    echo "Update Error" . mysqli_error();
                }
            }

    ?>

    <form method="GET">
        <input type="hidden" name="id" value ="<?php echo $data['id'];  ?>"  required>
        <input type="text" name="taskName" value="<?php echo $data['name'];  ?>" required>
        <button name="updateBtn" >UPDATE</button>
    </form>



</body>
</html>
