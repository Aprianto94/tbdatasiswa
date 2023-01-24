<?php

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $database = new PDO("mysql:host=localhost;dbname=tbdatasis", 'root', '');
    $query = $database->query("INSERT INTO datasiswa values('$nis','$nama' , '$kelas')");

    if($query){
        header("Location:create.php");
     }