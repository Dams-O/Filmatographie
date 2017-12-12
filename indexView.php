<body>
    <h1 id="titreIndex">Les Cartoons !!</h1>
    <section>
        <table id="id_filmogrphie">
            <?php
            foreach($data['films'] as $film){
                echo '<tr>' . "\n";
                echo '<td><a href="http://deams.alwaysdata.net/info_film.php?id=' . $film['id'] . '"><img src="' . $film['chemin'] . '"></a></td>';
                echo '<td><a href="http://deams.alwaysdata.net/info_film.php?id=' . $film['id'] . '">' . $film['titre'] . '</a></td>' . "\n";
                echo '</tr>' . "\n";
            }
            ?>
        </table>
        <a href="#titreIndex"><img id="fleche" src="img/fleche.png"></a>
    </section>

    <?php getBlock('footer.html'); ?>
</body>