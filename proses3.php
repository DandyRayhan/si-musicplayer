<?php
        require_once "app/track.php";

        $track = new track();

        if (isset($_POST['btn_proses'])) {
            $track->input();
            header("location:index3.php");
        }
        
            if (isset($_POST['btn_update'])){
            $track->update();
            header("location:index3.php");
            }
            
        
        ?>
        