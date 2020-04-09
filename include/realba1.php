 <!--REAL BA-->

 <div class="real-real">Réalisateur</div>

<div class="real-ba">


    

    <div class="real">
    <?php include ('connectbdd.php'); 

$id=$_GET['id'];

$req = $bdd ->prepare("SELECT f.id_film, f.bande_annonce, r.id_realisateur, r.nom, r.prenom, r.photo_realisateur, r.info_realisateur, c.id_film, c.id_realisateur  
                        FROM Realisateur r, Film f, realiser c  
                        WHERE c.id_film = f.id_film
                        AND c.id_realisateur = r.id_realisateur
                        AND c.id_film = $id");
                  
$req ->execute();
while($donnees = $req->fetch()){


?>
        <div class="img-real">
            <img src=<?php echo $donnees['photo_realisateur']; ?> alt="">
            <div><p><?php echo $donnees['nom']."   ". $donnees['prenom']; ?></p></div>
        </div>
        <div class="text-real">
        <p><?php echo $donnees['info_realisateur']; ?></p>
        </div>

        
    </div>

    <div class="ba-yt">
        <?php echo $donnees["bande_annonce"]; ?>
    </div>
    <?php } ?>
</div>
