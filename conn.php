<?php
    $db_server = "localhost:3306";
    $db_username = "root";
    $db_password = "";
    $db_name = "core_php_crud_app_db";
    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
    if (!$conn)
    {
        die("connection failed:".mysqli_connect_error());
    }
    echo "DB Status: connected Successfully";  