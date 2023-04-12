<?php
    include("ayar.php");
    $isim=$_POST["isim"];
    $sinif=$_POST["sinif"];
    $alan=$_POST["alan"];
    $email=$_POST["email"];

    echo $isim;
    echo $sinif;
    echo $alan;
    echo $email;

    $sorgu = "INSERT INTO ogrencibilgi (isim,sinif,alan,email) values('$isim','$sinif','$alan','$email')";

    $eklendi = mysqli_query($baglan,$sorgu);
?>