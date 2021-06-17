<?php
        require_once "app/album.php";

        $album = new album();

        if (isset($_POST['btn_proses'])) {
            $album->input();
            header("location:index1.php");
        }
        
            if (isset($_POST['btn_update'])){
            $album->update();
            header("location:index1.php");
            }
            
        
        ?>
        