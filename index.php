<?php

    require_once('tools.php');

    $data = array();
    $data['titrePage'] = 'Filmathèque Rabellino';
    $data['films'] = getIntroFilm();

    getBlock('head.php',$data);

    getBlock('indexView.php',$data);

    getBlock('footer.php');

    $idFilm = $_GET['id'];
    checkURL($idFilm,'film');
  
    $data = array();
    $data['titrePage'] = getFilm($idFilm)['titre'];
    $data['infoFilm'] = getFilm($idFilm);
    $data['photoFilm'] = getPhotoFilm($idFilm);
    $data['infoRealisateur'] = getParticipant('realisateur',$idFilm)[0];
    $data['infoActeur'] = getParticipant('acteur',$idFilm);