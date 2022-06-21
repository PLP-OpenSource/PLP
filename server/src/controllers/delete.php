<?php

    if(!empty($_GET['id']))
    {
        include_once('../models/config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM users WHERE id=$id";

        $result = $conect->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM users WHERE id=$id";
            $resultDelete = $conect->query($sqlDelete);
        }
    }
    header('Location: ../views/../models/system.php');
   
?>