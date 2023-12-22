<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            <?php
                require_once("./db-connection.php");
                // SELECT * FROM Table_name
                $sql= " SELECT * FROM work";

                $query = mysqli_query($connect,$sql);

                $totalRow = mysqli_num_rows($query);

                while($row = mysqli_fetch_assoc($query)){
                    // set time
                    $time = date(' d-m-Y / g:i A ',strtotime($row['created_at']));
                    //database ထည်းက တန်ဖိုးယူတယ်ဆို {} နဲ့ယူရတယ်
                    echo "
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>$time</td>
                            <td>
                                <a href='./delete.php?id={$row['id']}'>Del</a> |
                                <a href='./update.php?id={$row['id']}'>Edit</a>
                            </td>
                        </tr> ";
                }
            ?>
        </tbody>
    </table>
</body>
</html>