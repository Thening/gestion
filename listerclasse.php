<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="gestion.css">
		<title>liste des classe</title>
	</head>
	<body>
    <?php
   include 'crud.php';
   $classe = listerClasse();
   $user= read('1');
   echo $user['nom_classe'];

    ?>
    
	</body>
</html>