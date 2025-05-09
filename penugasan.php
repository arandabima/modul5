<!DOCTYPE html>
<html>
<head>
    <title>PHP Aranda Bimantara Penugasan</title>
</head>
<body>
    <?php
        // Penugasan variabel
        $angka = 7;
        $teks = "Halo Dunia!";
        $pecahan = 3.14;
        $benar = true;

        // Menampilkan nilai dan tipe datanya
        echo "Nilai angka: $angka, Tipe: " . gettype($angka) . "<br>";
        echo "Nilai teks: $teks, Tipe: " . gettype($teks) . "<br>";
        echo "Nilai pecahan: $pecahan, Tipe: " . gettype($pecahan) . "<br>";
        echo "Nilai benar: $benar, Tipe: " . gettype($benar) . "<br>";

        // Contoh penugasan yang salah (AKAN ERROR jika dijalankan)
        // 7 = $angka; // Ini akan menyebabkan Parse Error
    ?>
</body>
</html>
