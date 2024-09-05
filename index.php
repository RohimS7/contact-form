<?php
include 'koneksi.php';

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into informasi set
    NIM = '$_POST[nim]',
    Nama = '$_POST[nama]',
    Kelas = '$_POST[kelas]',
    Jenis_kelamin = '$_POST[jenis_kelamin]',
    Email = '$_POST[email]',
    Saran = '$_POST[saran]'");

    echo "Data sudah tersimpan";
}
?>
    

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>Tugas Pemrograman Framework</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <h2>CONTACT FORM</h2>

        <form action="koneksi.php" method="post">
            <div class="form-group">
                <label for="">NIM</label>
                <input type="text">
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text">
            </div>
            <div class="form-group">
                <label for="">Kelas</label>
                <input type="text">
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <input type="text">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text">
            </div>
            <div class="form-group">
                <label for="">Saran</label>
                <textarea name="" id="" rows="4" placeholder="Tulis pesan di sini..."></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="submit">Kirim</button>
            </div>
        </form>
    </div>
</body>
</html>


