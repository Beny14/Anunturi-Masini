<?php
    $imagini = [
        ['imagini' => 'Img/audi_rs5.jpg'],
        ['imagini' => 'Img/golf_7.jpg'],
        ['imagini' => 'Img/mustang.jpg'],
        ['imagini' => 'Img/audi_q7.png'],
        ['imagini' => 'Img/arteon.jpg'],
        ['imagini' => 'Img/urus.jpg']
    ];

    $titlu = [
        ['marca' => 'Audi ', 'model' => 'RS5', 'pret' => '30.000'],
        ['marca' => 'Volkswagen ', 'model' => 'Golf 7', 'pret' => '10.000'],
        ['marca' => 'Ford ', 'model' => 'Mustang', 'pret' => '25.000'],
        ['marca' => 'Audi ', 'model' => 'Q7', 'pret' => '45.000'],
        ['marca' => 'Volkswagen ', 'model' => 'Arteon', 'pret' => '40.000'],
        ['marca' => 'Lamborghini ', 'model' => 'Urus', 'pret' => '200.000']
    ];

    $descriere = [
        ['an' => '2013', 'km' => '43 000', 'cp' => '450', 'culoare' => 'Rosu'],
        ['an' => '2019', 'km' => '15 000', 'cp' => '150', 'culoare' => 'Gri'],
        ['an' => '2017', 'km' => '20 000', 'cp' => '200', 'culoare' => 'Albastru'],
        ['an' => '2018', 'km' => '120 000', 'cp' => '180', 'culoare' => 'Alb'],
        ['an' => '2019', 'km' => '28 120', 'cp' => '240', 'culoare' => 'Gri'],
        ['an' => '2019', 'km' => '12 000', 'cp' => '240', 'culoare' => 'Galben']
    ];
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Market</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Pentru acest exemplu s-au folosit urmatoarele: PHP (array), HTML, CSS.</h1>
        <div class="posi">

            <?php for ($i=0; $i < count($imagini); $i++) { ?>
                <?php for ($i=0; $i < count($titlu); $i++) { ?>
                    <?php for ($i=0; $i < count($descriere); $i++) { ?>
                            <img src="<?php echo $imagini[$i]['imagini'] ?>" alt="Not Working" height="100px" width="100px">
                            <h3><?php echo $titlu[$i]['marca'] . $titlu[$i]['model'] . ' - ' . $titlu[$i]['pret'] . ' Euro'?></h3>
                            <p><?php echo 'An:<strong>' . $descriere[$i]['an'] .'</strong>, Km: <strong>' . $descriere[$i]['km'] . '</strong>, CP: <strong>' . $descriere[$i]['cp'] . '</strong>, Culoare: <strong>' . $descriere[$i]['culoare'] ?></p>
                    <?php } ?>
                <?php } ?>
            <?php } ?>

        </div>
    </body>
</html>