<?php
		$dbLink = mysqli_connect('mysql-webdev.alwaysdata.net', 'webdev_hercule', '04051997')
        or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

        mysqli_select_db($dbLink, 'webdev_hercule')
        or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
		$query = 'SELECT * FROM personne';
		
?>
<!doctype html>
<html class="" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/Stylesheet.css">
    <title>Filmathèque</title>
  </head>
  <body>
	<header>
	<a href="realisateur.php">Réalisateur</a>
	</header>
	<section id="informations generales">
		<h1>Blitz Wolf</h1>
		<div>
			<p>Note : 
				<meter min="0" max="5" value="4">4</meter>
			</p>
		</div>
		<div>
			<p>Réalisateur : Tex Avery</p>
			<p>Animateurs : Ray Abrams, Irven Spence, Preston Blair, Ed Love et Bernard Wolf</p>
			<p>Date de sortie :</p>
			<time>22 août 1942</time>
		</div>
		
		<div>
			<h2>Synopsis</h2>	
				<p>
				Ce dessin animé est une parodie de l'histoire bien connue des Trois Petits Cochons, produit dans le ton de la propagande anti-nazis de la Seconde Guerre mondiale. Dans ce dessin animé, les cochons partent en guerre contre Adolf le Loup (sous les traits d’Adolf Hitler), qui menace d'envahir Cochonland (Pigmania dans la version américaine). Les deux cochons qui construisent leurs maisons en paille et en bois déclarent qu'ils n'ont pas besoin de prendre des précautions contre le loup puisqu'ils ont signé un Pacte de non-agression avec lui. Le cochon qui construit sa maison en pierre, le Sergent Pur Porc (Sergeant Pork dans la version américaine) prend ses précautions et renforce sa maison avec un puissant dispositif de défense composé de barbelés, de bunkers, d'obusiers et de tranchées.
				Adolf le Loup envahit Cochonland, malgré les deux cochons lui rappelant qu'il a signé un traité avec eux. Il détruit leurs maisons jusqu'à ce que les cochons se replient sur la maison du Sergent Pur Porc. C'est alors que débute la bataille entre le loup et les cochons. À la fin du cartoon, Adolf le Loup est éjecté hors de son bombardier par les obus remplis d'obligation de guerre des cochons et chute vers le sol où une bombe qui explose l'envoie en enfer. Se rendant compte qu'il est mort il dit: « Où suis-je ? Ai-je été envoyé en... ? », ce à quoi un groupe de démons répond : « Aaaah, c'est possible! », en référence à la réplique culte de Jerry Colonna.
				</p>
		</div>
	</section>
	
	<div class="flex">
		<article id="gauche">
			<figure>
				<img src="img\Tex-Avery-small.jpeg" alt="Photo de Tex Avery, en noir et blanc">
				<figcaption>Tex Avery, Réalisateur</figcaption>
			</figure>
			<p>
				Tex Avery est un animateur qui a inventé grand nombre de personnages aujourd'hui cultes.
				Tex Avery naît le 26 février 1908 et passe son enfance dans sa ville natale de Taylor au Texas. Il commence à dessiner à l’âge de 13 ans en écrivant des bandes dessinées pour le journal de son lycée. Une phrase populaire à son école, « What's up, doc? » (« Quoi de neuf, docteur ? »), sera popularisée comme phrase principale de Bugs Bunny dans les années 1940.[réf. nécessaire]
				À la fin de son adolescence, il part faire des études au Art Institute of Chicago où il se forme aux métiers de dessinateur et d'animateur. Il obtient son diplôme à la North Dallas High School (en) en 19261. Ne trouvant aucun emploi en tant que dessinateur de bandes dessinées, Avery se lance dans l’animation, pensant qu’il aurait le temps de travailler sur sa première bande dessinée, et emménage en Californie.
			</p>
		</article>
		
		<article id="droite">
			<figure>
				<img src="img\Fred_Quimby.jpg" alt="Photo de Fred Quimby, en noir et blanc">
				<figcaption>Fred Quimby, Producteur</figcaption>
			</figure>
			<p>Fred Quimby est un producteur américain né le 31 juillet 1886 à Minneapolis, Minnesota (États-Unis), mort le 16 septembre 1965 à Santa Monica (États-Unis).</p>
			<p></p>
		</article>
	</div>
	
	<div class="flex">
		<article id="gauche">
			<figure>
				<img src="img\Tex-Avery-small.jpeg" alt="Photo de Tex Avery, en noir et blanc">
				<figcaption>Tex Avery, Réalisateur</figcaption>
			</figure>
			<p>Tex Avery est un animateur qui a inventé grand nombre de personnages aujourd'hui cultes.</p>
		</article>
		
		<article id="droite">
			<figure>
				<img src="img\Fred_Quimby.jpg" alt="Photo de Fred Quimby, en noir et blanc">
				<figcaption>Fred Quimby, Producteur</figcaption>
			</figure>
			<p>Fred Quimby est un producteur américain né le 31 juillet 1886 à Minneapolis, Minnesota (États-Unis), mort le 16 septembre 1965 à Santa Monica (États-Unis).</p>
			<p></p>
		</article>
	</div>
	
	<footer>Rabellino Damien</footer>
  </body>
</html>
