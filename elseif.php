<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If</title>
</head>
<body>
    <h2> Penggunaan kontrol if </h2>

    <?php 
        $nilai = 80;
        echo ("Nilai anda $nilai");

        if ($nilai >= 85 ) {
            echo "Grade A";
        } elseif (($nilai >= 75) and ($nilai < 85) ){
            echo "Grade B";
        } elseif (($nilai >= 65) and ($nilai < 75) ){
            echo "Grade C";
        } elseif (($nilai >= 50) and ($nilai < 65) ){
            echo "Grade D";
        } elseif ($nilai < 50) {
            echo "Grade E";
        }
    ?>
</body>
</html>