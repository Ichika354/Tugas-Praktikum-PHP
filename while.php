<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <h2>Penggunaan kontrol array</h2>
    <?php 
        $hari = array("Senin", "Selasa", "Rabu", "Kamis", "Juma'at", "Sabtu", "Minggu");
        $i = 0;
        while ($i < count($hari)) {
            echo ("Hari ke " .($i + 1 )."adalah" .$hari[$i]. "<br>");
            $i++;
        }
    ?>
</body>
</html>