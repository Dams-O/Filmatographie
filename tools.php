<?php
	ini_set('error_reporting', -1);
	ini_set('display_errors', 'on');

	require_once('bdd.php');
	
    function checkURL($id,$table){
        $listIds = getAllIds($table);
        foreach ($listIds as $real){
            if($real['id'] == $id){
                return;
            }
        }
        header('Location: http://deams.alwaysdata.net/');
    }

    function getAllIds($table){
        $dblink = mysqli_connect('mysql-deams.alwaysdata.net','deams','toto');
        $query = "select id from " . $table;
        return $dblink->ResultSQL($query);
    }

    function getAllName($table){
        $dblink = mysqli_connect('mysql-deams.alwaysdata.net','deams','toto');
        $query = "select nom from " . $table;
        return $dblink->ResultSQL($query);
    }

	function getBlock($file,$data = []){
		require_once $file;
	}

	// film dans l'index

	function getIndexFilm(){
        $dblink = new bdd('mysql-deams.alwaysdata.net','deams_sitephp','deams','toto');
        $query = "SELECT * FROM film WHERE id=1";
        return $res = $dblink->ResultSQL($query);
    }

    // Film sélectionné

	function getFilm($id){
		$dblink = mysqli_connect('mysql-deams.alwaysdata.net','deams','toto');
		$query = "select * from film where id=$id";
		$res = $dblink->ResultSQL($query);
		$res[0]['dateSortie'] = formatDate($res[0]['dateSortie']);
		$res[0]['notation'] = number_format($res[0]['notation'],1);
		return $res[0];
    }
    
    // Récupére le chemin de la photo du film (Film has photo)

    function getPhotoFilm($id){
        $dblink = mysqli_connect('mysql-deams.alwaysdata.net','deams','toto');
        $query = "select chemin, legende, role from photo p, film_has_photo f where p.id=f.id_photo and f.id_film=$id order by role";
        return $dblink->ResultSQL($query);
    }

    // Récupére les informations de la personne sélectionné

	function getPerson($nom){
		$dblink = mysqli_connect('mysql-deams.alwaysdata.net','deams','toto');
		$query = "select prenom, nom, dateNaissance, biographie, chemin from personne pr, personne_has_photo php, photo p where pr.id=php.id_personne and php.id_photo=p.id and nom='$nom'";
		$res = $dblink->ResultSQL($query);
		for ($i = 0; $i < count($res); ++$i) {
			$res[$i]['dateNaissance'] = formatDate($res[$i]['dateNaissance']);
		}
		return $res;
	}