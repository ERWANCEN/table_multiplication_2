<?php

// j'affecte à la variable "$nombreDeColonnes", le nombre de colonnes que je souhaite avoir dans mon tableau final
$nombreDeColonnes = 9;

// j'affecte à la variable "$a" la valeur 1
$a = 1;

// j'affecte à la variable "$tab" un tableau vide
$tab = [];

// je crée une boucle "while" qui va se répéter tant que la valeur de la variable "$a" sera inférieure à la valeur de la variable "$nombreDeColonnes"
while ($a <= $nombreDeColonnes) {

    // à chaque tour de ma boucle, j'ajoute dans le tableau "$tab" la valeur actuelle de la variable "$a" pour obtenir une suite de valeurs correspondant au nombre de colonnes
    array_push($tab, $a);

    // j'augmente la valeur de la variable "$a" de 1 à chaque tour de boucle
    $a++;
}

// idée originelle mais qui ne permet pas une modification simple
// $tab = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Multiplication 2</title>
    <style>
        /* style CSS */
        table, tr, th, td {
            border-collapse: collapse;
        }
        table {
            border: 2px solid black;
            margin: auto;
            margin-top: 50px;
        }
        th {
            background: lightgrey;
            border: 1px solid black;
        }
        td {
            width: 30px;
            height: 30px;
            text-align: center;
            background: black;
            color: white;
            border: 1px solid white;
        }
    </style>
</head>
<body>
    <table>
        <!-- ===== expérimentations ===== -->
            <!-- <?php // for ($i = 1; $i < $nombreDeColonnes; $i++) : ?>
                <th>Mult.</th>
                <th><?php // echo $i; ?></th>
                    <?php // for ($j = 1; $j < $nombreDeRangees; $j++) : ?>
                        <tr>
                            <th><?php // echo $j; ?></th>
                            <?php // for ($k = 1; $k < $nombreDeColonnes; $k++) : ?>
                                <td><?php // echo $j * $i; ?></td>
                            <?php // endfor; ?>
                        </tr>
                    <?php // endfor; ?>
            <?php // endfor; ?> -->
        <!-- ========== -->

        <!-- j'initialise la première ligne de ma table de mutliplication -->
        <tr>

        <!-- je crée manuellement la valeur de la première case du tableau -->
            <th>Mult.</th>

            <!-- j'ouvre PHP et commence une boucle "foreach()" qui va me permettre de récupérer les valeurs de mon tableau "$tab" -->
             <!-- je dis donc que nous allons parcourir les valeurs du tableau "$tab" et enregistrer chaque valeur dans la variable "$tabValue" -->
            <?php foreach ($tab as $tabValue) : ?>

                <!-- à chaque tour, j'écris dans une nouvelle balise "<th></th>" la valeur associée qui est extraite de la variable "$tabValue" -->
                <th><?php echo $tabValue ?></th>

                <!-- je mets fin à la boucle "foreach()" -->
            <?php endforeach; ?>

            <!-- j'initialise la même boucle que plus haut -->
            <?php foreach ($tab as $tabValue) : ?>

                <!-- à chaque tour de boucle, je crée une nouvelle ligne du tableau -->
                <tr>

                    <!-- à chaque tour de boucle, je crée une nouvelle balise "<th></th>" dans laquelle j'affecte la valeur correspondante à la variable "$tabValue" -->
                    <th><?php echo $tabValue; ?></th>

                    <!-- je crée une boucle "for()" qui à pour condition :
                        - j'affecte à la variable "$i", 0
                        - tant que la variable "$i" est inférieure à la valeur de la variable "$nombreDeColonnes", je refais un tour de boucle
                        - à chaque tour, j'ajoute 1 à la valeur de la variable "$i" -->
                    <?php for ($i = 0; $i < $nombreDeColonnes; $i++) : ?>

                        <!-- pour chaque tour de boucle : 
                        - j'affiche le résultat de la valeur correspondante à la variable "$i" dans le tableau "$tab"
                            - exemple : si "$i" = 3, alors, regarder dans "$tab" la valeur de l'emplacement 3
                        - et je la multiplie par la valeur actuelle de "$tabValue" -->
                        <td><?php echo $tab[$i] * $tabValue; ?></td>

                    <!-- je mets fin à la boucle "for()" -->
                    <?php endfor; ?>
                </tr>
            <!-- je mets fin à la boucle "foreach()" -->
            <?php endforeach; ?>
        </tr>
            
        
    </table>
</body>
</html>