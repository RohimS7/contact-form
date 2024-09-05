<?php

$koneksi = mysqli_connect("localhost","root","","contact_form");

if ($koneksi) {
    echo "Berhasil Konek Database";
}else{
    echo "Gagal Konek";
}



?>