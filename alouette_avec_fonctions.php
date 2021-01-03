<?php
require_once('alouette.inc.php');
require_once('fonctions.inc.php');

$titre = titre($oiseau, $qualite);
$affichage = chanson($oiseau, $qualite, $action, $membres);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="alouette.css" />
	<title><?php echo $titre ?></title>
</head>

<body>
	<?php include "menu.inc.php"; ?>
	<h1><?php echo $titre ?></h1>
	<?php echo $affichage ?>
</body>

</html>
