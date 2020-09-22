<?php
// IF, ELSEIF, ELSE traditionnel
$ok = false;
$age = 18;
$ville = 'Rouen';

if($ok) {
    echo "<p>la variable ok est à TRUE</p>";
}elseif($age >=18 AND ($ville == 'Paris' OR $ville=='Lille')){
    echo "<p>Tu es majeur et tu habites Paris ou Lille</p>";
}else{
    echo "<p>Rien ne correspond</p>";
}

// IF Ternaire (avant)
$majeur = "";
if($age >= 18){
    $majeur = "oui";
}else{
    $majeur = "non";
}
echo "<p>Suis-je majeur ? : ".$majeur."</p>";
// IF Ternaire (avec ternaire)
$majeur = ($age >=18) ? "carrément" : "carrément pas";
echo "<p>Suis-je majeur ? : ".$majeur."</p>";