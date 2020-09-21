<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>BLOG CESI</title>
</head>
<body>
    <h1>Blog CESI</h1>
    <p>Welcome sur le bog de CESI</p>
    <?php
    // Ici le code interprété par PHP.exe
    $a = false;
    $b = 12;
    $c = 12.5;
    $chaine = "Ceci est une chaine de caractère";

    echo "<p>".$b."</p>"; //Afficher des variables

    var_dump($chaine); //Exclusivement pour du DEBUG
    //Déclaration Tableau
    $arrayHomme = array("Brice","Benoit","Emmanuel","Fabien","Clément");
    $arrayFemme = ["Marion", "Sylvie", "Laurianne", "Isabelle"];

    echo $arrayHomme[0]."<br/>".$arrayHomme[3];

    $arrayHomme[] = "Xavier";
    $arrayFemme[] = "Virginie";

    var_dump($arrayHomme);

    $arrayHomme[0] = "Bricette";

    var_dump($arrayHomme);

    //Différence entre Guillemet simple et double
    $var = "Ma phrase intéressante";
    echo "<p>".$var."</p>";
    echo '<p>'.$var.'</p>';

    //Exo : Ecrire dans une balise <p> "Bonjour Emmanuel"
    // en utilisant $arrayHomme
    echo "<p>Bonjour ".$arrayHomme[2]."</p>";

    // L'intéret d'un tableau c'est de le parcourir
    //Parcours avec "for"
    for($i=0;$i<=count($arrayHomme) - 1;$i++){
        echo "<p>Salut ".$arrayHomme[$i].", comment ça va ?<p>";
    }

    // Tableau associatif
    $arrayFruits = ["F" => "Fraise","A" => "Abricot", "P" => "Pomme"];
    var_dump($arrayFruits);
    $arrayFruits["F"] = "Framboise";
    $arrayFruits["K"] = "Kiwi";
    var_dump($arrayFruits);

    //Parcour foreach
    foreach ($arrayFruits as $key => $value){
        //EXO : faire un echo qui affiche :
        // "L'index F correspond à Framboise"
        // Dans une balise <p>, pour chaque élément
        echo "<p>L'index ".$key." correspond à ".$value."</p>";


    }

    // Tableau milti-dimension
    //Tableau qui contient des tableaux, qui contient des taeaux ...
    $achats = [
            "A" => ["Prenom" => "Amandine", "Prix" => 85,
                "Panier" =>
                ["Fruit" => ["Fraise", "Framboise", "Pomme"]
                ,"Legume" => ["Salade", "Endive"]
                ]
            ],
            "B" => ["Prenom" => "Brice", "Prix" => 680,
            "Panier" =>
                ["Fruit" => ["Litchi", "Kiwi", "Pomme"]
                    ,"Legume" => ["Avocat", "Pomme de Terre"]
                ]
            ],
            "E" => ["Prenom" => "Emmanuel", "Prix" => 156,
                "Panier" =>
                    ["Fruit" => ["Peche", "Pomme", "Banane"]
                        ,"Legume" => ["Tomate", "Carotte", "Endive"]
                    ]
                ]
    ];
    var_dump($achats);
    ?>
    <!-- ICI le code PHP ne sera pas interprété -->
</body>
</html>