<!DOCTYPE html>
<html>
<head>
    <title>PHP Aranda Bimantara Menghitung Volume Tabung</title>
</head>
<body>
    <?php
        // Deklarasi variabel
        $jari_jari = 10; // r = 10
        $tinggi = 20;   // t = 20
        $phi = 3.14;    // atau bisa pakai M_PI jika ingin lebih presisi

        // Hitung volume tabung
        $volume = $phi * $jari_jari * $jari_jari * $tinggi;

        // Tampilkan hasil
        echo "<h2>Volume Tabung</h2>";
        echo "Jari-jari: $jari_jari cm<br>";
        echo "Tinggi: $tinggi cm<br>";
        echo "Volume: $volume cm<sup>3</sup>";
    ?>
</body>
</html>
