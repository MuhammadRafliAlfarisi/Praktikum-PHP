<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>

<body>
    <h2>Latihan 2</h2>
    Hasil penjumlahan bilangan genap dari 0 sd 6 adalah
    <?php
    $a = 0;
    $b = 0;

    while ($b <= 6) {
        $a += $b;
        $b += 2;
    }

    echo $a;
    ?>
</body>

</html>