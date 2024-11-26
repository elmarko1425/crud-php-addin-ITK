<?php
include 'koneksi.php';

$name = $_post['nama'];
$nim = $_post['nim'];
$email = $_post['email'];
$nomor = $_post['nomor'];
$jurusan = $_post['jurusan'];

$sql = "INSERT INTO mahasiswa (nama, nim, email, nomor, jurusan) VALUES ('$nama', '$nim' $email', '$nomor', $jurusan')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    
}