<?php
include 'crud.php';
$idclasse= $_GET[idclasse];
$nom_classe =$_GET[nom_classe];
modifierClasse($idclasse, $nom_classe) ;
    ?>