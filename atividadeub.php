<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marco Davi">
    <!-- Responsável pela aparência  -->
    <link rel="stylesheet" href="atividadeub.css"/>
    <title>Atividade</title>
</head>

<body>
    <header class="cabeçalho"><img src="logounibraazul.png"></header>
    <!-- Tanto a tag Main quanto a Section são um espécie de divisão para a página(Tags Semânticas) -->
    <main>
        <section class="principal">
        <div class="cartao">
           <!-- H é uma espécie de título -->
            <h4>[FOR]</h4>
            <?php
            //Laço FOR precisando das três condições para funcionar.
            for ($i = 0; $i < 15; $i++) {
                if ($i != 2 and $i != 7) {


            ?><p>
                        índice[<?= $i ?>]
                    </p>

            <?php
                } else {
                    echo "<p>-</p>";
                }
            }
            ?>
        </div>
        <div class="cartao">
            <h4>[FOREACH]</h4>
            <?php
            $i = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
            foreach ($i as $indice => $elemento) { ?>
                <?php
                if ($indice == 14) {
                    echo "<p>-</p>";
                } else {
                ?>
                    <p>índice[<?= $elemento ?>]</p>
            <?php

                }
            } ?>
        </div>
        <div class="cartao">
            <h4>[WHILE]</h4>
            <?php
            $i=0;
            while ($i < 15) {
                echo"<p>índice[".$i."].</p>";
                $i++;
            }
            ?>
        </div>
        </section>
    </main>
</body>

</html>