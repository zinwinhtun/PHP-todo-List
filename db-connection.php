<?php


 $connect = mysqli_connect('localhost','root','','todo_list');

 if(!$connect){
    echo 'connection fail....'. mysqli_connection_error();
 }