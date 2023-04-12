<?php
    include("ayar.php");
    $query = "select * from ogrencibilgi";
    $result = mysqli_query($baglan,$query);

    while($row = mysqli_fetch_assoc($result)){
        echo "<br>";
        echo $row['id'];    echo"<br>";
        echo $row['isim'];  echo"<br>";
        echo $row['alan'];  echo"<br>";
        echo $row['sinif'];  echo"<br>";
        echo $row['email']; echo"<br>";
        echo "<br><hr><br>";
    }


?>