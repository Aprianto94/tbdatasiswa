<?php 
    $nik = $_GET['nik'];
    $database = new PDO("mysql:host=localhost;dbname=pduli_diri", 'root', '');
    $query = $database->query("SELECT * FROM akun WHERE nik=$nik");
    $data = $query->fetch();
    ?>
<!DOCTYPE html>
<html lang="en" style="height: 100vh;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update</title>
</head>
<style>
    body{
        background-image: url("https://images8.alphacoders.com/939/939716.png");
    }
</style>
<body>
    <div class="container-sm w-25">
        <div >
           <h1 align=center>UBAH NAMA?</h1>
        </div>
            <form action="proses_edit.php?nik=<?= $nik ?>" method="post">
                <input type="hidden" name="nis" value="<?= $nis ?>">
                <br>
                <div>
                    <input placeholder="nama" type="text" name="nama" value="<?= $data['nama'] ?>"class="form-control my-auto" id="floatingInput">
                </div>
<br>
                <a href="index.php"class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-info">Simpan</button>
            </form>
        </div>
    </div>
</body>
</html>     