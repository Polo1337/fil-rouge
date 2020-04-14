<?php include('connectbdd.php'); ?>

<!--CATALOGUE FILMS-->

<div class="axeldroite">

    <?php

    $req = $bdd->prepare("SELECT * FROM film");
    $req->execute();

    while ($donnees = $req->fetch()) { ?>

        <a href="parasite.php?id=<?php echo $donnees['id_film']; ?>" class="versfilm">
            <div class="cardaxel">
                <img class="poster-img" src="<?php echo $donnees['affiche']; ?>" alt="">
                <div class="titrefilm"><?php echo $donnees['titre']; ?></div>
                <div class="infoaxel">
                    <div class="textaxel">
                        <p><?php echo $donnees['note']; ?>/5</p>
                        <p><?php echo $donnees['duree']; ?></p>
                        <p>Thriller</p>
                    </div>
                </div>
            </div>
        </a>

    <?php } ?>

</div>
</div>