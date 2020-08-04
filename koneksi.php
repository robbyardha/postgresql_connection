<?php

//Koneksi berupa parameter STRING
$conn_string = "host=localhost port=5432 dbname=coba user=postgres password=robby";
// $host = "localhost";
// $port = "5432";
// $dbname = "coba";
// $user = "postgres";
// $password = "robby";

$conn = pg_connect($conn_string);

if($conn) {
    $res = pg_query($conn, "SELECT * FROM mahasiswa");
    $resultss = pg_fetch_assoc($res);
    var_dump($resultss);
    
}else{
    echo "gagal";
}



?>