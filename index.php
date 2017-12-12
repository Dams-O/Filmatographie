<?php

    require_once('tools.php');

    $data = array();
    $data['titrePage'] = 'Filmathèque Rabellino';
    $data['films'] = getIntroFilm();

    getBlock('head.php',$data);

    getBlock('indexView.php',$data);

    getBlock('footer.php');