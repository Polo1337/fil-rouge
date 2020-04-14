<!--Liste acteurs-->


<div class="acteurs-titre">Acteurs</div>



<section class="liste-acteurs">

    <?php include('connectbdd.php');

    $id = $_GET['id'];

    $req = $bdd->prepare("SELECT f.id_film, f.titre, a.id_acteur, a.nom, a.prenom, a.photo_acteur, j.id_film, j.id_acteur  
                        FROM acteur a, film f, jouer j  
                        WHERE j.id_film = f.id_film
                        AND j.id_acteur = a.id_acteur
                        AND j.id_film = $id");

    $req->execute();
    while ($donnees = $req->fetch()) {


    ?>
        <div class="acteur">
            <img class="img-acteur" src=<?php echo $donnees['photo_acteur']; ?> alt="">
            <div>
                <p><?php echo $donnees['nom'] . "   " . $donnees['prenom']; ?></p>
            </div>
        </div>

    <?php } ?>

</section>