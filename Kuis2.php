<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis1</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 50px;
        }

        h2,
        p {
            text-align: left;
            font-weight: 300;
        }

        hr {
            border: .5px solid rgb(121, 26, 0);
            margin-right: 500px;
        }

        button {
            margin: 10px;
        }
    </style>
</head>

<body>
    <!-- nim : 250030069 -->
    <h2>Hitung Nilai Akhir</h2>
    <hr>
    <p>Hasil Program Biasa</p>
    <?php
    function hitungNilaiAkhir1($tugas, $uts, $uas)
    {
        $nilaiAkhir = ($tugas * 30 / 100) + ($uts * 30 / 100) + ($uas * 40 / 100);

        if ($nilaiAkhir >= 70) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }

        echo "Nilai Tugas: $tugas <br>";
        echo "Nilai UTS: $uts <br>";
        echo "Nilai UAS: $uas <br>";
        echo "Nilai Akhir: $nilaiAkhir <br>";
        echo "Status: $status";
    }

    hitungNilaiAkhir1(80, 80, 87.5);
    ?>
    <hr>
    <p>Hasil Program dengan input :</p>
    <form action="" method="post">
        <p>Nilai Tugas : <input type="number" name="tugas" min="0" max="100" required> </p>
        <br>
        <p>Nilai UTS : <input type="number" name="uts" min="0" max="100" required></p>
        <br>
        <p>Nilai UAS : <input type="number" name="uas" min="0" max="100" required></p>
        <br>
        <button type="submit" name="hitung">Hitung Nilai </button>



    </form>
    <hr>
    <?php
    function hitungNilaiAkhir($tugas, $uts, $uas)
    {
        $nilaiAkhir = ($tugas * 30 / 100) +
            ($uts * 30 / 100) +
            ($uas * 40 / 100);

        if ($nilaiAkhir >= 70) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }

        echo "Nilai Akhir: " . $nilaiAkhir . "<br>";
        echo "Status: " . $status;
    }

    if (isset($_POST['hitung'])) {
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];

        hitungNilaiAkhir($tugas, $uts, $uas);
    }
    ?>
</body>

</html>