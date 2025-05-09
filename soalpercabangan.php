<!DOCTYPE html>
<html>
<head>
    <title>PHP Aranda Bimantara Daftar Nilai Mahasiswa</title>
</head>
<body>
    <h2>Form Input Nilai</h2>
    <form method="POST">
        Nama: <input type="text" name="nama" required><br><br>
        Nilai: <input type="number" name="nilai" required><br><br>
        <input type="submit" name="submit" value="Klasifikasi">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
        $grade = "";

        if ($nilai >= 80) {
            $grade = "A";
        } elseif ($nilai >= 70 && $nilai <= 79) {
            $grade = "B";
        } elseif ($nilai >= 60 && $nilai <= 69) {
            $grade = "C";
        } elseif ($nilai >= 50 && $nilai <= 59) {
            $grade = "D";
        } elseif ($nilai <= 49) {
            $grade = "Tidak Lulus";
        } else {
            $grade = "Nilai tidak valid";
        }

        echo "<hr>";
        echo "<h3>Hasil Klasifikasi</h3>";
        echo "Nama: <strong>$nama</strong><br>";
        echo "Nilai: <strong>$nilai</strong><br>";
        echo "Keterangan: <strong>$grade</strong>";
    }
    ?>
</body>
</html>
