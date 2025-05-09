<!DOCTYPE html>
<html>
<head>
    <title>PHP Aranda Bimantara Operator Logika AND dan NOT</title>
</head>
<body>
<?php
$username = "admin";
$password = "123"; // Contoh password salah

// Logika AND: validasi username dan password
if ($username == "admin" AND $password == "123") {
    echo "Login berhasil<br>";
    $isLoggedIn = true;
} else {
    echo "Login gagal<br>";
    $isLoggedIn = false;
}

// Logika NOT: mengakses berdasarkan status login
if (!$isLoggedIn) {
    echo "Silakan login terlebih dahulu";
} else {
    echo "Selamat datang, pengguna!";
}
?>
</body>
</html>

