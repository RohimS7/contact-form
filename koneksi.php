<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_diri";

// Koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$name = $_POST['name'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$message = $_POST['message'];

// Validasi dan sanitasi input
if (empty($name) || empty($nim) || empty($kelas) || empty($gender) || empty($email) || empty($message)) {
    echo "Mohon isi semua field!";
    exit;
}

// Sanitasi input untuk menghindari SQL injection
$name = mysqli_real_escape_string($conn, $name);
$nim = mysqli_real_escape_string($conn, $nim);
$kelas = mysqli_real_escape_string($conn, $kelas);
$gender = mysqli_real_escape_string($conn, $gender);
$email = mysqli_real_escape_string($conn, $email);
$message = mysqli_real_escape_string($conn, $message);

// Simpan data ke database
$sql = "INSERT INTO contact (name, nim, kelas, gender, email, message) VALUES ('$name', '$nim', '$kelas', '$gender', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
} else {
    echo "Gagal menyimpan data: " . $conn->error;
}

// Tutup koneksi
$conn->close();
?>