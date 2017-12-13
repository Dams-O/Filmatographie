<?php

    require_once('tools.php');
    $data = array();
    $data['titrePage'] = 'Filmathèque Rabellino';
    $data['films'] = getIndexFilm();

    getBlock('head.php',$data);
    
    getBlock('header.php',$data);

    getBlock('indexView.php',$data);
    
    getBlock('footer.php');