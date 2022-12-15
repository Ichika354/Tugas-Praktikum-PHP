<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Penggunaan strtolower</h2>
    <?php 
        $string="Pemrorgaman web PHP";
        $word=strtolower($string);
        echo("<i>\"$string\"</i> <br>");
        echo("hasil strtolower adalah $word");
    ?>
</body>
</html>