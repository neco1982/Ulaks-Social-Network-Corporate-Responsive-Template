<?php

$servername = "remotemysql.com";

$username = "viHccEJ2Vx";

$password = "m1nEUQVTdM";

$dbname = "viHccEJ2Vx";



$conn = mysqli_connect($servername, $username, $password, $dbname);



if ($conn) {

    // echo "Veritabanına Başarıyla Bağlanıldı";

} else {

    die("Bağlantı Hatası: " . mysqli_connect_error());

}