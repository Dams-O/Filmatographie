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
        $dblink = new Mysql('mysql-deams.alwaysdata.net','deams_sitephp','deams','toto');
        $query = "select id from " . $table;
        return $dblink->TabResSQL($query);
    }

    function getAllNom($table){
        $dblink = new Mysql('mysql-deams.alwaysdata.net','deams_sitephp','deams','toto');
        $query = "select nom from " . $table;
        return $dblink->TabResSQL($query);
    }

	function getBlock($file,$data = []){
		require_once $file;
	}

	// INDEX

	function getIntroFilm(){
        $dblink = new Mysql('mysql-deams.alwaysdata.net','deams_sitephp','deams','toto');
        $query = "select * from film";
        return $res = $dblink->TabResSQL($query);
    }

    // FILM

	function getFilm($id){
		$dblink = new Mysql('mysql-deams.alwaysdata.net','deams_sitephp','deams','toto');
		$query = "select * from film where id=$id";
		$res = $dblink->TabResSQL($query);
		$res[0]['dateSortie'] = formatDate($res[0]['dateSortie']);
		$res[0]['notation'] = number_format($res[0]['notation'],1);
		return $res[0];
	}

    function getPhotoFilm($id){
        $dblink = new Mysql('mysql-deams.alwaysdata.net','deams_sitephp','deams','toto');
        $query = "select chemin, legende, role from photo p, film_has_photo f where p.id=f.id_photo and f.id_film=$id order by role";
        return $dblink->TabResSQL($query);
    }

    function getParticipant($role,$idFilm){
        $dblink = new Mysql('mysql-deams.alwaysdata.net','deams_sitephp','deams','toto');
        $query = "select prenom, nom, chemin, legende from personne p, film_has_personne fhp, personne_has_photo php, photo ph where p.id=fhp.id_personne and p.id=php.id_personne and php.id_photo=ph.id and role ='$role' and id_film=$idFilm order by prenom";
        return $dblink->TabResSQL($query);
    }

	function getPerson($nom){
		$dblink = new Mysql('mysql-deams.alwaysdata.net','deams_sitephp','deams','toto');
		$query = "select prenom, nom, dateNaissance, biographie, chemin from personne pr, personne_has_photo php, photo p where pr.id=php.id_personne and php.id_photo=p.id and nom='$nom'";
		$res = $dblink->TabResSQL($query);
		for ($i = 0; $i < count($res); ++$i) {
			$res[$i]['dateNaissance'] = formatDate($res[$i]['dateNaissance']);
		}
		return $res;
	}

	function getFilmographie($nom){
        $dblink = new Mysql('mysql-deams.alwaysdata.net','deams_sitephp','deams','toto');
        $query = "select f.id, chemin, titre from photo p, film_has_photo fhp, film f, film_has_personne fhr, personne pr where pr.id=fhr.id_personne and fhr.id_film=f.id and f.id=fhp.id_film and fhp.id_photo=p.id and pr.nom='$nom' and fhp.role='affiche' order by titre";
        return $dblink->TabResSQL($query);
    }