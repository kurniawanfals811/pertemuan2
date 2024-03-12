<!DOCTYPE html>
<html>
<head>
    <title>Hitung Rata-rata Nilai</title>
</head>
<body>
    <h2>Hitung Rata-rata Nilai</h2>
    <form method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        
        <label for="jurusan">Jurusan:</label><br>
        <input type="text" id="jurusan" name="jurusan"><br>
        
        <label for="tugas">Nilai Tugas:</label><br>
        <input type="text" id="tugas" name="tugas"><br>
        
        <label for="uts">Nilai UTS:</label><br>
        
        <input type="text" id="uts" name="uts"><br>
        <label for="uas">Nilai UAS:</label><br>
        <input type="text" id="uas" name="uas"><br>
        
        <input type="submit" value="Hitung Rata-rata" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $nilai_tugas = floatval($_POST['tugas']);
        $nilai_uts = floatval($_POST['uts']);
        $nilai_uas = floatval($_POST['uas']);

        $rata_rata = ($nilai_tugas + $nilai_uts + $nilai_uas) / 3;

        echo "<h3>Hasil</h3>";
        echo "Rata-rata Nilai: " . number_format($rata_rata, 2);
    }
    ?>
</body>
</html>
