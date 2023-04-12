<?php

    $local="localhost";
    $user="root";
    $sifre="";
    $db="okul";

    $baglan = mysqli_connect($local,$user,$sifre,$db);

    if($baglan == false){
        die("bağlantı basarızıs");
    }
    echo "bağlantı basarlıl <br>";
?>