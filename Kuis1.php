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
            text-align: center;
            font-weight: 300;
        }

        hr {
            border: 2px solid rgb(121, 26, 0);
        }
    </style>
</head>

<body>
    //nim : 250030069
    <h2>Angka yang Habis Dibagi 3</h2>
    <p>Hasilnya :</p>
    <hr>
    <?php
    $angka = range(1, 20);
    echo "dengan foreach <br>";
    foreach ($angka as $nilai) {
        if ($nilai % 3 == 0) {
            echo $nilai . "<br>";
        }
    }
    // saya buat 2 versi 
    echo " dengan for...<br>";
    for ($i = 0; $i < count($angka); $i++) {
        if ($angka[$i] % 3 == 0) {
            echo $angka[$i] . " % 3  = 0 <br>";
        } else {
            //angka tidak tampil
        }
    }

    ?>
</body>

</html>