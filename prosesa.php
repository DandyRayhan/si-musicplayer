<?php
        require_once "app/artist.php";

        $musik = new musik();

        if (isset($_POST['btn_proses'])) {
            $musik->input();
            header("location:index.php");
        }
        
            if (isset($_POST['btn_update'])){
            $musik->update();
            header("location:index.php");
            }
            
        
        ?>
        