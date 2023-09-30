
<?php

    if(empty($_GET['mon'])){
        include 'Menu.php';
   
    } else {
        $mon = $_GET['mon'];
        include 'model.php';
        include 'dia.php';
    }