<!DOCTYPE html>
<html>
<head>
    <title>PHP Aranda Bimantara Contoh Type Casting ke String</title>
</head>
<body>
    <?php
        // Variabel integer
        $angka = 12345;

        // Type casting ke string
        $string_angka = (string) $angka;

        // Tampilkan hasil
        echo "Nilai asli: $angka<br>";
        echo "Tipe Data Asli: " . gettype($angka) . "<br>";
        echo "Setelah casting ke string: $string_angka<br>";
        echo "Tipe Data Setelah Casting: " . gettype($string_angka);
    ?>
</body>
</html>
