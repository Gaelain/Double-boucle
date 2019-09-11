<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>PHP Random</title>
    </head>
    <body>
        <h2>Tirage au sort d'un nombre :</h2>
        <?php
            $nombreOrdi = rand(0, 1000);
            $nombreJoueur = -1;
            $essais = 0;
            while ($nombreOrdi != $nombreJoueur)
            {
                $nombreJoueur = rand(0, 1000);
                $essais++;
            }
        ?>
        <p>bonjour</p>
        <p> <?php echo "Le nombre est ".$nombreOrdi; ?> </p>
        <p> <?php echo "Il a fallu ".$essais." essais pour trouver ce nombre"; ?> </p>

        <h2>Tableau :</h2>
        <?php
            $tableau = array();
            for ($i = 0; $i < 30; $i++)
            {
                $tableau[$i] = rand(0, 100);
            }
        ?>

        <table border="solid 1px black" cellspacing="0">
            <tr>
            <?php for ($i = 0; $i < 30; $i++)
            {
            ?>
                <td><?php echo $tableau[$i]; ?></td>
            <?php
            }
            ?>
            </tr>
        </table>
        
        <?php
            $tabNombre = array();
            for ($i = 0; $i <= 100; $i++)
            {
                $tabNombre[$i] = 0;
            }
            for ($i = 0; $i < 30; $i++)
            {
                $tabNombre[$tableau[$i]]++;
            }
        ?>
        <p>Valeurs : <?php echo array_sum($tabNombre); ?></p>
        <?php
            for ($i = 0; $i < 100; $i++)
            {
        ?>
        <p <?php if ($tabNombre[$i] >= 2)
        { 
        ?>
            id = "rouge"
        <?php 
        }
        ?>
        >
        La valeur <?php echo $i; ?> est présente <?php echo $tabNombre[$i]; ?> fois.</p>
        <?php
            }
        ?>
    </body>
</html>