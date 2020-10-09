<?php
   



   $connection = mysqli_connect('localhost', 'root', '', 'workshop');
   mysqli_set_charset($connection,'utf8');  
    if(!$connection) {
        die("Database connection failed");
    }
    ?>