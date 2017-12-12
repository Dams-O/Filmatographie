<?php

    require_once('tools.php');

    $data = array();
    $data['titrePage'] = 'Hugo Ciné';
    $data['films'] = getIntroFilm();

    getBlock('head.php',$data);

    getBlock('contenu_index.php',$data);

    getBlock('end.php');