<h3> Contact </h3>
<link rel="stylesheet" href="style.css">
<form action="" method="post">
    <table>
        <tr>
            <td width="130">NIM</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="jenis_kelamin"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Saran</td>
            <td><input type="text" name="saran"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
    </table>
    </form>

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






