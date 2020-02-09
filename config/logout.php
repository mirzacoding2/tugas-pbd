<?php 
    // mengaktifkan session php
    session_start();
    session_destroy();
    header("location:../index.php");
    // menghapus semua session
    

?>