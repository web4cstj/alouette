<?php
require_once('includes/alouette.inc.php');
require_once('includes/Alouette.php');
// Consignes : reproduire le fonctionnement de la page modèle en utilisant
//   les variables contenues dans le fichier 'alouette.inc.php'.
$titre = Alouette::titre($oiseau, $qualite);
$affichage = '';
$affichage .= '<h1>'.$titre.'</h1>';
$affichage .= Alouette::chanson($oiseau, $qualite, $action, $membres);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/alouette.css" />
<title><?php echo $titre ?></title>
</head>
<body>
<?php include "includes/menu.inc.php"; ?>
<?php echo $affichage ?>
</body>
</html>
