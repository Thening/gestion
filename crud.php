<?php

function connexionBD(){
try {
    $user="root";
    $pass="";
    $pdo= new PDO ('mysql:host=localhost; dbname=ecoledb',$user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
catch( PDOException $e){
    print "Erreur !:" .$e->getMessage() . "<br/>";
    die();
}
   

}

function listerClasse(){

    $con= connexionBD();
    $requete= 'SELECT * FROM classe';
    $result= $con->query($requete);
    return $result;
}
function listerEleve(){
    $con= connexionBD();
    $requete= 'SELECT * FROM eleve';
    $result= $con->query($requete);
    return $result;

 }

function ajouterClasse($nom_classe){
   try{ $con= connexionBD();
    $ajout1= 'INSERT INTO classe (nom_classe) VALUES ($nom_classe)';    
    $con->exec($ajout1);
    }
    catch(PDOEception $e){
        echo $ajout1 . "<br>" . $e->getMessage();
    }
  }

function ajouterEleve($nom, $prenom, $date_naissace, $classe){
    try{ $con= connexionBD();
        $ajout2= 'INSERT INTO eleve (nom, prenom, date_naissance, classe) VALUES ($nom, $prenom, $date_naissace, $classe)';    
        $con->exec($ajout2);
        }
        catch(PDOEception $e){
            echo $ajout2 . "<br>" . $e->getMessage();
        }
  }

function suppimerClasse($idclasse){
    try{ $con= connexionBD();
        $sup1= "DELETE FROM classe 
        where idclasse = '$idclasse' ";    
        $con->query($sup1);
        }
        catch(PDOEception $e){
            echo $sup1 . "<br>" . $e->getMessage();
        }
  }

function suppimerEleve($ideleve){
    try{ $con= connexionBD();
        $sup2= "DELETE FROM eleve 
        where ideleve = '$idclasse' ";    
        $con->query($sup2);
        }
        catch(PDOEception $e){
            echo $sup2 . "<br>" . $e->getMessage();
        }
}

function modifierClasse($idclasse, $nom_classe){
    try{ $con= connexionBD();
        $modif= "UPDATE classe set
        nom_classe = '$nom_classe '
        where idclasse = '$idclasse'";    
        $con->query($modif);
        }
        catch(PDOEception $e){
            echo $modif . "<br>" . $e->getMessage();
        }
}

function read($idclasse){
    $con= connexionBD();
    $requete= "SELECT * FROM classe where idclasse='$idclasse' ";
    $stmt= $con->query($requete);
    $row=$stmt->fetchAll();
    if (! empty ($row)){
        return $row[0];
    }
}
?>