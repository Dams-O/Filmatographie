<?php
	ini_set('error_reporting', '-1'); // '-1' : toutes les erreurs possibles
	ini_set('display_errors', 'on');
	ini_set('log_errors', 'on');
	ini_set('error_log', '/path/to/log/php.log');

	$dbLink = mysqli_connect('mysql-deams.alwaysdata.net', 'deams_toto', 'azertyu')
	or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

	mysqli_select_db($dbLink, 'deams_sitephp')
	or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
	mysqli_set_charset($dbLink, 'utf8');

	/*$query = 'SELECT * FROM personne';
	$stmt = mysqli_prepare($dbLink, $query);
	//mysqli_stmt_bind_param($stmt, "ii", $idMax, $idMin); // type: i, d, s or b
	$result = mysqli_stmt_execute($stmt)
	or die('Erreur dans la requête : ' . mysqli_error($dbLink));
	var_dump($stmt);
	var_dump($result);
	if (mysqli_num_rows($stmt) != 0) {
		while ($row = mysqli_fetch_assoc($stmt)) {
			echo $row['nom'];
		}
	} else {
		echo 'Pas de résultats';
	}*/

	list($idMin, $idMax) = [0, 10];
	$query = 'SELECT * FROM `personne`';
	$stmt = mysqli_prepare($dbLink, $query)
		or die('Échec de préparation de la requête : ' . mysqli_error($dbLink));
	/*mysqli_stmt_bind_param($stmt, "ii", $idMax, $idMin) // type: i, d, s or b
		or die('Échec de paramétrage de la requête : ' . mysqli_error($dbLink));*/
	mysqli_stmt_execute($stmt)
		or die('Erreur dans la requête : ' . mysqli_error($dbLink));
		
		
	$queryFilm = 'SELECT * FROM `film`';
	$stmtFilm = mysqli_prepare($dbLink, $queryFilm)
		or die('Échec de préparation de la requête : ' . mysqli_error($dbLink));
	mysqli_stmt_execute($stmtFilm)
		or die('Erreur dans la requête : ' . mysqli_error($dbLink))

	
	$result = mysqli_stmt_get_result($stmtfilm);
	if (mysqli_num_rows($result) != 0) {
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			include "php/infos.php";
		}
	} else {
			echo 'Pas de résultats';
		}
		
	$resultRea = mysqli_stmt_get_result($stmt);
	if (mysqli_num_rows($resultRea) != 0) {
		while ($row = mysqli_fetch_array($resultRea, MYSQLI_ASSOC)) {
            include "php/info_realisateur.php";
		}
	} else {
			echo 'Pas de résultats';
		}
	
	$data["nomF"] = "a";
	$data["time"] = "22 août 1942";
	$data["nom"] = "Tex Avery";
	$data["acteur"] = ["Ray Abrams", "Irven Spence", "Preston Blair", "Ed Love", "Bernard Wolf"];
	$data["synopsis"] = "toz";
	$data["photo"] = "img/Tex-Avery-small.jpeg";
	$data["note"] = "4";

	if ($result = mysqli_query($dbLink, "SELECT * FROM personne")) {

		/* Détermine le nombre de lignes du jeu de résultats */
		$row_cnt = mysqli_num_rows($result);

		printf("Le jeu de résultats a %d lignes.\n", $row_cnt);
		while ($row = mysqli_fetch_assoc($result)) {
?>

<!doctype html>
<html>
    <head>
        <title>Test</title>
        <link rel="stylesheet" href="css/Stylesheet.css"/>
        <meta charset="utf-8">
    </head>

    <body>
        <?php include "php/header.php";?>
        <article>
            <?php include "php/infos.php"; ?>
            <?php include "php/image.php" ?>
        </article>
        <aside>
            <h2>Réalisateur</h2>
            <?php include "php/info_realisateur.php"; ?>
            <h2>Acteurs</h2>
            <?php include "php/acteur_adapt.php"; ?>
        </aside>
    </body>
    <footer></footer>
</html>
<?php
        echo $row['nom'];
    }
    /* Ferme le jeu de résultats */
    mysqli_free_result($result);

}
?>
