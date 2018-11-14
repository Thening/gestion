<?php
include 'crud.php';
$nom =$_GET[nom];
$prenom =$_GET[prenom];
$date_naissance =$_GET[date_naissance];
$classe= $_GET[classe];
ajouterEleve($nom,$prenomm, $date_naissance, $classe);  
    ?>