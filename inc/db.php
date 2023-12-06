<?php
    $db = array(
        'database_host' => 'localhost',
        'database_name' => 'prestashop_dev',
        'database_user' => 'prestashop_dev_user',
        'database_password' => 'hio0&N469',
    );
    $connect = mysqli_connect($db['database_host'], $db['database_user'], $db['database_password'], $db['database_name']);
    if(mysqli_connect_errno()){
        echo '<button type="button" class="btn btn-danger btn-sm">'.mysqli_connect_error().'</button>';
        exit();
    }
    else echo '<button type="button" class="btn btn-success btn-sm">OK!</button>';
?>