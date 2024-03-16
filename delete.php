<?php
include "conn.php";

if (isset($_GET["delete_id"])) 
{
    $deletee = $_GET["delete_id"];
    
    $dele = "DELETE FROM dbemployeelist WHERE id = '$deletee'";
    $deleta = mysqli_query($conn,$dele);

        if ($deleta) 
        {
            header("Location:view.php");
        }
}