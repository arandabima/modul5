<!DOCTYPE html>
<html>
<head>
    <title>PHP Aranda Bimantara Contoh Konstanta PHP</title>
</head>
<body>
    <?php
        // Mendeklarasikan konstanta
        define("APP_NAME", "Mobile Legend");
        define("VERSION", "1.9.42");

        // Menampilkan nilai konstanta
        echo "<h2>Informasi Aplikasi</h2>";
        echo "Nama Aplikasi: " . APP_NAME . "<br>";
        echo "Versi: " . VERSION . "<br>";
    ?>
</body>
</html>
