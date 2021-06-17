<?php
        require_once "app/played.php";

        $played = new played();

        if (isset($_POST['btn_proses'])) {
            $played->input();
            header("location:index2.php");
        }
        
            if (isset($_POST['btn_update'])){
            $played->update();
            header("location:index2.php");
            }
            
        
        ?>
        