<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Form Nilai Ujian</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>
            <div class="form-group">
                <label for="matakuliah">Pilih Mata Kuliah</label>
                <select class="form-control" id="matakuliah" name="matakuliah" required>
                    <option value="">Mata Kuliah</option>
                    <option value="Database">Database</option>
                    <option value="PW2">PW2</option>
                    <option value="Jarkom">Jarkom</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nilai">Nilai</label>
                <input type="number" class="form-control" id="nilai" name="nilai" required>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            require_once 'class_NilaiMahasiswa.php';

            $nim = $_POST['nim'];
            $matakuliah = $_POST['matakuliah'];
            $nilai = $_POST['nilai'];

            $nilai_mahasiswa = new NilaiMahasiswa($matakuliah, $nilai, $nim);

            echo "<h1 class='text-center mt-5'>Hasil Ujian</h1>";
            echo "<div class='row justify-content-center'>";
            echo "<div class='col-md-6'>";
            echo "<p>NIM: " . $nilai_mahasiswa->nim . "</p>";
            echo "<p>Mata Kuliah: " . $nilai_mahasiswa->matakuliah . "</p>";
            echo "<p>Nilai: " . $nilai_mahasiswa->nilai . "</p>";
            echo "<p>Hasil Ujian: " . $nilai_mahasiswa->grade() . "</p>";
            echo "<p>Grade: " . $nilai_mahasiswa->hasil() . "</p>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>